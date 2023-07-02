<?php 

session_start();


//Banco - o banco base precisa já existir, ele precisa já estar iniciado, mesmo que esteja vazio da dados ou tabelas.
include __DIR__ . '/database.php';

//Importação dos modelos
include __DIR__ . '/Model/User.php';
include __DIR__ . '/Model/Book.php';

//Importação das migrações / modelos de criação das tabelas
include __DIR__ . '/Migration/user_migration.php';
include __DIR__ . '/Migration/book_migration.php';


include __DIR__ . '/auth.php';
include __DIR__ . '/router.php';

$connection = connection();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

rotear($uri, $rotas);