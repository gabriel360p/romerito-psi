<?php

/**
 * Este arquivo contém as rotas registradas para a aplicação.
 * A variável $rotas guarda pares de valores que representam
 * a rota e o script php ou arquivo html correspondente.
 * 
 * Além disso, uma função chamada rotear () é utilizada para
 * implementar o algoritmo de roteamento base da aplicação.
 */

use function PHPSTORM_META\type;

$rotas = [
    '/' => ['/pages/home.html',''],
    '/dashboard' => ['/pages/dashboard.php', ''],
    '/users/create' => ['/pages/users/register.html',''],
    '/users/login' => ['/pages/users/login.html',''],
    
    '/users/store' => ['/Controllers/auth/register.php', ''],
    '/logout' => ['/Controllers/auth/logout.php', ''],
    '/login' => ['/Controllers/auth/login.php', ''], 


    //users - somente admins pode ter acesso a essas páginas.
    '/users/create' => ['/Controllers/users/create.php','admin'],
    '/users/store' => ['/Controllers/users/store.php','admin'],
    '/users/index' => ['/Controllers/users/index.php','admin'],

    '/books/create' => ['/Controllers/books/create.php','admin'],
    '/books/store' => ['/Controllers/books/store.php','admin'],
    '/books/index' => ['/Controllers/books/index.php',''],
];

/**
 * Função rotear utilizada para 
 * procurar os arquivos correpondentes da aplicação
 * referentes as rotas desejadas.
 */
function rotear ($uri, $rotas) {   

    if (array_key_exists($uri, $rotas)) { 
        include __DIR__ . $rotas[$uri][0];        
    } else {
        header("Location: /");
    }

}