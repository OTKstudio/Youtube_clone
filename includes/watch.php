<?php 
    $userid = 'brecht';
    $statut = 'abonne';
    $notif = '';
    $msg='';
    $count=0;
    $username = 'nulls';
    // Recupere l ID de la video youtube
    if(isset($_GET['vid'])){
        $id = $_GET['vid'];
        $this->_videoManager = new VideoManager;
        $videos = $this->_videoManager->getVideobyId('all_video', 'videoid', $id, 'Video');
        foreach($videos as $video){
          $tab['vid'] = $video->videoId();
          $tab['vtitle'] = $video->videoTitle();
          $tab['turl'] = $video->thumbUrl();
          $tab['cid'] = $video->channelId();
          $channelid = $video->channelId();
          $tab['ctitle'] = $video->channelTitle();
          $channeltitle = $video->channelTitle();
          $tab['username'] = $userid;
          $tab['dpublish'] = $video->date();
          // $this->_videoManager->postHist($tab);
        }
        $abonneverif1 = $this->_videoManager->getVideobyId('abonnement', 'userid', 'brecht', 'Video');
        foreach($abonneverif1 as $video){
          $count++;
        }
        $abonneverif2 = $this->_videoManager->getVideobyId('abonnement', 'channelid', $channelid, 'Video');
        foreach($abonneverif2 as $video){
          $count++;
        }
                //Gere les Abonnements
                if($count >= 2){
                  $abonne_btn = "<button name='desabonne' class='abonne'>abonne</button>";
                  $notif = "<img src='./src/assets/css/bootstrap_icons/bell-fill-white.svg'>";
                }else{
                  $abonne_txt = 'S abonner';
                  $abonne_btn = "<button name='abonne'>S abonner</button>";
                }
                if(isset($_POST['abonne'])){
                  if($username == 'null'){
                    $msg = "Vieullez vous connecter | <a href='login' class='login_link'>Se connecter</a>";
                  }
                  else{
                      $abonne_btn = "<button name='desabonne' class='abonne'>abonne</button>";
                      $notif = "<img src='./src/assets/css/bootstrap_icons/bell-fill-white.svg'>";
                      $tab['username'] = $userid;
                      $tab['cid'] = $channelid;
                      $tab['ctitle'] = $channeltitle;
                      $tab['statut'] = "abonne";
                      $this->_videoManager->postAbon($tab);
                      $this->_videoManager->postNotif($tab);
                      foreach($videos as $video):
                        $getVideo =  $this->_videoManager->getVideobyId('all_video','channelid',$video->ChannelId(),'Video');
                        $videoCount = count($getVideo);
                      endforeach;
                      $this->_videoManager->upbyId('abonnement','videocount',$videoCount,'userid',$userid);
                  }
                }
        
                if(isset($_POST['desabonne'])){
                    $this->_videoManager->desabonne('abonnement', 'userid', $userid);
                    $abonne_btn = "<button name='abonne'>S'abonner</button>";
                    $notif = "";
                }
    }
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
               <p>20k <span> Vues </span> | publie le <span><?= $video->date() ?></span></p>
               <div class="video_info-tools">
                   <div class="tool">
                     <img src="./src/assets/css/bootstrap_icons/hand-thumbs-up-fill.svg" alt="">
                     <p>00</p>
                   </div>
                   <div class="tool">
                     <img src="./src/assets/css/bootstrap_icons/hand-thumbs-down-fill.svg" alt="">
                     <p>00</p>
                   </div>
                   <div class="tool">
                     <img src="./src/assets/css/bootstrap_icons/share-fill.svg" alt="">
                     <p>Partager</p>
                   </div>
                   <div class="tool">
                    <img src="./src/assets/css/bootstrap_icons/plus-square-dotted.svg" alt="">
                    <p>Enregistrer</p>
                  </div>
               </div>
               <div class="channel_info">
                   <div class="channel_info-name">
                      <img src="./src/assets/css/bootstrap_icons/person-circle-white.svg" alt="">
                      <div class="name_info">
                         <p><?= $video->channelTitle() ?></p>
                         <p>20k <span>Abonnes</span></p>
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
                   </div>
               </div>
           </div>
       </div>
       <div class="video_playlist">
        <p>PLAYLISTS</p>
        <div class="plist_items">
            <div class="plist_item">
                <img src="./src/assets/img/javascript_1.jpg" alt="">
                <div class="plist_info">
                    <div class="plist_title">
                        <h1>Cities skylines airports</h1>
                    </div>
                    <div>
                        <p>Bill Sylverleight</p>
                        <p>10 vues | <small>23 janvier 2022</small></p>
                    </div>
                </div>
                <span class="plist_time">12:00</span>
            </div>
        </div>
       </div>
</div>