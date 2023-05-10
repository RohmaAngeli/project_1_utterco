<?php
include('koneksi.php');
$id_keranjang = $_GET['id_keranjang'];
$query = mysqli_fetch_array(mysqli_query($db_koneksi,"SELECT * FROM tbl_keranjang WHERE id_keranjang='$id_keranjang'"));

?>
<div class="container" data-aos="fade-up" data-aos-delay="200" align="center">

<h5>Edit ID keranjang   :   <?php echo $id_keranjang ?></h5><br>
   <div class="card" style="border:1px solid white; background-color:black;">
      <div class="container-fliud" style="">
         <form action="" method="post" role="form" enctype='multipart/form-data' name="autoSumForm">
        <!-- <form action="" method="post" name="autoSumForm"> -->
          <table class="table" style="min-width: 1000px !important;width: 100%; text-align: center;">
            <thead class="thead-primary" style="background: #c49b63;">
              <tr class="text-center" style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">
               <?php
               $id_produk=$query['id_produk'];
               $query_tbl_produk = mysqli_fetch_array(mysqli_query($db_koneksi,"SELECT * FROM tbl_produk WHERE id_produk='$id_produk'"));
               ?>
                <th style="padding-left:30px; text-align:center; color: #fff !important; border: 1px solid transparent !important;"><b>Gambar</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Produk</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Kategori</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Harga</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Jumlah</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Subtotal</b></th>
                <th style="padding-right:30px; color: #fff !important; border: 1px solid transparent !important;"><b>Opsi</b></th>
              </tr>
            </thead>
            <tbody>
                <tr class="text-center" style="text-align: center !important; vertical-align: middle; border: 1px solid transparent !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important">

                <td class="image-prod" style="padding-left:30px;">
                  <div class="img" style="">
                      <img src="image_view.php?id_produk=<?php echo $query_tbl_produk['id_produk']; ?>" alt="" style="display: block; width: 100px; height: 100px; margin: 0 auto;">
                  </div>
                </td>
                
                <td class="product-name" style="width: 30%;">
                  <h3 style="color:#fff; font-size: 18px; text-transform: uppercase; text-align:left;"><?php echo $query_tbl_produk["nama_produk"];?></h3>
                </td>

              
                <td>
                  <h3 style="color:#fff; font-size: 18px;"><?php echo $query_tbl_produk["kategori_produk"];?></h3>
                </td>

                <td class="price" style="color: #fff;"><?php echo $query_tbl_produk["harga_produk"];?></td>
                
                <td class="quantity">
                  <input type='hidden' name='harga' value="<?php echo $query_tbl_produk['harga_produk']; ?>" onFocus="startCalc();" onBlur="stopCalc();" />
                  <input type='number' name='jumlah' onFocus="startCalc();" onBlur="stopCalc();"  required>
                </td>
                  
               <td class="total" style="color: #fff;">
                  <input type='hidden' name="diskon" value="0" onFocus="startCalc();" onBlur="stopCalc();"  />
                  <input type="text" name="total" value="0" style="background-color:yellow;"readonly>
               </td>

               <td style="padding-right:30px;">
                  <!-- <ul class="list-inline m-0">
                    <li class="list-inline-item">
                      <a href="?page=keranjang&aksi=update&id_keranjang=<?php echo $row['id_keranjang']; ?>" title="Edit">
                        <div style="background-color:green;" onMouseOver="this.style.backgroundColor='lightgreen'" onMouseOut="this.style.backgroundColor='green'">
                          <center>
                              <svg xmlns="http://www.w3.org/2000/svg" style="margin:9;" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" color="#fff" style="padding:4%;" class="bi bi-check-square-fill">
                              <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm10.03 4.97a.75.75 0 0 1 .011 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.75.75 0 0 1 1.08-.022z"/>
                              </svg>
                          </center>
                        </div>
                      </a>
                    </li>
                  </ul> -->
                  <input type="submit" name="submit" value="Done" style="background-color:green; color:#fff; border:2px solid #fff; border-radius:10px;" onMouseOver="this.style.backgroundColor='lightgreen'" onMouseOut="this.style.backgroundColor='green'">
                  </td>
              </tr>
            </tbody>
            </table>
         </form>

         <script>
         function startCalc(){
         interval = setInterval("calc()",1);}
         function calc(){
         one = document.autoSumForm.harga.value;
         two = document.autoSumForm.jumlah.value;
         three = document.autoSumForm.diskon.value;
         document.autoSumForm.total.value = (one * 1) * (two * 1) - (three * 1);}
         function stopCalc(){
         clearInterval(interval);}
         </script>

      </div>
   </div>
</div>


<?php
include 'koneksi.php';

if (isset($_POST['submit'])){
   $jumlah_produk=$_POST['jumlah'];

   $query_update = mysqli_query($db_koneksi,"UPDATE tbl_keranjang SET jumlah_produk='$jumlah_produk' WHERE id_keranjang='$id_keranjang'");

   if ($query_update){
      echo "<center>";
      echo "<br>";
      echo "Data Telah Terupdate! <br>";
      echo '<span style="color:blue"><a href="?page=keranjang"><b><u><i>Refresh Halaman Keranjang</i></u></b></a></span>';
      echo "</center>";
   }
}
?>