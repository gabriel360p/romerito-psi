<?php

if (!hasUser()) {

    header ('Location: /');

} else {

    //onter lista de livros
    $users =User::all();
    //incluir página
    include __DIR__ . '/../../pages/users/index.php';        

}