<?php

$pdo = connection();

$pdo->exec("CREATE TABLE IF NOT EXISTS 
    livros (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(30) NOT NULL,
        author VARCHAR(30) NOT NULL,
        user_id INT(6) UNSIGNED,
        FOREIGN KEY (user_id) REFERENCES users (id) 

    )"
);
