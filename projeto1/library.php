<?php

// Pegando os valores de uma request

function requestReceveid($dados)
{
    $requestCollection = $dados;
}

// Checando tipo de Request

function checkRequestType($request)
{
    $requestType=$request;
    switch ($requestType) {
        case 'POST':
            // echo $request;
            return $requestType;
            break;

        case 'GET':
            // echo $request;
            return $requestType;
            break;
        
        default:
            echo "<h4>Tipo de request não identificada</h4>";
            echo "<h5>".$requestType."</h5>";
            // return $request;
            break;
    }
}


// Redirecionamento

function redirect($url,$statusCode)
{
    header('Location: '.$url,$statusCode);
    die();
}

// CRUD

function store($dados)
{//salvar no banco de dados
    echo "Dados salvos!";
    // return redirect(); retornar uma para uma página
}

function listall($dados){//listar os produtos do banco
    // return redirect();
    foreach($dados as $dado){
        echo $dado;
        echo "</br>";
    }    
    // return redirect(); retornar uma para uma página
}

function show($id){//mostrar um determinado objeto
    // return redirect();
}

function delete($id){//deletar um determinado objeto
    echo "Dado Deletado!";
    // return redirect(); retornar uma para uma página

}

function update($id){//atualizar um determinado objeto
    echo "Dado Atualizado!";
    // return redirect(); retornar uma para uma página
}
