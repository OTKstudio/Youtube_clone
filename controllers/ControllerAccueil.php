<?php
class ControllerAccueil{
    private $_videoManager;
    private $_view;
    // VERIFIE SI NOTRE URL EST SELECTIONNEE
    public function __construct($url){
        if(isset($url)){
            $this->videos();
        }
        else{
             echo('page introuvable');
        }
    }
    // RECUPERE LES INFORMATIONS CONTENU VideoManager.php
    private function videos(){
        $this->_videoManager = new VideoManager;
        $videos = $this->_videoManager->getVideos();
        require_once('views/viewAccueil.php');
    }

}
?>