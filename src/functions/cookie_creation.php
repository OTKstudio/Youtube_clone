<?php
    if(!empty($_SESSION['username'])){    
        $users = $videoManager->getVideobyId('user', 'username', $_SESSION['username'], 'Video');;
        foreach($users as $video){
            $_SESSION['username'] = $video->userName() ;
            $_SESSION['email'] = $video->userMail() ;
            $_SESSION['profilpic'] = $video->userPic();
        }
        setcookie(
            'LOGGED_USER',
            $_SESSION['username'],
            [
                'expires' => time() + 365*24*3600,
                'secure' => true,
                'httponly' => true,
            ]
        );
        $userid = $_SESSION['username'] ;
        $usermail = $_SESSION['email'] ;
        $userpic = $_SESSION['profilpic'];
        }
        if(!empty($_COOKIE['LOGGED_USER'])){
        $users = $videoManager->getVideobyId('user', 'username', $_COOKIE['LOGGED_USER'], 'Video');;
        foreach($users as $video){
            $userid =  $video->userName() ;
            $usermail = $video->userMail() ;
            $userpic = $video->userPic();
        }
    }
?>