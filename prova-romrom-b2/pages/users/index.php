<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    

<?php
    $user = new User(connection());
    $data = $user->all(); 


    while ($linha = $data->fetchArray()) {
        echo "<br>";
        echo "Nome: {$linha['name']} --- Email: {$linha['email']}<br />";
        echo "<br>";
        echo "<hr>";
    }

?>
</body>
</html>