<?php
$uri = $_SERVER['REQUEST_URI'];

switch ($uri) {
    case '/':
        // header('Location: /pages/home.php');
        include __DIR__.'/pages/home.php';
        die();
        break;

    case '/store':
        include __DIR__.'/store.php';
        die();
        break;

    case '/list':
        include __DIR__.'/pages/list.php';
        die();
        break;

    case '/create':
        include __DIR__.'/pages/create.php';
        die();
        break;

    default:
        # code...
        break;
}
?>