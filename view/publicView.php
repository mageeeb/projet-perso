<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Mailmvc</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="../public/connect.css">
</head>

<body>


    <!-- Responsive navbar-->
    <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            

            <!-----copie--->
            <h1 style="text-align: center;" >Connectez-vous ou retourner à la <a href="./">page d'accueil</a> </h1>
            <div class="login-box">
 
  <<form name="connexion" action="" method="post">
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
            
    
                       <!--  <ul aria-labelledby="navbarDropdown">
                           <form name="connexion" action="" method="post">
                                <li style="display: flex;justify-content: space-around;">
                                    <input name="username" class="dropdown-item" placeholder="Votre nom d'utilisateur" required></input>
                                </li>
                                <li style="display: flex;justify-content: space-around;">
                                    <input name="password" class="dropdown-item" placeholder="Votre mot de passe" required></input>
                                </li>

                                <li>
                                    <hr>
                                </li>
                                <li  style="display: flex;justify-content: space-around;">
                                    <input type="submit" class="btn btn-primary"></input>
                            </form>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">

                <!-- Post header
                <header class="mb-4">
                    <!-- Post title
                    <h1 class="fw-bolder mb-1">MailMVC</h1>
                    <hr>

                    <h3>Envoyez moi un message : </h3>
                </header>

                <form method="POST" action="" name="messages">
                  <!--  <div class="mb-3">-->
                        <?php
                        if (isset($message)) :
                        ?>
                            <button type="button" class="btn btn-warning"><?= $message ?></button><br>
                        <?php
                        endif;
                        ?>
                       <!-- <div class="contact-form">
  <span class="heading">Contact Us</span>
  <form>
    <label for="name">Name:</label>
    <input type="text" required="">
    <label for="email">Email:</label>
    <input type="email" id="email" name="messagesmail" required="">
    <label for="message">Message:</label>
    <textarea id="message" name="messagestext" required=""></textarea>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

                       <!-- <label for="exampleFormControlInput1" class="form-label">Votre adresse mail</label>
                        <input name="messagesmail" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Votre commentaire</label>
                        <textarea name="messagestext" class="form-control" id="exampleFormControlTextarea1" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                


            </div>
        </div>
    </div>
    <?php
    include "footer.php"
    ?>
</body>

</html>