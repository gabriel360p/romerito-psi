<?php

function connection(){//estabelecendo a conexão com o mysql
    try{
        $pdo = new PDO('mysql:host=localhost:3306; dbname=romerito', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        return print($e);
    } 
}















// function connection() : SQLite3 {
//     return new SQLite3('database.db');
// }

// $connection = connection();

// //cria as tabelas de usuário e de livros
// $connection->exec(
//     "CREATE TABLE IF NOT EXISTS users(
//         id INTEGER PRIMARY KEY,
//         name TEXT,
//         email TEXT,
//         password TEXT)"
// );

// $connection->exec("CREATE TABLE IF NOT EXISTS books(
//     id INTEGER,
//     title TEXT,
//     user INTEGER,
//     FOREIGN KEY(user) REFERENCES users(id))"
// );

// //recebe a declaração SQL e o banco de dados
// // query = "SELECT * FROM users";
// function find ($query, $connection) {    
//     return $connection->query($query);
// }

// // INSERTO INTO users (name,email,password)
// //  VALUES ('eu','eu@eu','123123');
// function save ($query) {
//     $db = connection();
//     return $db->exec($query);    
// }

