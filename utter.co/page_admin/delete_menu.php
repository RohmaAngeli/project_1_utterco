<?php
ob_start();
if(isset($_GET['id_produk']))
{
   include('koneksi.php');
   $id_produk = $_GET['id_produk'];
   $query = mysqli_query($db_koneksi,"DELETE FROM tbl_produk WHERE id_produk='$id_produk'");
}
// header('location:?page=manage_menu');
echo "Data Telah terhapus! <br>";
echo '<span style="color:blue"><a href="?page=manage_menu"><b><u><i>Kembali ke halaman manage data postingan</i></u></b></a></span>';
?>