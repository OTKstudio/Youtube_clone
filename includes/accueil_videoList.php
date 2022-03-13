
<div class="list_video">
    <div class="lst_container">
    <?php
     if($checkConnect=='noconnect'){
     foreach($videos as $video):
      $getAbonne = $this->_videoManager->getVideobyId('abonnement','channelid',$video->ChannelId(),'Video');
      $abonneCount = count($getAbonne);
      $this->_videoManager->upbyId('channels','abonnecount',$abonneCount,'channelid',$video->channelId());
      ?>
     <a href="watch&vid=<?= $video->videoId() ?>">
       <div class="lst_item">
         <div class="list-img">
          <img src="<?= $video->thumbUrl() ?>" alt="">
         </div>
         <div class="lst_item-title">
            <img src="./src/assets/css/bootstrap_icons/person-circle-white.svg" alt="">
            <div class="item-title">
               <h1><?= $video->videoTitle() ?></h1>
            </div>
         </div>
         <span class="lst_channel"><?= $video->channelTitle() ?></span>
         <div class="lst_item-info">
          <p><?php if(!empty($video->vueCount())){ echo nbr_vue($video->vueCount()) ;}else{echo'00';} ?><span> Vues | </span> Publie : <span><?= time_elapsed_string($video->date()) ?></span></p>
         </div>
         <!-- <span class="lst-time">12:00</span> -->
       </div>
     </a>
    <?php endforeach; ?>
    <?php 
    }else{ ?>
      <div class="connect_statut">
         
        <img src="./src/assets/img/no-internet.jpg" alt="">
      </div>
      <?php };?>
    </div>
</div>