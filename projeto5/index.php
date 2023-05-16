<?php

$uri = $_SERVER['REQUEST_URI'];

$method = $_SERVER['REQUEST_METHOD'];
//primeira forma

// if(isset($uri)){
//     switch ($uri) {
//         case '/':
            
//             if($method!='GET'){//homepage
//                 // file_get_contents('\Users\20221101110085\Documents\php\projeto5\paginas\home.php');
//                 echo "Essa rota só aceita get";
//                 die();
//             }else{
//                 include __DIR__ .'/paginas/home.php';
//                 die();
//             }

//             break;

//             case '/voltar':
//                 if($method!='GET'){//voltar a dashboard
//                     die();
//                     echo "Essa rota só aceita get";
//                 }else{
//                     include __DIR__ .'/paginas/home.php';
//                     die();
//                 }

//             case '/auth/create'://create user
//                 if($method!='GET'){
//                     echo "Essa rota só aceita get";
//                     die();
//                 }else{
//                     include __DIR__ .'/paginas/auth/register.php';
//                     die();
//                 }

//             case '/store'://register user
//                 if($method!='POST'){
//                     echo "Essa rota só aceita post";
//                     die();
//                 }else{
//                     include __DIR__ .'/paginas/home.php';
//                     die();
//                 }


//             case '/main/dashboard'://dashboard
//                 if($method!='GET'){
                    
//                     echo "Essa rota só aceita get";
//                     die();
//                 }else{
//                     include __DIR__ .'/paginas/main/dashboard.php';
//                     die();
//                 }

//             case '/logout'://sair
//                 if($method!='GET'){
//                     echo "Essa rota só aceita get";
//                     die();
//                 }else{
//                     include __DIR__ .'/paginas/home.php';
//                     die();
//                 }
    
//             break;


//         default:
//         echo "Rota não registrada";
//         break;
//     }
// }
        

//segunda forma

include __DIR__ ."/rotas.php";

if(isset($method)){

if($method=='POST'){
    if(array_key_exists($uri,$rotas_post)){
            include __DIR__ . $rotas_post[$uri];
        }
}elseif($method=='GET'){
    if(array_key_exists($uri,$rotas_get)){
            include __DIR__ . $rotas_get[$uri];
        }
    }

}