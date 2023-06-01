<?php

setcookie('PHPSESSID',null,strtotime('-3600 seconds'));
setcookie('book',null,strtotime('-3600 seconds'));
session_destroy();
header('Location:/');