<?php
$db= new SQLite3('banco.db');//criando conexão

$dbquery= "CREATE TABLE IF NOT EXISTS user (name STRING, cpf STRING, email STRING)"; //criando uma tabela caso não exista

$db->exec($dbquery);//pegando o link do banco e mandando ele executa a query
?>

