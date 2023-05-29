<?php

if(isset($_SESSION['user'])){//se o usuario já estiver iniciado uma sessão anterior
    header('Location:/');
}else{
    $user=$_POST['name'];

    $_SESSION['user']=$user;
    header('Location:/');
}

?>