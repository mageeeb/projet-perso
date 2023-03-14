<?php
session_start();

# Dependencies
require_once "../config.php";
require_once "../models/UsersModel.php"; 
require_once "../models/MessagesModel.php"; 
require_once "../models/MailModel.php"; 

# PHP ini_set mail
ini_set('SMTP', MAIL_SERVER);
ini_set('smtp_port', MAIL_PORT);
ini_set('sendmail_from', MAIL_FROM);


# Connexion
try{
    # $PDOConnect = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='. DB_CHARSET.';port='.DB_PORT, DB_LOGIN, DB_PWD);
    $MysqliConnect = mysqli_connect(DB_HOST,DB_LOGIN,DB_PWD,DB_NAME,DB_PORT);
    mysqli_set_charset($MysqliConnect, DB_CHARSET);

}catch(Exception $e){
    exit($e->getMessage());
}

# Router

// connected
if(isset($_SESSION['myID'])&&$_SESSION['myID']==session_id()){
    require_once "../controller/privateController.php";

// public
}else{
    require_once "../controller/publicController.php";
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
        case 'admin':
            include '../view/admin.php';
            break;

        case 'fr':
                include '../view/courFrance.php';
                break;

        case 'connect':
                include '../view/publicView.php';
                break;
        
        default:
            include_once "../view/404.php";
    }

   
}else{
    
    include_once "../view/homeview.php";
}