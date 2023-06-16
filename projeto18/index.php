<?php

$senha = "123";
$passwordhash=password_hash($senha,PASSWORD_DEFAULT);

if(password_verify("123",$passwordhash)){
    echo "senhas iguais";
}else{
    echo "senhas não iguais";
}