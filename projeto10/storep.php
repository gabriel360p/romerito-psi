<?php
include 'banco.php';
$sql = "INSERT INTO products(name,price,description) VALUES ('" . $_POST['name'] . "','" . $_POST['price'] . "','" . $_POST['description'] . "')";
$db->exec($sql);
header('Location:/products');
