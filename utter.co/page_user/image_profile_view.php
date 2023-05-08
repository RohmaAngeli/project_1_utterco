<?php
include('koneksi.php');
$username = $_SESSION['username'];
if(isset($_GET['username'])) 
{
    $query = mysqli_query($db_koneksi,"select * from tbl_user where username='$username'");
    $row = mysqli_fetch_array($query);
    //header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar_profil"];
}
else
{
    header('location:?page=profil');
}
?>