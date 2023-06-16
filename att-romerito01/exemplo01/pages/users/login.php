<?php 

// verificando se há usuário conectado
// usa função definida no arquivo auth.php
if (hasUser()) {
    header("Location: /dashboard");
}

if (isset($_POST['email'], $_POST['password'])) {
    //login

    $email = $_POST['email'];

    //usa função find() presente no arquivo database.php
    $result = find ("SELECT * FROM users where email='{$email}'");

    // documentação da função fetchArray()
    //  https://www.php.net/manual/pt_BR/sqlite3result.fetcharray.php
    $data = $result->fetchArray();        

    if ($data) {
        $_SESSION['user'] = $data['id'];//guardando o id do usuário
        header('Location: /dashboard');
    } else {
        header('Location: /users/login');
    }
} else {
    header('Location: /users/login');
}