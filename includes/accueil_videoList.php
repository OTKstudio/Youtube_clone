
<div class="list_video">
    <div class="lst_container">
    <?php
     foreach($videos as $video): ?>
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
          <p>20<span> Vues | </span> il y'a <span>1mois</span></p>
         </div>
         <!-- <span class="lst-time">12:00</span> -->
       </div>
     </a>
    <?php
    endforeach; ?>
    </div>
</div>