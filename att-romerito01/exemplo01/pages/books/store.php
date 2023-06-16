<?php
// PÁGINA QUE EFETUA O SAVE DO LIVRO DENTRO DO BANCO DE DADOS
include __DIR__.'database';
include __DIR__.'/auth.php';


$db = connection();
$usuario = authUser();

$sql = "INSERT INTO books (title, user,user_name) values('".$_POST['title']."','".$_SESSION['user']."','".$usuario['name']."')";

$db->exec($sql);

header("Location:/dashboard");
