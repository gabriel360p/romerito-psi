<?php

$cor =$_POST['cor']; 

session_start();//iniciar sessão

$_SESSION['color']=$cor;//." ---------------- ID DA SESSÃO: ".session_id();//->definir nome e dados da sessão

if(session_id()==true){//testando para ver se a sessão possuir id ou não
    echo "true";
}else{
    echo "false";
}

session_destroy();//desativar sessão

echo "<p>";
echo "Valor da sessão: ".$_SESSION['color'];
echo "</p>";

// var_dump($_SESSION['color']);
setcookie('beforeColor',$_SESSION['color'],strtotime("+10 seconds"))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php  echo $_SESSION['color']; ?>;
        }
    </style>
</head>
<body>
    
</body>
</html>