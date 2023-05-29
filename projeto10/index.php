<?php

session_start();

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'POST') {

    switch ($uri) {
        case '/store':

            if (isset($_SESSION['user'])) { //verificando se a sessão ja foi iniciada
                include __DIR__ . '/store';
            } else {
                include __DIR__ . '/views/user/create.php';
                break;
            }

            break;



        case '/storec':

            if (isset($_SESSION['user'])) { //adicionar no carrinho
                include __DIR__ . '/storec.php';
            } else {
                include __DIR__ . '/views/user/create.php';
                break;
            }

            break;

        case '/storep': //guardar um novo produto

            if (isset($_SESSION['user'])) { //verificando se a sessão ja foi iniciada
                include __DIR__ . '/storep.php';
            } else {
                include __DIR__ . '/views/user/create.php';
                break;
            }

            break;

        case '/newsession':

            include __DIR__ . '/sessions.php';

            break;
    }
} else if ($method == 'GET') {

    switch ($uri) {
        case '/logout':
            include __DIR__ . '/logout.php';

            // if (isset($_SESSION['user'])) { //verificando se a sessão ja foi iniciada
            // } else {
            //     include __DIR__ . '/views/user/create.php';
            //     break;
            // }
            break;
        case '/':
            include __DIR__ . '/views/home.php';
            break;

        case '/create':
            if (isset($_SESSION['user'])) { //verificando se a sessão ja foi iniciada
                header('Location:/');
            } else {
                include __DIR__ . '/views/user/create.php';
                break;
            }

        case '/createp':
            if (isset($_SESSION['user'])) { //verificando se a sessão ja foi iniciada
                include __DIR__ . '/views/products/createp.php';
                die();
            } else {
                header('Location:/');
                break;
            }

        case '/products':
            include __DIR__ . '/views/products/home.php';
            break;

        case '/cart':
            if (isset($_SESSION['user'])) { //verificando se a sessão ja foi iniciada
                include __DIR__ . '/views/cart/home.php';
            } else {
                include __DIR__ . '/views/user/create.php';
                break;
            }


            break;
    }
} else {
    header('Location:/');
}
