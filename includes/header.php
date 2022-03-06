
<?php

use Google\Service\AIPlatformNotebooks\Location;

session_start();
   $_SESSION['username'] = ''; $_SESSION['email']  = '' ;   $_SESSION['profilpic'] = ''  ;
    $userid = ''; $usermail = ''; $userpic= ''; $statut = 'abonne'; $notif = ''; $msg='';
    $videoManager = new VideoManager;
    $count = 0;
      // Connexion with Google
    include('./googleAuth.php');
    if(isset($_GET['code'])){
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
        $google_client->setAccessToken($token);
        // Recupere information du Pofil Utilisateur
        $gauth = new Google_Service_Oauth2($google_client);
        $data= $gauth->userinfo->get();
          $users = $videoManager->getUser();
          $verifyUserTab = count($users);
 
            $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR. 'cookies' . DIRECTORY_SEPARATOR. 'user_cookie';
            $userData = $data->name;
            if(file_exists($fichier)){
              $userData = (string)file_get_contents($fichier);
            }
            file_put_contents($fichier, $userData);

            $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR. 'cookies' . DIRECTORY_SEPARATOR. $data->name;
            $userData = $data->name;
            if(file_exists($fichier)){
              $userData = (string)file_get_contents($fichier);
            }
            file_put_contents($fichier, $userData);

          if($verifyUserTab>0){
            foreach($users as $video):
              if($video->userName() == $data->name){
                  echo"";
              }else{
                  $tab['name'] = $data->name;
                  $tab['mail'] = $data['email']; 
                  $tab['pic'] = $data['picture']; 
                  $videoManager->postUser($tab);
              }
           endforeach;
          }else{
            $tab['name'] = $data->name;
            $tab['mail'] = $data['email']; 
            $tab['pic'] = $data['picture']; 
            $videoManager->postUser($tab);
          }
    }else{
      $google_client->createAuthUrl();
    }

  function cookieInfo(){
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR. 'cookies' . DIRECTORY_SEPARATOR. 'user_cookie';
    return file_get_contents($fichier);
  }
  $cookieval= cookieInfo();

  $userFile = dirname(__DIR__) . DIRECTORY_SEPARATOR. 'cookies' . DIRECTORY_SEPARATOR. $cookieval;
  if(!file_exists($userFile)){
  }else{
    $userCookieVal=  file_get_contents($userFile);
  }
  // echo $userCookieVal;
    $users = $videoManager->getVideobyId('user', 'username', $userCookieVal, 'Video');;
    foreach($users as $video){
      $_SESSION['username'] = $video->userName() ;
      $_SESSION['email'] = $video->userMail() ;
      $_SESSION['profilpic'] = $video->userPic();
    }

    $userid = $_SESSION['username'] ;
    $usermail = $_SESSION['email'] ;
    $userpic = $_SESSION['profilpic'];


     
    // Recupere l ID de la video youtube
    if(!empty($userid)){
        $notif_count = $videoManager->getVideobyId('notifications', 'userid', $userid, 'Video');
        foreach($notif_count as $video){
          $count += $video->videoAdd();
        }
    }else{
      
    }
    if(isset($_GET['logout'])){
      function logout($file){
        session_destroy();
        $file_pointer = "gfg.txt"; 
        $userFile = dirname(__DIR__) . DIRECTORY_SEPARATOR. 'cookies' . DIRECTORY_SEPARATOR. $file;
       // Use unlink() function to delete a file 
       unlink($userFile);
      }
      header('location:index.php');
    }

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
      <h1>Youtube</h1>
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
    </div>
    <?php if(!empty($userid)){
      ?>
      <div class="user_profil">
         <div class="profile" onclick="profileMenuToggle();">
           <img src="https://lh3.googleusercontent.com/a/AATXAJwqCbZnW78qhiMSPAXY6gf0TYjcTh7wgBrQ8NUA=s96-c" alt="">
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
