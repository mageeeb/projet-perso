<?php

# chargement des constantes de connexion
require_once "../config.php";
require_once "../models/postModel.php";

try {
    # connexion mysqli
    $db = mysqli_connect(DB_HOST, DB_LOGIN, DB_PWD, DB_NAME, DB_PORT);
    # charset
    mysqli_set_charset($db, DB_CHARSET);

    # capture l'erreur
} catch (Exception $e) {

    # arrêter le script et afficher l'erreur
    exit(utf8_encode($e->getMessage()));
}




# l'appel des pages en passant par le CF
if(isset($_GET['p'])){
    
    
    switch($_GET['p']){
        case 'home':
            include "../view/homeview.php";
            break;
        case 'travail':
            include '../view/travaux.php';
            break;
        case 'link':
            include '../view/liens.php';
            break;
        case 'tuto':
            include '../view/tuto.php';
            break;

        case 'cv':
            include '../view/cv.php';
            break;
        case 'form':
            include '../view/formulaire.php';
            break;

        case 'fr':
                include '../view/courFrance.php';
                break;
        
        default:
            include_once "../view/404.php";
    }

   
}else{
    
    include_once "../view/homeview.php";
}

mysqli_close($db);