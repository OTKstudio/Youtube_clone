<?php 

    $statut = 'abonne';
    $notif = '';
    $msg='';
    $count = 0;
    $videoVue = 1;

    // Recupere l ID de la video youtube
    if(isset($_GET['vid'])){
        $id = $_GET['vid'];
        $this->_videoManager = new VideoManager;
        
        // Fonction qui  gere l'historique et update le nombre vue
        include('./src/functions/history_gestion.php');
        
        // Fonction qui gere les abonnement et desabonnement
        include('./src/functions/abonne_check.php');
    }
    
    // Fonction qui gere les likes et dislikes 
    include('./src/functions/like_dislike.php');
?>
<div class="watch_container">
       <div class="video_info">
            <?php
            foreach($videos as $video): ?>
           <div class="video_player">
           <iframe width="100%" height="100%"
            src="https://www.youtube.com/embed/<?= $video->videoId() ?>?autoplay=1&mute=1">
            </iframe>
           </div>
           <div class="video_info-descrip">
               <h1><?= $video->videoTitle() ?></h1>
               <p><?php if(!empty($video->vueCount())){ echo $video->vueCount();}else{echo'00';} ?> <span> Vues </span> | publie le <span><?= time_elapsed_string($video->date()) ?></span></p>
               <div class="video_info-tools">
                   <form action="" method="POST" >
                   <button class="tool" name="<?= $likeNotif ?>">
                     <img src="./src/assets/css/bootstrap_icons/hand-thumbs-up-fill.svg">
                     <p><?php if(!empty($video->likeCount())){ echo $video->likeCount();}else{echo'00';} ?></p>
                   </button>
                   </form>
                   <form action="" method="POST" >
                   <button class="tool" name="<?= $dislikeNotif ?>">
                     <img src="./src/assets/css/bootstrap_icons/hand-thumbs-down-fill.svg" alt="">
                     <p><?php if(!empty($video->dislikeCount())){ echo $video->dislikeCount();}else{echo'00';} ?></p>
                   </button>
                   </form>
                   <form action="" method="POST" >
                   <button class="tool">
                     <img src="./src/assets/css/bootstrap_icons/share-fill.svg" alt="">
                     <p>Partager</p>
                   </button>
                   </form>
                   <form action="" method="POST" >
                   <button class="tool">
                    <img src="./src/assets/css/bootstrap_icons/plus-square-dotted.svg" alt="">
                    <p>Enregistrer</p>
                  </button>
                   </form>
               </div>
               <div class="channel_info">
                   <div class="channel_info-name">
                      <img src="./src/assets/css/bootstrap_icons/person-circle-white.svg" alt="">
                      <div class="name_info">
                       <p><?= $video->channelTitle() ?></p>
                      </div>
                   </div>
                   <form action="" method="POST">
                     <div class="btn_abonne">
                     <?= $abonne_btn ?>
                      <?= $notif ?>
                     </div>
                   </form>
               </div>
               <?php endforeach; ?>
               <p class="watch_link"><?= $msg ?></p>
               <div class="video_comment">
                   <h1>Commentaires (<span>00</span>)</h1>
                   <div class="comment_container">
                    <ul class="tree">
                        <li>
                          <div class="ytb_info_txt">
                            <div class="ytb_pseudo">
                              <p>RO</p>
                            </div>
                                <div class="ytb_cmt">
                                   <div class="comment-txt">
                                       <p class="comment-txt-1">
                                         <span>ROMARIC</span><br>
                                         Woauh Brecht tu es tres fort, je fais comment pour etre comme toi
                                        </p>
                                        <div class="comment_tools">
                                          <p>12/12/2022</p>
                                          <p>j'aime</p>
                                          <p><a href="#demo-modal">repondre</a></p>
                                        </div>
                                   </div>
                                </div>
                            </div>
                           <li><button class="ytb_resp" onclick="profileCommentToggle();">Afficher Reponse</button>
                         <ul class="show_response">
                          <li>
                            <div class="ytb_info_txt">
                              <div class="ytb_pseudo">
                                <p>BR</p>
                              </div>
                              <div class="ytb_cmt">
                                    <div class="comment-txt">
                                        <p class="comment-txt-1">
                                        <span>BRECHT</span><br>
                                        Weep la forme, merci bro bro pour le compliment thanks
                                        </p>
                                      <div class="comment_tools">
                                         <p>12/12/2022</p>
                                         <p>j'aime</p>
                                         <p>Reponse Brecht</p>
                                       </div>
                                    </div>
                                </div>
                             </div>
                          </li>
                          </li>
                          <li>
                            <div class="ytb_info_txt">
                              <div class="ytb_pseudo">
                                <p>BR</p>
                              </div>
                                  <div class="ytb_cmt">
                                     <div class="comment-txt">
                                         <p class="comment-txt-1">
                                           <span>BRECHT</span><br>
                                           Weep la forme, merci bro bro pour le compliment thanks
                                          </p>
                                          <div class="comment_tools">
                                            <p>12/12/2022</p>
                                            <p>j'aime</p>
                                            <p>Reponse Brecht</p>
                                          </div>
                                     </div>
                                  </div>
                              </div>
                          </li>
                         </ul> 
                   </div>
               </div>
           </div>
       </div>
       <div class="video_playlist">
       <?php
             $playlists = $this->_videoManager->getVideobyId('all_video', 'channelid', $video->channelId(), 'Video');
             $plistcount= count($playlists)-1;
        ?>
        <p>PLAYLISTS | <?php if(!empty($plistcount)){ echo $plistcount;}else{echo'00';} ?> Videos</p>
        <div class="plist_items">
          <?php
            foreach($playlists as $playlist){  if($playlist->videoId() ==$video->videoId() ){continue;} ?>
             <div class="plist_item">
                <img src="<?= $playlist->thumbUrl() ?>" alt="">
                <div class="plist_info">
                    <div class="plist_title">
                        <h1><?= $playlist->videoTitle() ?></h1>
                    </div>
                    <div class="plist_other">
                        <p><?= $playlist->channelTitle() ?></p>
                        <p><?php if(!empty($playlist->vueCount())){ echo $playlist->vueCount();}else{echo'00';} ?> vues</small></p>
                    </div>
                </div>
                <span class="plist_time">00:00</span>
            </div>
           <?php } ?>
        </div>
       </div>
</div>
<div id="demo-modal" class="modal">
  <div class="modal__content">
    <h1 class="modal_title">repondre a Brecht</h1>
      <div class="modal_txt">
          <form action="" method="POST" autocomplete="off">
            <div class="form-control">
              <textarea name="" id="" cols="50" rows="10"></textarea>
            </div>
           <button class="btn_code btn-primary" name="verif_code">Valider</button>
          </form>
      </div>
      <a href="" class="modal__close">&times;</a>
    </div>
</div>