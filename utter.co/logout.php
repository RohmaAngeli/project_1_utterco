<?php // menjalankan session : selalu diletakkan di awal

// session_start();

// mengsapus session username dan level 
unset($_SESSION['username']); 
unset ($_SESSION['level']);

// session_destroy();

// menghapus semua session dari browser 
echo "<h1>Anda sudah logout</h1>"; 
// header('location: index.php');
?>