<!-- HEADER  --> 
<link rel="stylesheet" href="./src/assets/css/watch.css">    
<?php include"./includes/header.php"?>
<!-- HEADER : end -->

<!-- YOUTUBE BODY -->
<main class="ytb_body">
    <!-- NAVIGATION  -->     
    <?php include"./includes/navigation.php"?>
    <!-- NAVIGATION : end -->

    <!-- CONTAINEUR YOUTUBE -->
    <section class="watch_content">
    <?php
    if(!empty($userid)){
        include("./includes/notification.php");
    }else{
        echo "<div class='transition'>
        <h1>Vous devez vous connecter</h1>
        <button>Se connecter</button>
       </div>";
    }
   ?>
    </section>
</main>
<!-- YOUTUBE BODY: end -->

<!-- FOOTER  -->     
<?php include"./includes/footer.php"?>
<!-- FOOTER : end -->


