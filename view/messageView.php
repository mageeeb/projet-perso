<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Message</title>
    <script src="../public/js/darkLightMode.js"></script>
    <script src="https://kit.fontawesome.com/e95a7f8c2a.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../public/perso.css">
    <link rel="stylesheet" href="../public/connect.css">
</head>

<body>
   
        <header id="header">
                <h3>Envoyez moi un message ou retour à la <a href="./">page d'accueil</a>  </h3>
            

            <form id="monFormulaire" method="POST" action="" name="messages">
                <div class="mb-3">
                    <?php
                    if (isset($message)):
                        ?>
                        <button type="button" class="btn btn-warning"><?= $message ?></button><br>
                    <?php
                    endif;
                    ?>
                    <label for="exampleFormControlInput1" class="form-label">Votre adresse mail:</label>
                    <input name="messagesmail" type="email" class="form-control" id="exampleFormControlInput1"
                           placeholder="name@example.com" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Votre message:</label>
                    <textarea name="messagestext" class="form-control" id="exampleFormControlTextarea1"cols="60" rows="5" maxlength="600"
                              required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            


        </div>
    </div>
</div>  
        </header>
  
  
    </header>

    <?php
    include "footer.php"
    ?>
    
</body>

</html>