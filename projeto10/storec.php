<?php
include 'banco.php';

$sql = "INSERT INTO cart (product_id) VALUES('" . $_GET['id'] . "')";
$db->exec($sql);
header('Location: /cart');
