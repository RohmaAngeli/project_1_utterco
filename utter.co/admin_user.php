<?php
// menjalankan session: selalu diletakkan di awal
session_start(); 
if (isset($_SESSION['level']) && isset($_SESSION['username']))
{
    // jika level admin akan masuk ke halaman index.php
    if ($_SESSION['level'] == "admin")
    {
        header('location:admin.php');
    }
    // jika kondisi level user maka akan diarahkan ke halaman user.php 
    else if ($_SESSION['level'] == "user")
    {
        header('location:user.php');
    }
    else {
        echo "Login Error";
    }
}
// jika user belum terdaftar maka akan diarahkan ke halaman register.php
if (!isset($_SESSION['level'])) 
{
    echo "Anda tidak boleh mengakses halaman ini tanpa : ";
    echo "<a href='login.html'>Login</a><br>";
    echo "<a href='register.html'>Belum punya User?</a>";
}
?>