<?php
class ControllerUser{

    public function logout(){
        include('./googleAuth.php');
         $google_client->revokeToken();
         session_destroy();
        require_once('views/viewAccueil.php');
    }

}
?>