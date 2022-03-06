
<?php


?>

<section class="user-register">
<div class="register">
    <div class="gooleauth">
        <div class="logo">
        <img src="./src/assets/img/youtube_small.png" alt="">
        <h1>Youtube Inscription</h1>
        </div>
        <a href="<?= $google_client->createAuthUrl() ?> ">
         <div class="authsubmit"> 
         <img src="./src/assets/img/google_logo.png">
         <h1>Se connecter avec Google</h1>
         </div>
         </a>
         <p></p>
     <p class="or">OR</p>
    </div>
    <form action="" method="POST">
        <div class="form_control">
        <input type="text" name="name" placeholder="Entrer votre nom & prenom">
        <input type="text" name="email" placeholder="Entrer votre Email">
        <input type="password" name="password" placeholder="Entrer votre mot passe">
        <button name="signUp">S'inscrire</button>
        </div>
    </form>
</div>
</section>