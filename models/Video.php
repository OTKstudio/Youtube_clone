<?php
class Video{
    private $_id;
    private $_videoid;
    private $_videotitle;
    private $_videocount;
    private $_videoadd;
    private $_thumburl;
    private $_description;
    private $_channelid;
    private $_channeltitle;
    private $_username;
    private $_usermail;
    private $_likecount;
    private $_dislikecount;
    private $_userpicture;
    private $_vuecount;
    private $_abonnecount;
    private $_date;
    public function __construct(array $data){
      $this->hydrate($data);
    }

    public function hydrate(array $data){
        foreach($data as $key => $value){
            $method = 'set'.ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    // SETTERS
    public function setId($id){
        $id = (int) $id;
        if($id > 0){
            $this->_id = $id;
        }
    }
    public function setvideoId($videoid){
        if(is_string($videoid)){
            $this->_videoid = $videoid;
        }
    }
    public function setvideoTitle($videotitle){
        if(is_string($videotitle)){
            $this->_videotitle = $videotitle;
        }
    }
    public function setvideoCount($videocount){
        $videocount = (int) $videocount;
        if($videocount > 0){
            $this->_videocount = $videocount;
        }
    }
    public function setvideoAdd($videoadd){
        $videoadd = (int) $videoadd;
            $this->_videoadd = $videoadd;
    }
    public function setthumbUrl($thumburl){
        if(is_string($thumburl)){
            $this->_thumburl = $thumburl;
        }
    }
    public function setchannelId($channelid){
        if(is_string($channelid)){
            $this->_channelid = $channelid;
        }
    }
    public function setchannelTitle($channeltitle){
        if(is_string($channeltitle)){
            $this->_channeltitle = $channeltitle;
        }
    }
    public function setdescription($description){
        if(is_string($description)){
            $this->_description = $description;
        }
    }
    public function setuserName($username){
        if(is_string($username)){
            $this->_username = $username;
        }
    }
    public function setuserMail($usermail){
        if(is_string($usermail)){
            $this->_usermail = $usermail;
        }
    }
    public function setuserPicture($userpicture){
        if(is_string($userpicture)){
            $this->_userpicture = $userpicture;
        }
    }
    public function setlikeCount($likecount){
        $likecount = (int) $likecount;
        if($likecount > 0){
            $this->_likecount = $likecount;
        }
    }
    public function setdislikeCount($dislikecount){
        $dislikecount = (int) $dislikecount;
        if($dislikecount > 0){
            $this->_dislikecount = $dislikecount;
        }
    }
    public function setvueCount($vuecount){
        $vuecount = (int) $vuecount;
        if($vuecount > 0){
            $this->_vuecount = $vuecount;
        }
    }
    public function setabonneCount($abonnecount){
        $abonnecount = (int) $abonnecount;
        if($abonnecount > 0){
            $this->_abonnecount = $abonnecount;
        }
    }
    public function setdate($date){
            $this->_date = $date;
    }
    // GETTERS
    public function id(){
        return $this->_id;
    }
    public function videoId(){
        return $this->_videoid;
    }
    public function videoTitle(){
        return $this->_videotitle;
    }
    public function videoCount(){
        return $this->_videocount;
    }
    public function videoAdd(){
        return $this->_videoadd;
    }
    public function thumbUrl(){
        return $this->_thumburl;
    }
    public function channelId(){
        return $this->_channelid;
    }
    public function channelTitle(){
        return $this->_channeltitle;
    }
    public function description(){
        return $this->_description;
    }
    public function userName(){
        return $this->_username;
    }
    public function userMail(){
        return $this->_usermail;
    }
    public function userPic(){
        return $this->_userpicture;
    }
    public function likeCount(){
        return $this->_likecount;
    }
    public function dislikeCount(){
        return $this->_dislikecount;
    }
    public function vueCount(){
        return $this->_vuecount;
    }
    public function abonneCount(){
        return $this->_abonnecount;
    }
    public function date(){
        return $this->_date;
    }
}
?>