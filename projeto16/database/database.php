<?php

function connection() : SQLite3{//criando o banco de dados
    return new SQLite3('database.db');
} 

$db=connection();//variável de conexão

//criando tabela no banco de dados
$db->exec("
    CREATE TABLE IF NOT EXISTS users(
    id INTEGER PRIMARY KEY,
    email TEXT,
    password TEXT
    )
");

$db->exec("
    CREATE TABLE IF NOT EXISTS books(
    id INTEGER PRIMARY KEY,
    title TEXT    
    )
");

function find($query, $db){//procurar itens
    return $db->query($query);
}

function save($query){//salvar itens 
    $db3 = connection();
    return $db3->exec($query);
}























// function exemplo1() : bool{
//     return 1 > 2 ? true : false;
// }

// public boolean funcNome(){
//     return 1 > 2 ? true : false;
// }