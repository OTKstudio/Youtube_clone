<?php 
 
    $count = 0;
    $videoManager = new VideoManager;
    $navUserChnl = $videoManager->getVideobyId('abonnement', 'userid', $userid, 'Video');

?>
<section class="ytb_expl">
  <div class="expl_container">
    <a href="index.php">
    <div class="expl_item active">
      <img src="./src/assets/css/bootstrap_icons/house-fill.svg"  width="25" height="25">
      <p>Acceuil</p>
    </div>
    </a>
    <div class="expl_item">
      <img src="./src/assets/css/bootstrap_icons/globe2.svg"  width="25" height="25">
      <p>Explorer</p>
    </div>
    <div class="expl_item">
      <img src="./src/assets/css/bootstrap_icons/collection-play.svg"  width="25" height="25">
      <p>Abonnement</p>
    </div>
    <hr class="dashed">
    <div class="expl_item">
      <img src="./src/assets/css/bootstrap_icons/grid-3x3-gap.svg"  width="25" height="25">
      <p>Bibliotheque</p>
    </div>
    <a href="history">
    <div class="expl_item">
      <img src="./src/assets/css/bootstrap_icons/clock-history.svg"  width="25" height="25">
      <p>Historique</p>
    </div>
    </a>
    <hr class="dashed">
    <p class="abonne_txt">Abonnement</p>
    <?php if(!empty($userid)){
      foreach($navUserChnl as $userChnl){
      ?>
      <a href="channel&cid=<?= $userChnl->ChannelId() ?>">
      <div class="expl_item userchannel">
        <img src="./src/assets/css/bootstrap_icons/person-circle-white.svg"  width="25" height="25">
        <p><?= $userChnl->channelTitle() ?></p>
      </div>
      </a>
      <?php } }else{ ?>
        <div class="expl_user">
        <p>Connectez-vous à YouTube pour cliquer sur "J'aime", ajouter un commentaire et vous abonner.</p>
        <button>Se connecter</button>
      </div>
    <?php } ?>
    <hr class="dashed">
    <div class="expl_tops">
      <p>le meilleur de youtube</p>
      <div class="expl_top">
       <div class="icon">
         <i class="las la-music"></i>
       </div>
        <p>Musique</p>
      </div>
      <div class="expl_top">
        <div class="icon">
          <i class="las la-trophy"></i>
        </div>
         <p>Sport</p>
       </div>
       <div class="expl_top">
        <div class="icon">
          <i class="las la-gamepad"></i>
        </div>
         <p>Jeux Video</p>
       </div>
       <div class="expl_top">
        <div class="icon">
          <i class="las la-video"></i>
        </div>
         <p>Anime</p>
       </div>
    </div>
    <hr class="dashed">
    <div class="expl_chanel">
      <i class="las la-plus-circle"></i>
      <p>Chaines</p>
    </div>
    <hr class="dashed">
    <div class="expl_tools">
      <div class="expl_chanel">
        <i class="las la-cog"></i>
        <p>Parametre</p>
      </div>
      <div class="expl_chanel">
        <i class="las la-exclamation-circle"></i>
        <p>Aide</p>
      </div>
      <hr class="dashed">
      <span>OTKstudio</span>
      <p class="expl_footer">Présentation Presse Droits d'auteur Nous contacter Créateurs Publicité Développeurs
       Conditions d'utilisation Confidentialité Règles et sécurité Premiers pas sur YouTubeTester
       de nouvelles fonctionnalités
      </p>
    </div>
  </div>
</section>