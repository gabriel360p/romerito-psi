<?php

//essas duas maneiras fazem a mesma coisa, porém essa última é mais especifica
// $uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

$method = $_SERVER['REQUEST_METHOD'];

roteador($uri);

function roteador($uri)
{
    switch ($uri) {

        case '/':
            if($_SERVER['REQUEST_METHOD']!='GET'){
                include __DIR__.'views/error/403.php';
                die();    
            }else{
                include __DIR__.'/views/home.php';
                die();    
            }
            
            break;
    
    
        case '/create': //página de registro
            
            if($_SERVER['REQUEST_METHOD']!='GET'){
                include __DIR__.'views/error/403.php';
                die();    
            }else{
                include __DIR__.'/views/auth/register.php';
                die();    
            }

            break;
    
    
        case '/store': //página onde vai salvar os dados do usuário

            if($_SERVER['REQUEST_METHOD']!='POST'){
                include __DIR__.'/views/errors/403.php';
                die();    
            }else{
                // include __DIR__.'/controllers/registerController.php';
                include __DIR__.'/content/dashboard.php';
                die();    
            }
    
            break;
    
    
            case '/dashboard': //página pós cadastro
                if($_SERVER['REQUEST_METHOD']!='GET'){
                    include __DIR__.'/views/errors/403.php';
                    die();    
                }else{
                    include __DIR__.'/views/content/dashboard.php';
                    die();    
                }
                
            break;
    
    
            // case '/home': //página inicial
            //     include __DIR__ .'/views/home.php';
            //     die();    
            // break;
    
    
            default:
                echo "Rota não encontrada";
            break;
    }    
}



