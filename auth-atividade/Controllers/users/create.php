<?php 

if (!hasUser()) {
    
    header('Location: /');

} else {

    $method = $_SERVER['REQUEST_METHOD'];    

    //autorizando o acesso a rota    

    if ($method === 'GET' && authorize($rotas[$uri])) {
        include __DIR__ . '/../../pages/users/create.php';
    } else {
        header('Location: /dashboard');
    }
}