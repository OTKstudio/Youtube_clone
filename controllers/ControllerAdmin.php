<?php
class ControllerAdmin{
    private $_videoManager;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->adminHome();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU viewAdmin.php
    private function adminHome(){
        require_once('views/viewAdmin.php');
    }
}
?>