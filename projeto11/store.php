<?php
include 'connection.php';

$dbquery= "INSERT INTO  user (name,cpf,email) VALUES('".$_POST['name']."','".$_POST['cpf']."','".$_POST['email']."')";
$db->exec($dbquery);

header('Location:/');