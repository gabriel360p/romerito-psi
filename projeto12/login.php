<?php


if(isset($_SESSION['user'])){
    header('Location:/');

}else{
    $_SESSION['user']=$_POST['name'];
    header('Location:/');
}


?>