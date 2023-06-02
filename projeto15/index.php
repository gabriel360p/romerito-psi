<?php
session_start();

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($uri) {
    case '/':
        include __DIR__.'/views/home.php';
        die();
        break;

    case '/create':
        include __DIR__.'/views/book/create.php';
        die();
        break;

    case '/store':
        if($method=='POST'){
            include __DIR__.'/views/book/store.php';
            die();
        }else{
            header('Location:/');
        }
        break;


    case '/update':
        if($method=='POST'){
            include __DIR__.'/views/book/update.php';
            die();
        }else{
            header('Location:/');
        }
        break;

    case '/view':
        if(isset($_SESSION['book'])){
            include __DIR__.'/views/book/view.php';
            die();
        }else{
            header('Location:/create');
        }

        break;

    case '/remove':
        include __DIR__.'/views/book/remove.php';
        die();
        break;

    default:
        # code...
        break;
}