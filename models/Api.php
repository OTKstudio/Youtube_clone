<?php
class Api{
    private $_maxResult;
    private $_apiKey;
    private $_channelId;
    private $_baseUrl;
    private $_url;

   private function apiValue(){
    $this->_maxResult = "10";
    $this->_apiKey = "AIzaSyDYGPl3vnm67OHVBOJ420R-bVzAZyLJX9g";
    $this->_channelId = "UC5husyZ7HE5RN4xrg6WwrcA";
    $this->_baseUrl = "https://youtube.googleapis.com/youtube/v3/search";
   }

   private function getUrl(){
       $this->apiValue();
       $this->_url = "$this->_baseUrl?part=snippet&order=date&channelId=".$this->_channelId."&maxResults=".$this->_maxResult."&key=".$this->_apiKey." ";
       return $this->_url;
   }

   public function urlDecode(){
       $videoList = json_decode(file_get_contents($this->getUrl()));
       return $videoList;
   }
}

?>