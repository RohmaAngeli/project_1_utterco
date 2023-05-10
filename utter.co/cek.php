<?php
//session_start();

if (!isset($_SESSION['username'])){
    echo "Anda telah logout<br><br>";
    echo "<a href='index.php?page=masuk'>Masuk kembali</a>";
    echo "<br><br>atau";
    echo "<br><br><a href='index.php'>Masuk sebagai tamu</a>";
    exit;
}
?>
 