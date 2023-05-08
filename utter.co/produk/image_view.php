<?php
include('koneksi.php');
if(isset($_GET['id_produk'])) 
{
    $query = mysqli_query($db_koneksi,"select * from tbl_produk where id_produk='".$_GET['id_produk']."'");
    $row = mysqli_fetch_array($query);
    //header("Content-type: " . $row["tipe_gambar"]);
    echo $row["gambar_produk"];
}
else
{
    header('location:berandaguest.php');
}
?>