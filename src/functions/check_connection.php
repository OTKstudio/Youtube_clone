<?php
$checkConnect='';
if ( @fopen("https://www.youtube.com", "r") ) 
  {
    $checkConnect='connect';
  } 
  else 
  {
    $checkConnect='noconnect';
  } 
?>

