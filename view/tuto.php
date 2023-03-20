<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/perso.css">
    <link rel="stylesheet" href="../public/darkLightMode.css">
    <script src="../public/js/darkLightMode.js"></script>
    <script src="https://kit.fontawesome.com/e95a7f8c2a.js" crossorigin="anonymous"></script>
    <title>Tuto</title>
</head>
<body>
<?php
    include "menu.php"
    ?>
    <div class="lien">
    <iframe width="500" height="230" src="https://www.youtube.com/embed/cWoq5znh0vw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h6>Après avoir appris sur Internet quoi de plus normal pour lui que de partager à son tour ? Passionné par le web depuis un peu plus de 15 ans maintenant, il aime partager ses compétences et ses découvertes avec les personnes qui ont cette même passion pour le web.  <br> Dans la même logique que Mathieu Nebra avec le site du Zéro (devenu OpenClassRooms), le but de Jonathan était d'aider ses camarades de classe à comprendre des concepts (notamment en infographie) qu'il avait déjà appris. Au lieu d'expliquer à chaque personne une par une, il créé des vidéos pour partager la connaissance gratuitement et simplement. <br> Le nom Grafikart est ensuite resté le même depuis cette période où les tutoriels étaient plus orientés sur l'infographie. <br> L'expérience mais surtout la pédagogie de Jonathan fait de son contenu des ressources rares et précieuses. En plus d'une voix calme et agréable, les vidéos Grafikart sont pleines de petites astuces tirées de l'expérience professionnelle de Jonathan. On apprend donc doucement mais sûrement plein de petits tips extrêmement utiles sur des technos souvent complexes.</h6>
    </div>

    <div class="lien">
    <iframe width="500" height="230" src="https://www.youtube.com/embed/EgUoi3Uedtc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <h6>Pour se connecter, nous créons la classe prédéfinie <span>mysqli</span>  en passant au constructeur les informations suivantes : nom du serveur auquel on doit se connecter, nom d’utilisateur et mot de passe. <br> Nous stockons les informations de connexion dans un objet qu’on appelle ici <span>$MysqliConnect</span>. Cet objet représente notre connexion en soi. <br> Ensuite, nous devons tester que la connexion a bien été établie car dans le cas où celle-ci échoue on voudra renvoyer un message d’erreur

Il est en essentiel de considérer les potentielles erreurs de connexion à nos bases de données pour éviter que des utilisateurs mal intentionnés tentent de récupérer les informations relatives à la tentative de connexion.
Pour cela, nous utilisons la propriété <span>connect_error</span>  de la classe <span>mysqli</span>  qui retourne un message d’erreur relatif à l’erreur rencontrée en cas d’erreur de connexion <span>MySQL</span>  ainsi que la fonction <span>die()</span>  pour stopper l’exécution du script en cas d’erreur. <br>

Attention : La propriété <span>connect_error</span>  de <span>mysqli</span>  ne fonctionne correctement que depuis la version 5.3 de PHP. Utilisez la fonction <span>mysqli_connect_error()</span>  pour les versions antérieures.
Notez ici qu’on aurait également pu utiliser les exceptions et des blocs try et catch pour gérer les erreurs potentielles. Je voulais juste vous présenter une autre manière de faire ici. <br>

Dans le cas où la connexion réussit, on se contente d’afficher un message « connexion réussie ». <br>

Si vous désirez la liste complète des propriétés et méthodes de la classe mysqli, je vous invite à consulter la <a target="_blank" href="https://www.php.net/manual/fr/class.mysqli.php">documentation officielle</a> . </h6>
    </div>
   
<?php
        include "footer.php"
    ?>
    
</body>
</html>