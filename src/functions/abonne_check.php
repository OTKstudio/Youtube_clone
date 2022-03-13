<?php   
    $abonneverif1 = $this->_videoManager->getVideobyId('abonnement', 'userid', $userid, 'Video');
    $countV1 = count( $abonneverif1);
    $abonneverif2 = $this->_videoManager->getVideobyId('abonnement', 'channelid', $channelid, 'Video');
    $countV2 = count( $abonneverif2);

        // verifie si l'utilisateur est abonne a une chaine 
        if($countV1 >0 && $countV2>0){
          $abonne_btn = "<button name='desabonne' class='abonne'>abonne</button>";
          $notif = "<img src='./src/assets/css/bootstrap_icons/bell-fill-white.svg'>";
        }
        else{
            $abonne_txt = 'S abonner';
            $abonne_btn = "<button name='abonne'>S abonner</button>";
        }
        
        // abonnement a une chaine 
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

       // desabonnement a une chaine 

            if(isset($_POST['desabonne'])){
              $this->_videoManager->desabonne('abonnement', 'userid', $userid);
              $abonne_btn = "<button name='abonne'>S'abonner</button>";
              $notif = "";
            }
?>