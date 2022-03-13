<?php  
  $likeNotif="likebtn";
  $dislikeNotif="dislikebtn";

   if(isset($_POST['likebtn'])){
        if(!empty($userid)){
            $likeCount=1;
            $getLikes =  $this->_videoManager->getVideobydoubleId('likes','username',$userid,'videoid', $tab['vid'],'Video');
            $verifLike = count($getLikes);
            if($verifLike>0){
                $likeNotif="likesuccess";
            }else{
                $tab['vid'] = $video->videoId();
                $tab['vtitle'] = $video->videoTitle();
                $tab['likecount'] = $likeCount;
                $tab['ctitle'] = $video->channelTitle();
                $tab['username'] = $userid;
                $this->_videoManager->postLikes($tab);
                $getAllLikes =  $this->_videoManager->getVideobyId('likes','videoid', $tab['vid'],'Video');
                $alllikeCount = count($getAllLikes);
                $this->_videoManager->upbyId('all_video','likecount',$alllikeCount,'videoid',$tab['vid']);
            }

        }
    }

   if(isset($_POST['dislikebtn'])){
        if(!empty($userid)){
            $dislikeCount=1;
            $getdislikes =  $this->_videoManager->getVideobydoubleId('dislikes','username',$userid,'videoid', $tab['vid'],'Video');
            $verifdislike = count($getdislikes);
            if($verifdislike>0){
                $dislikeNotif="dislikesuccess";
            }else{
                $tab['vid'] = $video->videoId();
                $tab['vtitle'] = $video->videoTitle();
                $tab['dislikecount'] = $dislikeCount;
                $tab['ctitle'] = $video->channelTitle();
                $tab['username'] = $userid;
                $this->_videoManager->postdislikes($tab);
                $getAllLikes =  $this->_videoManager->getVideobyId('dislikes','videoid', $tab['vid'],'Video');
                $alllikeCount = count($getAllLikes);
                $this->_videoManager->upbyId('all_video','dislikecount',$alllikeCount,'videoid',$tab['vid']);
            }
        }
    }
?>