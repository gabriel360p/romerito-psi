<?php

// frameworks: django, boostrap, laravel, spring, remix

if (hasUser()) {
    header('Location: /dashboard');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /users/create');
}

// chegar se é register 
if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //criar um objetdo do tipo User (modelo User)
    $user = new User(connection());
    
    
    //Ou os dados do usuário em um array,
    //ou o valor booleano FALSO
    $data = $user->find($email);   

    if ($data) {
        $_SESSION['user'] = $data['name'];
        header('Location: /dashboard');
    } else {

        $retorno = $user->save ($name, $email, $password);
        // save("INSERT INTO users ('name', 'email', 'password') values('{$name}','{$email}','{$password}')");

        $_SESSION['user'] = $name;
        header('Location: /dashboard');
    }

}
