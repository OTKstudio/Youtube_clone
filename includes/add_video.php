<?php 
    $apiManager = new ApiManager;
    $videoManager = new VideoManager;
    $count = 0;
    $userid = "Brecht";

 if(isset($_POST['save'])){
     $channel_id = "UC5husyZ7HE5RN4xrg6WwrcA";
    // $channel_id = $_POST['channel_id'];
     $apiManager->saveApi();
    //  $verify=0;
    //  $VidCount =5;
    //  $getId =  $videoManager->getVideobyId('notifications','channelid','UC5husyZ7HE5RN4xrg6WwrcA','Video');
    //  $verify = count($getId);
    //  if($verify > 0){
    //      $videoManager->upbyId('notifications','videoadd', $VidCount,'channelid','UC5husyZ7HE5RN4xrg6WwrcA');
    //  }

 }

?>

<section class="add_channel">
    <div class="channel_container">
      <form action="" method="post" enctype="multipart/form-data" >
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="form-group">
            <label for="channel_id">Channel id</label>
            <input type="text" class="form-control" name="channel_id" placeholder="entrer l'id de la chaine youtube">
            </div>
            <div class="form-group">
            <input class="btn btn-primary bi-text-center" name="save" type="submit" value="enregistrer">
            </div>
          </div>
     </form>
    </div>
</section>