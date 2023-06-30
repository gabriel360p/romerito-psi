<?php

function connection(){
    try{
        $pdo = new PDO('mysql:host=localhost:3306; dbname=livraria', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }catch(PDOException $e){
        return print($e);
    }
}