<?php

$method = $_SERVER['REQUEST_METHOD'];


// $_COOKIE[$namecookie] -> serve para ver o valor do cookie / serve para acessar o cookie;
// setcookie($name, 'valor', $dataExpiracao) ->cria um cookie
// como uma variavel, o nome do cookie permite que acessamos ele e mexemos em seus valores.   
//o cookie fica salvo localmente, então uma vez definido, dá para acessar em qualquer página

if($method == 'POST'){

    if(isset($_POST['namecookie'])){
        $namecookie=$_POST['namecookie'];

        setcookie('loja', $namecookie, strtotime("+1 minuts"));
        //nome do cookie - valor do cookie - tempo de duração do cookie;
        
        echo $_COOKIE[$namecookie]; 

        echo "Cookie definido";
    }
}else{
    http_response_code(404);//erro de acesso get
    echo "<h1>Acesso get negado</h1>";
}

?>
