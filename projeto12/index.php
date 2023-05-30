<?php
session_start();

include __DIR__ . '/roteador.php';

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

//função para rotear 

// if($method=='POST'){
//     rotear($uri, $rotaspost);
    
// }else if($method=='GET'){
// }

rotear($uri, $rotas);


?>