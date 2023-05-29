<?php

if (isset($_SESSION['user'])) {

    unset($_SESSION['user']);
    setcookie("PHPSESSID", "", time() - 3600);
    session_destroy();
    header('location: /');
} else {

    header('location: /');
}
