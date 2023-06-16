<?php

/**
 * Este arquivo contém as rotas registradas para a aplicação.
 * A variável $rotas guarda pares de valores que representam
 * a rota e o script php ou arquivo html correspondente.
 * 
 * Além disso, uma função chamada rotear () é utilizada para
 * implementar o algoritmo de roteamento base da aplicação.
 */


$rotas = [
    '/' => '/pages/home.html',
    '/dashboard' => '/pages/dashboard.php',
    '/users/create' => '/pages/users/register.html',
    '/users/store' => '/pages/users/register.php',
    '/users/login' => '/pages/users/login.html',
    '/logout' => '/pages/users/logout.php',
    '/login' => '/pages/users/login.php', 


    
    '/books/create' => '/pages/books/create.html',
    '/books/store' => '/pages/books/store.php',
    '/books/index' => '/pages/books/index.php',
];

/**
 * Função rotear utilizada para 
 * procurar os arquivos correpondentes da aplicação
 * referentes as rotas desejadas.
 */
function rotear ($uri, $rotas) {   

    if (array_key_exists($uri, $rotas)) {
        include __DIR__ . $rotas[$uri];
    } else {
        header("Location: /");
    }

}