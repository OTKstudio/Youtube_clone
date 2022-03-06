
<?php
$max_result = "20";
$api_key = "AIzaSyDYGPl3vnm67OHVBOJ420R-bVzAZyLJX9g";
$channel_id = "UCrjWeik-oQEYC9jZF039G4w";
$base_url = "https://youtube.googleapis.com/youtube/v3/search";
$url = "$base_url?part=snippet&order=date&channelId=".$channel_id."&maxResults=".$max_result."&key=".$api_key."";
print_r($url)

?>