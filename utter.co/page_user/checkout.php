<?php 
include 'koneksi.php';
if(isset($_POST['submit'])) {

  $tanggal_transaksi = date('Y-m-d H-i-s');
  $sql_ins = "INSERT INTO header_transaksi (tanggal_transaksi, total_harga) VALUES ('$tanggal_transaksi','$juml_nilai')";
  $query= mysqli_query($db_koneksi, $sql_ins);
  $id_transaksi = mysqli_insert_id($db_koneksi);

  @$iduser=$_SESSION['username']; 
  $query_lihat="SELECT * FROM tbl_keranjang WHERE username='$iduser';"; 
  $query_cart=mysqli_query($db_koneksi, $query_lihat); 
  // $rows = mysqli_fetch_array($query_cart);

  while($rows = mysqli_fetch_array($query_cart)){
  // foreach($rows as $cart => $val){
  // foreach($_SESSION["cart"] as $cart => $val){
      $sql = "INSERT INTO detail_transaksi (id_header_transaksi, id_produk, jumlah) VALUES ('.$id_transaksi.',".$rows["id_produk"].",".$rows["jumlah_produk"].")"; 
      $query = mysqli_query($db_koneksi, $sql);
  }

  @$iduser=$_SESSION['username']; 
  $query_delete = mysqli_query($db_koneksi,"delete from tbl_keranjang where username='$iduser'");
  header ('?page=keranjang');
}
?>