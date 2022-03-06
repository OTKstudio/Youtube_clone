
<?php
    if(isset($_GET['user'])){
      function logout($file){
        session_destroy();
        $userFile = dirname(__DIR__) . DIRECTORY_SEPARATOR. 'cookies' . DIRECTORY_SEPARATOR. $file;
       // Use unlink() function to delete a file 
       unlink($userFile);
      }
      header('location:index.php');
    }

?>