<?php
 class VideoManager extends Model{

    // Methode GET pour recuperer les informations dans la BD
    
     public function getVideos(){
         $this->getBdd();
         return $this->getAll('all_video', 'Video');
     }
     public function getChannel(){
        $this->getBdd();
        return $this->getAll('channels', 'Video');
    }
    public function getNotif(){
        $this->getBdd();
        return $this->getAll('notifications', 'Video');
    }
    public function getUser(){
        $this->getBdd();
        return $this->getAll('user', 'Video');
    }
     public function getVideobyId($table, $colum, $id, $obj){
        $this->getBdd();
        return $this->getbyId($table, $colum, $id, $obj);
    }
    public function getvideobydoubleId($table, $colum1, $id1, $colum2, $id2, $obj){
        $this->getBdd();
        return $this->getbydoubleId($table, $colum1, $id1, $colum2, $id2, $obj);
    }
    
    // Methode POST pour stocker les informations dans la BD

    public function postVideos($tab){
        $this->getBdd();
        return $this->postAll('all_video', $tab);
    }
    public function postHist($tab){
        $this->getBdd();
        return $this->postHistory('history', $tab);
    }
    public function postAbon($tab){
        $this->getBdd();
        return $this->postAbonne('abonnement', $tab);
    }
    public function postNotif($tab){
        $this->getBdd();
        return $this->postNotification('notifications', $tab);
    }
    public function postChaine($tab){
        $this->getBdd();
        return $this->postChannel('channels', $tab);
    }
    public function postUser($tab){
        $this->getBdd();
        return $this->postUserinfo('user', $tab);
    }
    public function postLikes($tab){
        $this->getBdd();
        return $this->postAvis('likes', $tab);
    }
    public function postdisLikes($tab){
        $this->getBdd();
        return $this->postAvis('dislikes', $tab);
    }

    // Methode DEL pour supprimer les informations dans la BD
    public function desabonne($table, $colum, $id){
        $this->getBdd();
        return $this->delbyId($table, $colum, $id);
    }

        // Methode Update pour mettre a jour les informations dans la BD
        public function upbyId($table,$colum,$val,$colum2,$id){
            $this->getBdd();
            return $this->updatebyId($table,$colum,$val,$colum2,$id);
        }
 }
?>