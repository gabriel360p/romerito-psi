<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    if(isset($_SESSION['user'])){
        header('Location:/');
    }else{
        $_SESSION['user']=$_POST['name'];
        header('Location:/');
    }
    die();
}else{
    header('Location:/');
    die();
}


?>