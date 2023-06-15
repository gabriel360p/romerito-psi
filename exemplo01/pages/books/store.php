<?php
// PÁGINA QUE EFETUA O SAVE DO LIVRO DENTRO DO BANCO DE DADOS
include __DIR__.'database';

$db = connection();

$sql = "INSERT INTO books (title, user) values('".$_POST['title']."','".$_SESSION['user']."')";

$db->exec($sql);

header("Location:/dashboard");
