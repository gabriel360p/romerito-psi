<?php

include_once ('library.php');
checkRequestType($_SERVER['REQUEST_METHOD']);//coletando do tipo de request
requestReceveid($_REQUEST);//coletando a array de dados

switch ($requestCollection->route) {
    case 'store':
        if($requestType=='POST'){
            store($dados);
        }else{
            echo "A route store só aceita o metodo http POST!";
        }

        break;

    case 'update':
        break;

    case 'show':
        break;

    case 'delete':
        break;

    case 'listall':
        break;

    default:
        echo "Rota não encontrada";
        return $requestCollection->route;
        break;
}


// listall($dados);
// store($dados);
// show($dados);
// delete($dados);


