<?php 

if (!hasUser()) {
    header ('Location: /');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>

    <h1>Livros</h1>
    <a href="/books/create">Adicionar</a>

    <ul>
    <?php foreach($users as $user) { ?>
        <li>
            <?= $user['name'] ?>
            <?= $user['email'] ?>
            <?= $user['type'] ?>
        </li>
    <?php } ?>
    </ul>
    
</body>
</html>