<?php

// verificando se há usuário conectado
// usa função definida no arquivo auth.php
if (hasUser()) {
    header('Location: /dashboard');
}

if ($_SESSION['REQUEST_METHOD'] == 'GET') {
    header('Location: /users/create');
}

// chegar se é register 
if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //usa função find() presente no arquivo database.php
    $result = find("SELECT * FROM users WHERE email='{$email}'");    

    // documentação da função fetchArray()
    //  https://www.php.net/manual/pt_BR/sqlite3result.fetcharray.php
    $data = $result->fetchArray();

    if ($data) {
        $_SESSION['user'] = $name;
        header('Location: /dashboard');
    } else {

        //usa função save() presente no arquivo database.php        
        save("INSERT INTO users ('name', 'email', 'password') values('{$name}','{$email}','{$password}')");

        $_SESSION['user'] = $name;        
        header('Location: /dashboard');
    }

}

