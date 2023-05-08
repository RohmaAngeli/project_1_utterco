<?php
@$username=$_POST['username'];
@$id_produk=$_POST['id_produk'];
@$submit=$_POST['submit'];
if($submit) {
$query_create="INSERT INTO tbl_keranjang VALUES ('', '$id_produk', '$username') ";
$hasil=mysqli_query($db_koneksi, $query_create) or die ("ERROR TAMBAHKAN KE KERANJANG");
    if ($hasil) {
    //jika berhasil update kembali ke halaman profil 
    echo "<script> alert('data terupdate!');</script>";
    echo '<span style="color:blue"><a href="?page=keranjang"><b><u><i>Kembali ke halaman profil</i></u></b></a></span>';
    }
}
?>