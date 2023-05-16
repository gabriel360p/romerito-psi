<!-- vai ser o arquivo de roteamento, ele esta como index pois é o primeiro arquivo
que o servidor deve abrir para fazer os redirecionamentos -->
<?php
// o $_SERVER['REQUEST_URI']; -> serve para "pegar" a url, assim criamos o roteamento/redirecionamento
$uri=$_SERVER['REQUEST_URI'];

echo "<pre>";
    // var_dump($_SERVER);
    echo "<h1>Rota digitada: ".$uri."</h1>";
echo "</pre>";

// ["REQUEST_URI"]=> string(1) "/" //-> isso é usado  para criar o url link


// //pegamos a informação via -> $uri=$_SERVER['REQUEST_URI']; e com if ou switch criamos o redirecionamento
// if(isset($uri)){//realizando roteamento
//     if($uri==='/'){
//         include __DIR__ .'/paginas/index.php';
//     }else if($uri==='/alunos'){
//         include __DIR__ .'/paginas/aluno/home.php';
//     }
// }

// pode ser feita pelo if ou switch
//ele pega também a rota que os botões definem
// por enquanto ele só abre arquivos, ainda não abre funções

// if(isset($uri)){
//     switch ($uri) {
//         case '/':
//             include __DIR__ .'/paginas/index.php';
//             break;

//         case '/alunos':
//             include __DIR__ .'/paginas/aluno/home.php';
//             break;

//         case '/professor':
//             include __DIR__ .'/paginas/aluno/home.php';
//             break;

//         case '/turmas':
//             include __DIR__ .'/paginas/turmas/home.php';
//             break;


//         default:
//         echo "Rota não registrada";
//         break;
//     }
// }
        

// terceira forma:

include __DIR__ ."/rotas.php";

if(isset($uri)){
    // aqui ele procura dentro da array a url passada, e pega a string e abre a página  
    // ele pega o '/' e abre o =>'/paginas/index.php'. ele concatena e abre usando o include __DIR__
    if(array_key_exists($uri,$rotas)){
        include __DIR__ . $rotas[$uri];
    }
}

?>