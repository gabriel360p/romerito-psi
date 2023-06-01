<?php

if (! isset($_SESSION['matricula'])) {

    header('location: /');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Olá, sua matrícula é <?php echo $_SESSION['matricula']; ?></h1>


    <a href="/logout" style="padding-top: 20px;">Sair</a>

    
</body>
</html>