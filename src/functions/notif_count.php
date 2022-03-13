<?php
    if(!empty($userid)){
     $notif_count = $videoManager->getVideobyId('notifications', 'userid', $userid, 'Video');
       foreach($notif_count as $video){
         $count += $video->videoAdd();
        }
    }
?>