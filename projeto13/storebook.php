<?php

if($_SERVER['REQUEST_METHOD']=='POST'){

    setcookie('book', $_POST['title'],strtotime('+200 minutes'));



    header('Location:/');

    die();

}else{
    header('Location:/');
    die();
}

