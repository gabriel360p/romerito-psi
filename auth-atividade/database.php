<?php

/**
 * Este arquivo contém as definições básicas de acesso a banco
 * de dados para a aplicação.
 * 
 * Uma função chamada connection() é definida para retornar
 * um objeto do tipo SQLite3, que permite realizar operações
 * no banco de dados da aplicação.
 * 
 * Além disso, duas funções adicionais são definidas. A função
 * find (), que permite realizar operações SQL do tipo SELECT e
 * a função save () que permite realizar operações SQL do tipo INSERT.
 * 
 * Por fim, as tabelas de usuários e livros são criadas através
 * do objeto $connection e a execução de seu método exec().
 * 
 */

function connection() : SQLite3 {
    return new SQLite3('database.db');
}

//obtém uma conexão com o banco de dados
$connection = connection();

//cria as tabelas de usuário e de livros
//vamos considerar dois tipos de usuário: commom, admin
$connection->exec(
    "CREATE TABLE IF NOT EXISTS users(
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT,
        type TEXT,
        password TEXT)"
);

$connection->exec("CREATE TABLE IF NOT EXISTS books(
    id INTEGER PRIMARY KEY,
    title TEXT,
    user INTEGER,
    FOREIGN KEY(user) REFERENCES users(id))"
);

// inserindo usuário admin
// $connection->exec("INSERT INTO users (name,email,type,password) VALUES ('admin','admin@admin','admin','".password_hash('123123123',PASSWORD_ARGON2I)."')");
// $connection->exec("INSERT INTO users (name,email,type,password) VALUES ('user','user@user','commom','".password_hash('123123123',PASSWORD_ARGON2I)."')");

?>