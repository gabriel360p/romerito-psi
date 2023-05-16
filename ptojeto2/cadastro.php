<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $musicget = $_POST['music'];
    echo "<h1>POST: ".$musicpost."</h1>";

}elseif($_SERVER['REQUEST_METHOD']=='GET'){
    $musicpost = $_GET['music'];
    echo "<h1>GET: ".$musicget."</h1>";
}


?>