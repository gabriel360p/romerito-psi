<?php 

//checar se a reqisicao é POST
$method = $_SERVER['REQUEST_METHOD'];


if ($method == 'POST') {

    //checar se a sessão já existe e está aberta
    if (isset($_SESSION['matricula'])) {

        header("location: /dashboard");

    } else {
        
        //não existe sessão, vamos cadastrar usuário e 'logar' ele
        $matricula = $_POST['matricula'];

        $_SESSION['matricula'] = $matricula;

        header("location: /dashboard");

    }    

} else {

    header('location: /');

}






