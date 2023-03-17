<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mailmvc</title>
    <script src="../public/js/darkLightMode.js"></script>
    <script src="https://kit.fontawesome.com/e95a7f8c2a.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="../public/perso.css">
    <link rel="stylesheet" href="../public/connect.css">
</head>

<body>


  
            <h1 style="text-align: center;" >Connection ou retour à la <a href="./">page d'accueil</a> </h1>
            <div class="login-box">
 
  <form name="connexion" action="" method="post">
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div><center>
    <a href="#">
           SEND
       <span></span>
    </a></center>
  </form>
</div>
            
    
                        <?php
                        if (isset($message)) :
                        ?>
                            <button type="button" class="btn btn-warning"><?= $message ?></button><br>
                        <?php
                        endif;
                        ?>
         
    <?php
    include "footer.php"
    ?>
</body>

</html>