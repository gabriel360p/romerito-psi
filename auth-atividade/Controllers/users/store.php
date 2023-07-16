<?php
if (!hasUser()) {
    
    header('Location: /');

} else {

    $method = $_SERVER['REQUEST_METHOD'];    

    //autorizando o acesso a rota    

    if ($method === 'GET' && authorize($rotas[$uri])) {
        $model= new User(connection());
        $model->save($_POST['name'], $_POST['email'], $_POST['password'], $_POST['type']);
        header('Location: /users/index');
    } else {
        header('Location: /dashboard');
    }
}