<?php
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

    <h1>Book Store - <?= $_SESSION['user'] ?></h1>

    <a href="/logout">Sair</a>

    <a href="/books/create">Adicionar Livro</a>

    <a href="/books/index">Livros</a>

    
</body>
</html>