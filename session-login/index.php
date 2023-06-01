<?php

session_start();

include __DIR__ . '/roteador.php';

//obtendo a URL requisitada
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//função para rotear para página corretas
rotear($uri, $rotas);