<?php
// echo "<pre>";
// echo "<h1>Testando query strings <h1>";

// print_r($_SERVER['QUERY_STRING']);
// // a variavel query_string so exite para solicitação do tipo get, ela armazena os parâmetros que se passa na barra de url, quando se usa post, ela não é criada
// // $_SERVER['QUERY_STRING'] -> esse comando pega o parâmetro passado na barra de url exemplo: http://localhost:8000/index.php?music=hollywod ->querystring GET
// // ele vai retornar o conteud: music=hollywod, assim da para fazer filtros.

// echo "</pre>";

echo "<br>";

echo "<pre>";
echo "<h1>Testando query strings <h1>";

// filtrando da url a parte de query_string
$qstring = filter_input(INPUT_SERVER,'QUERY_STRING');

// convertendo a query_string para string
parse_str($qstring, $listaFinal);

// imprimindo tudo
print_r($listaFinal);

// imprimindo algo especifico
print_r($listaFinal['categorie']);


echo "</pre>";

?>