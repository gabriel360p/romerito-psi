<?php

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];

session_start();
$_SESSION['user']="Nome: ".$name." Email: ".$email;

