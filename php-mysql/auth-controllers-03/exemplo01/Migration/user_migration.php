<?php

$pdo = connection();

$pdo->exec("CREATE TABLE IF NOT EXISTS 
    users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        password VARCHAR(100) NOT NULL,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50)
    )"
);
