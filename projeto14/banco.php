<?php

$db = new SQLite3('banco.db');

$sql = 'CREATE TABLE IF NOT EXISTS user(email STRING UNIQUE, password STRING)';
$db->exec($sql);    

