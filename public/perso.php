<?php

# chargement des constantes de connexion
require_once "../config.php";
require_once "../models/postModel.php";


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
        case 'admin':
            include '../view/admin.php';
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