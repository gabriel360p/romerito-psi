<?php

if($method=='POST'){                
    $password=md5($_POST['password']);
    $email=$_POST['email'];
    $sql='INSERT INTO user(email,password) VALUES('.$email.','.$password.')';
    $db->exec($sql);
    header('Location:/');

}else{
    header('Location:/');
}