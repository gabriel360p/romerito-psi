<?php

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

switch ($uri) {
    
    case '/':
        include __DIR__.'/pages/home.php';
        die();

        break;


    case '/dashboard':
            include __DIR__.'/pages/content/dashboard.php';
            die();

            break;
    
    
    case '/profile':
        include __DIR__.'/pages/profile/user.php';
        die();

        break;
    
    default:
        # code...
        break;
}