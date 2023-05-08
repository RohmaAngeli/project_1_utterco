<?php

//koneksi database

$host="localhost";
$user="root";
$pass=""; 
$database="db_utterco";
$db_koneksi=mysqli_connect($host, $user, $pass, $database);
if(!$db_koneksi) {
    echo "KONEKSI DATABASE GAGAL!!!";
}
?>