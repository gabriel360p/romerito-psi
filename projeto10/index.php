<?php

session_start

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if($method=='POST'){

    switch($uri){
        case '/store':
            include __DIR__.'/store';
            break;

        case '/logout':

            break;

    }

}else if($method=='GET'){
    
    switch($uri){
        case '/':
            include __DIR__.'/views/home.php';
            break;

        case '/newsession':
            include __DIR__.'/views/home.php';
            break;

        case '/products':
            include __DIR__.'/views/products/home.php';
            break;

        case '/cart':
            include __DIR__.'/views/cart/home.php';
        break;


    }

}


?>