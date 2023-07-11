<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'users';



$condb = new mysqli($host, $username, $password, $db);

if(!$condb) {
    die("tidak dapat terkoneksi ke database" . $condb->error);
}else {
}

?>