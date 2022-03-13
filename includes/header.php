<?php
session_start();
?>
<?php

  //Fonctionnbr_vue qui nous permet d'avoir une precision sur le nombre de
  include('./src/functions/nbr_vue.php');
   
  //Fonction time_elapsed qui nous permet d'avoir une precision de temps
  include('./src/functions/time_elapsed.php');

  //Fonction check qui verifie la connexion internet grace a @fopen
  include('./src/functions/check_connection.php');

  // Google authentification lors du register ou login
  include('./src/functions/google_login.php');

  //  Creation de cookie et de session utilisateur
    include('./src/functions/cookie_creation.php');

  // Fonction pour afficher le nombre de notifications de l'utilisateur
  include('./src/functions/notif_count.php');

  // fonction Logout pour la deconnexion
  include('./src/functions/logout.php');
?>

<!doctype html>
<html lang="fr">
<head>
  <meta http-equiv= »Content-Type » content= »text/html; charset=utf-8″ />
  <meta hhtp-equi="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Youtube_clone</title>
  <link rel="stylesheet" href="./src/assets/css/line awesome/1.3.0/css/line-awesome.min.css">
  <link rel="shorcut icon" href="./src/assets/img/youtube_small.png">
  <link rel="stylesheet" href="./src/assets/css/style.css">

</head>
<body>
<!-- Debut de notre header  -->
<header>
  <nav class="ytb_navbar">
    <div class="ytb_logo">
      <i class="las la-align-justify"></i>
      <img src="./src/assets/img/youtube_small.png" alt="">
      <h1>Youtube </h1>
    </div>
    <div class="search">
      <div class="input">
          <input type="text" placeholder="Rechercher ">
      </div>
      <div class="icon"><i class="las la-search"></i></div>
    </div>
    <div class="nav_micro">
      <img src="./src/assets/css/bootstrap_icons/mic.svg" alt="">
    </div>
    <?php if(!empty($userid)){
      ?>
      <a href="notif">
      <div class="user_notif">
        <div class="user_notif-buble">
        <p><?= $count ?></p>
        </div>
      </div>
      </a>
      <?php } ?>
    <div class="nav_task">
      <i class="las la-sliders-h"></i>
      <i class="las la-braille"></i>
      <i class="las la-edit"></i>
    </div>
    <?php if(!empty($userid)){
      ?>
      <div class="user_profil">
         <div class="profile" onclick="profileMenuToggle();">
           <img src="<?= $userpic?>" alt="">
         </div>
         <div class="menu">
           <h1><?= $userid ?>
             <span><?= $usermail ?></span>
           </h1>
           <ul>
             <li><img src="./src/assets/css/bootstrap_icons/person-circle.svg" alt=""><a href="">Profil</a></li>
             <li><img src="./src/assets/css/bootstrap_icons/question-circle.svg" alt=""><a href="">Aide</a></li>
             <li><img src="./src/assets/css/bootstrap_icons/gear.svg" alt=""><a href="">Parametre</a></li>
             <li><img src="./src/assets/css/bootstrap_icons/door-open.svg" alt=""><a href="logout&user=<?= $userid ?>">Se deconnecter</a></li>
           </ul>
         </div>
      </div>
    <?php }else{ ?>
    <div class="nav_user">
      <i class="lar la-user-circle"></i>
      <p>Se connecter</p>
    </div>
    
    <?php } ?>
  </nav>
</header>
<!-- Fin de notre header -->
