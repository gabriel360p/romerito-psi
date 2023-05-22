<?php

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];

session_start();
$_SESSION['user']="Nome: ".$name." Email: ".$email;

setcookie('loged',1,strtotime("+300 minutes"));


// print_r($_SESSION['user']);

header('Location: /dashboard', true, 301); //podemos usar o header como um redirecionamento, logo após criar as rotas, pois ele pega oq é digitado na barra de pesquisa. Ele funciona como redirecionamento
