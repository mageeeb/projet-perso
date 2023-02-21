<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail</title>
    <link rel="stylesheet" href="../public/captcha.css">
    <link rel="stylesheet" href="../public/perso.css">
    <link rel="stylesheet" href="../public/darkLightMode.css">
    <script src="../public/js/darkLightMode.js"></script>
    <script src="../public/js/js/captcha.js"></script>
    <script src="https://kit.fontawesome.com/e95a7f8c2a.js" crossorigin="anonymous"></script>
</head>

<body onload="captchaCF2M(redirectionDuckduck, 7);">


<header id="header">
    <div class="form">
    <h1>Laissez-moi un message ou retour vers <a class="nav-link" href="?p=home"><i class="fa fa-home" style="font-size:24px;color:red"></i></a></h1>


    </div>
       
        
       

        <div class="formulaire">
        <img src="../img/email.png" alt="">
         
            <form id='monFormulaire' name='lemail' action='' method="POST">

                <div class="row">
                    <div class="col-25">
                        <label for="firstname">Prénom *:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="name" name="firstname" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="nom">Nom :</label>

                    </div>
                    <div class="col-75">
                        <input type="text" id="nom" name="lastname">
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="email"> mail *:</label>
                    </div>
                    <div class="col-75">
                        <input type="email" id="mail" name="usermail" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-25">
                        <label for="msg">Votre message *:</label>
                    </div>

                    <div class="col-75">
                        <textarea id="msg" name="message" cols="60" rows="5" maxlength="600"></textarea>
                    </div>
                </div>
             
                <h4>(*) ce champ est obligatoire</h4>
                <div class="row">
                    <div class="submit">
                        <button id="captchaValidate" type="button">Valider</button>
                    </div>
                </div>

            </form>


        </div>

        <br><br><br><br>
        <div id="captcha"> 

        </div>
            
            <input id="captchaInput" type="text" placeholder="Entrez le captcha"><span></span></br></br>

            <button id="captchaRefresh" type="button">Refresh</button>
        
        <h3></h3>
        <?php
        # pas de mail
        if (empty($nbMail)) :
        ?>

        <?php
        # on a au moins un mail
        else :
            # affichage du nombre de mail
        ?>
            <h4>Nous avons <?= $nbMail ?> messages inscrites</h4>
            <?php
            # tant qu'on a des mail
            foreach ($responseMail as $item) :
            ?>
                <div class="text">
                    <h4><?= $item['firstname'] ?> à envoyé le message le <?= $item['datemessage'] ?></h4>
                    <h5><?=$item['message']?></h5>
                  
                </div>

        <?php
            endforeach;
        endif;
        ?>

    </header>

</body>

</html>