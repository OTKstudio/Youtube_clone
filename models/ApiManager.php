
<?php
class ApiManager extends Api{
    private $_apiSave;

    public function saveApi(){
        $verify=0;
        $VidCount =10;
        $this->_apiSave = new VideoManager;
        $videos = $this->urlDecode();
        foreach($videos->items as $video ){
            $tab['vid'] = $video->id->videoId;
            $tab['vtitle'] = $video->snippet->title;
            $tab['turl'] = $video->snippet->thumbnails->high->url;
            $tab['descrip'] = $video->snippet->description;
            $tab['cid'] = $video->snippet->channelId;
            $tab['ctitle']=$video->snippet->channelTitle;
            $tab['dpublish']=$video->snippet->publishTime;
            $this->_apiSave->postVideos($tab);
            $getId = $this->_apiSave->getVideobyId('notifications','channelid', $tab['cid'],'Video');
            $verify = count($getId);
            if($verify > 0){
                $this->_apiSave->upbyId('notifications','videoadd', $VidCount,'channelid', $tab['cid']);
            }
        }
    }

 }
?>