<?php
include 'banco.php';

session_start();
$uri=$_SERVER['REQUEST_URI'];
$method=$_SERVER['REQUEST_METHOD'];

switch($uri) {
    case '/':
        include __DIR__.'/views/welcome.php';
        die();   
        break;

    case '/login':
            include __DIR__.'/views/auth/login.php';
            die();
            break;

    case '/register':
            include __DIR__.'/views/auth/register.php';
            die();
            break;
    case '/defregister':
            include __DIR__.'/storeuser.php';            
            die();
            break;

        

    case '/dash':
        include __DIR__.'/views/content/dashboard.php';
            die();
            break;

    case '/newsession':
            include __DIR__.'/newsession.php';
            die();
            break;

    case '/sair':
            include __DIR__.'/sair.php';
            die();
            break;









    case '/viewuser':
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


// $_SESSION['user']=$_POST['user'];