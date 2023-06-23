<?php 

$user = new User(connection());//injetando a dependência que o connection()

if (hasUser()) {
    header("Location: /dashboard");
}

if (isset($_POST['email'], $_POST['password'])) {
    //login

    $email = $_POST['email'];

    $data = $user->find($email);//injeção de dependência

    if ($data['email']==$email) {
        $_SESSION['user'] = $data['id'];//guardando o id do usuário
        header('Location: /dashboard');
    } else {
        header('Location: /users/login');
    }
} else {
    header('Location: /users/login');
}