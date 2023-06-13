<?php
include __DIR__.'/database/database.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


switch($uri){
    case '/':
        include __DIR__.'/views/welcome.php';
        die();
        break;

    case '/dash':
        include __DIR__.'/views/content/dash.php';
        die();
        break;

    case '/loginpage':
        include __DIR__.'/views/auth/login.php';
        die();
        break;

    case '/registerpage':
        include __DIR__.'/views/auth/register.php';
        die();
        break;

    case '/login':
        // include __DIR__.'/views/auth/login.php';
        die();
        break;

    case '/register':
        // inclu    de __DIR__.'/views/auth/register.php';
        die();
        break;
}