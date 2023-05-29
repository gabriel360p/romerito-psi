<?php
$db = new SQLite3('produtos.db'); //criando banco de dados

$sqlproduct = "CREATE TABLE IF NOT EXISTS products (name STRING, price STRING, description STRING)";

$sqlcart = "CREATE TABLE IF NOT EXISTS cart (product_id INTEGER)";

$db->exec($sqlproduct);
$db->exec($sqlcart);
