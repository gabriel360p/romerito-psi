<?php

$rotas = [
    '/' => '/views/home.php',
    '/produtos' => '/views/indexp.php',
    '/carrinho' => '/views/indexc.php',
    '/login' => '/views/user/login.php',
    '/sair' => '/sair.php',
    '/storec' => '/views/storec.php',
    '/newlogin' => '/login.php',

];

function rotear ($uri, $rotas) {

    // switch($uri){//analisando os casos que o usuário precisa esta logado

    //     case '/carrinho':
    //         if(isset($_SESSION['user'])){
    //         include __DIR__ . $rotas[$uri];
                
    //         }else{
    //             header('Location:/login');
    //         }
    //         break;
    // }


    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
        die();
    } else {
        include __DIR__ . '/views/error.php';
    }

}
