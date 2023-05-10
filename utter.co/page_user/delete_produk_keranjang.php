<?php
ob_start();
if(isset($_GET['id_keranjang']))
{
   include('koneksi.php');
   $id_keranjang = $_GET['id_keranjang'];
   $query = mysqli_query($db_koneksi,"DELETE FROM tbl_keranjang WHERE id_keranjang='$id_keranjang'");
   if ($query){
      // echo "<script> alert('Data Telah terhapus!');</script>";
      // echo "Data Telah terhapus! <br>";
      // echo '<span style="color:blue"><a href="?page=keranjang"><b><u><i>Kembali ke halaman manage data postingan</i></u></b></a></span>';
      ?>
      <div class="container" data-aos="fade-up" data-aos-delay="200" align="center">
         <div class="card" style="border:1px solid white; background-color:black; width:50%;">
		      <div class="container-fliud" style="">
               <div class="col" style="background-color:#c49b63;  padding:4%; "><h3>Data Telah Terhapus!</h3></div>
               <div class="col" style="background-color:#fff; padding:3%;"><a href="?page=keranjang" style="color:#000;" onMouseOver="this.style.color='#cda45e'" onMouseOut="this.style.color='#000'"><b><u><i>Kembali ke halaman keranjang</i></u></b></a></div>
            </div>
         </div>
      </div>
      <?php
      // header("Location:?page=keranjang");
      // include "page_user/keranjang.php";
   }
}
// header('location:?page=manage_menu');
// echo "Data Telah terhapus! <br>";
// echo '<span style="color:blue"><a href="?page=manage_menu"><b><u><i>Kembali ke halaman manage data postingan</i></u></b></a></span>';
// echo "<script> alert('Data Telah terhapus!');</script>";
?>