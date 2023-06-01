<?php
session_start();

$uri=$_SERVER['REQUEST_URI'];
$method=$_SERVER['REQUEST_METHOD'];

switch($uri) {
    case '/':
        include __DIR__.'/views/home.php';
        die();   
        break;

    case '/login':
            include __DIR__.'/views/login.php';
            die();
            break;
    
    case '/newsession':
            include __DIR__.'/newsession.php';
            die();
            break;

    case '/createbook':
        if(isset($_SESSION['user'])){
            include __DIR__.'/views/createbook.php';
            die();
        }else{
            header('Location:/');
            die();
        }
            break;

    case '/storebook':
            include __DIR__.'/storebook.php';
            die();
            break;

    case '/sair':
            include __DIR__.'/sair.php';
            die();
            break;

    case '/viewbook':
            if(isset($_SESSION['user'])){
                include __DIR__.'/views/viewbook.php';
                die();
            }else{
                header('Location:/');
            }
            break;

    default:
        include __DIR__.'/views/error.php';
        die();
        break;
}




