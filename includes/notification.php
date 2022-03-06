<?php 
 
    $count = 0;
    $this->_videoManager = new VideoManager;
    $videos = $this->_videoManager->getVideobyId('notifications', 'userid','brecht', 'Video');


?>
<section class="history_containner">
    <div class="history_list">
        <h1 style="font-size: 25px;">Notifications</h1>
        <div class="list-items">
          <?php
                foreach($videos as $video){
                  $notifs = $this->_videoManager->getVideobyId('all_video', 'channelid',$video->ChannelId(), 'Video');
                  
                  foreach($notifs as $notif){ 
                   $count++;
                   if ($count>$video->videoAdd()) {break;}
                   if($count != 0){
                      ?>
                      <div class="list-item">
                          <div class="list-img-his">
                              <img src="<?= $notif->thumbUrl()?>" alt=''>
                          </div>
                          <div class="list-info">
                              <h1><?= $notif->videoTitle() ?></h1>
                              <p><?= $notif->channelTitle() ?> | <span>00</span> Vues</p>
                              <p>description: aucune information </p>
                          </div>
                     </div>
                     <?php } ?>
                     <?php } ?>
         <?php } 
           if($count == 0){
             echo"<h1>notifiation vide, vieuller vous abonner a une chaine | <a href='login' class='login_link'>Se connecter</a></h1>";
           }
         ?>
        </div>
    </div>
    <div class="history_param">
      <div class="param-search">
        <i class="las la-search"></i>
          <input type="text" name="" placeholder="rechercher l'notifiation">
      </div> 
      <h1>Parametre des Notifications</h1>
      <hr class="dashed">
      <div class="param-tools">
        <div class="notif_channel">
            <div class="channel_lst">
                <img src="" alt="">
                <p>Nom Chaine</p>
            </div>
        </div>
      </div>
    </div>
</section>