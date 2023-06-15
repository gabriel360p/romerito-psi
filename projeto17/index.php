<?php

include __DIR__.'/database.php';

session_start();

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];


switch ($uri) {
    case '/':
        isGet($method);
        include __DIR__.'/views/welcome.php';
        die();
        break;

    case '/loginpage':
        isGet($method);
        include __DIR__.'/views/auth/login.php';
        die();
        break;
    case '/login':
        isPost($method);
        include __DIR__.'/controllers/authController.php';
        login();
        die();
        break;

    case '/registerpage':
        isGet($method);
        include __DIR__.'/views/auth/register.php';
        die();
        break;
case '/register':
        isPost($method);
        include __DIR__.'/controllers/authController.php';
        register();
        die();
        break;

case '/dash':
        isGet($method);
        isAuth();
        include __DIR__.'/views/main/dashboard.php';
        die();
        break;



    default:
        # code...
        break;
        
}



function isGet($method){
    if($method!='GET'){
        header('Location:/');
    }
}

function isPost($method){
    if($method!='GET'){
        header('Location:/');
    }
}

function isAuth(){
    if(!(isset($_SESSION['user']))){
        header('Location: /loginpage');
    }
}