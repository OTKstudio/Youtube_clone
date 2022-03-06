<?php
class ControllerNotif{

    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->videoSave();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU viewAdmin.php
    private function videoSave(){
        require_once('views/viewNotif.php');
    }
}
?>