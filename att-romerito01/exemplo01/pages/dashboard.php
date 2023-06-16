<?php

    // aplicação da função hasUser() definida em auth.php
    if (! hasUser()) {
        header('Location: /');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
</head>
<body>

    <h1>Book Store - 

    <?php 
        $result = find ("SELECT * FROM users where id='".$_SESSION['user']."'");//pesquisando o usuário no banco de dados
        $data = $result->fetchArray();//efetuando a busca no banco de dados        
        echo $data['name'];//imprimindo o nome do usuário

    ?>
    
    </h1>

    <a href="/logout">Sair</a>
    <br>
    <a href="/books/create">Novo Livro</a>
    <br>
    <a href="/books/index">Livros</a>
    
</body>
</html>