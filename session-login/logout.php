<?php


if (isset($_SESSION['matricula'])) {

    unset($_SESSION['matricula']);    
    setcookie("PHPSESSID", "", time() - 3600);
    session_destroy();
    header('location: /');

} else {

    header('location: /');

}