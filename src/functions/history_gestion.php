<?php    
    $videos = $this->_videoManager->getVideobyId('all_video', 'videoid', $id, 'Video');
        foreach($videos as $video){
          $tab['vid'] = $video->videoId();
          $tab['vtitle'] = $video->videoTitle();
          $tab['turl'] = $video->thumbUrl();
          $tab['cid'] = $video->channelId();
          $channelid = $video->channelId();
          $tab['ctitle'] = $video->channelTitle();
          $channeltitle = $video->channelTitle();
          $tab['username'] = $userid;
          $tab['dpublish'] = $video->date();
          // $this->_videoManager->postHist($tab);
          $videoVue +=$video->vueCount();
          $this->_videoManager->upbyId('all_video','vuecount',$videoVue,'videoid',$id);
        }
?>