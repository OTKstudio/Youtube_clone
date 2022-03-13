
<?php
use Google\Service\AIPlatformNotebooks\Location;

   $_SESSION['email']  = '' ;   $_SESSION['profilpic'] = ''  ;
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
          $_SESSION['username'] = $data->name;
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
?>