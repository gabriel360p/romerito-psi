<?php

if (hasUser()) {
    header("Location: /dashboard");
}else{
    header("Location: /login");
}

if($_SERVER['REQUEST_METHOD']!='POST'){
    header("Location: /books/create");
}else{
    $book = new Book(connection());
    $book->save($_POST['title'],$_POST['author']);
    header("Location: /books/index");
}