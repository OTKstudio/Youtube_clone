<?php
class ControllerAdminChannel{
    private $_adminChannelManager;
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
        $this->_adminChannelManager = new VideoManager;
        $videos = $this->_adminChannelManager->getVideos();
        $channels = $this->_adminChannelManager->getChannel();
        require_once('views/viewAdminChannel.php');
    }

}
?>