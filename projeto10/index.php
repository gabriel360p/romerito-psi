<?php

session_start();

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if($method=='POST'){

    switch($uri){
        case '/store':
            include __DIR__.'/store';
            break;

        case '/newsession':
            include __DIR__.'/sessions.php';
            break;

        case '/logout':

            break;

    }

}else if($method=='GET'){
    
    switch($uri){
        case '/':
            include __DIR__.'/views/home.php';
            break;

        case '/create':
            if(isset($_SESSION['user'])){//verificando se a sessão ja foi iniciada
                header('Location:/');
            }else{
                include __DIR__.'/views/user/create.php';
                break;
            }

        case '/products':
            include __DIR__.'/views/products/home.php';
            break;

        case '/cart':
            if(isset($_SESSION['user'])){//verificando se a sessão ja foi iniciada
                include __DIR__.'/views/cart/home.php';
            }else{
                include __DIR__.'/views/user/create.php';
                break;
            }


        break;
    }

}else{
    header('Location:/');
}


?>