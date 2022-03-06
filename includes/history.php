<?php 
    $count = 0;
    $this->_videoManager = new VideoManager;
    $videos = $this->_videoManager->getVideobyId('history', 'username', $userid, 'Video');
?>
<section class="history_containner">
    <div class="history_list">
        <h1>Historique de visionnage</h1>
        <div class="list-items">
          <?php
            foreach($videos as $video){
                $count++;
                if($count != 0){
                    ?>
                    <div class="list-item">
                        <div class="list-img-his">
                            <img src="<?= $video->thumbUrl()?>" alt=''>
                        </div>
                        <div class="list-info">
                            <h1><?= $video->videoTitle() ?></h1>
                            <p><?= $video->channelTitle() ?> | <span>00</span> Vues</p>
                            <p>description: aucune information </p>
                        </div>
                   </div>
                   <?php } ?>
         <?php }
           if($count == 0){
            echo"<h1>Historique vide, vieuller vous connecter et visionner une video | <a href='login' class='login_link'>Se connecter</a></h1>";
           }
         ?>
        </div>
    </div>
    <div class="history_param">
      <div class="param-search">
        <i class="las la-search"></i>
          <input type="text" name="" placeholder="rechercher l'historique">
      </div> 
      <h1>Parametre de l'historique</h1>
      <hr class="dashed">
      <div class="param-tools">
          <p><i class="las la-trash"></i>  Effacer historique</p>
          <p><i class="las la-pause-circle"></i>  Suspendre historique</p>
          <p><i class="las la-cog"></i>  Gerer historique</p>
          <p><i class="las la-question-circle"></i>  Aide</p>
      </div>
    </div>
</section>