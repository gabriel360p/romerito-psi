<?php

$rotas = [
    '/' => '/pages/home.html',
    '/dashboard' => '/pages/dashboard.php',
    '/create' => '/pages/register.html',
    '/store' => '/register.php',
    '/logout' => '/logout.php',
];

function rotear ($uri, $rotas) {

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        include __DIR__ . '/pages/error.php';
    }

}