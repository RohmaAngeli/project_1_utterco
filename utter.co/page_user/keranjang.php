<div class="container bootstrap snippets bootdey"style="margin-top:12%; margin-bottom:8%;">
  <div class="container" data-aos="fade-up">
<?php
    include('koneksi.php');
    if(isset($_GET['page'])){
    @$aksi = $_GET['aksi'];
    switch ($aksi){
      //Menampilkan data kelola
      default:
      ?>

      <div class="section-title">
         <h2>Cart</h2>
         <p>Halaman Keranjang</p>
      </div>

    <div>
      <div>
        <form action="" method="post" role="form" enctype='multipart/form-data'>
        <!-- <form action="" method="post" name="autoSumForm"> -->
          <table class="table" style="min-width: 1000px !important;width: 100%; text-align: center;">
            <thead class="thead-primary" style="background: #c49b63;">
              <tr class="text-center" style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">&nbsp;</th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Gambar</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Produk</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Kategori</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Harga</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Jumlah</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Subtotal</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Opsi</b></th>
              </tr>
            </thead>
            <?php
    @$id=$row['id_produk']; 
    $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
    $hasil=mysqli_query($db_koneksi, $query_lihat); 
    $data=mysqli_fetch_array($hasil);
    
    @$iduser=$_SESSION['username']; 
      $query_lihat="SELECT * FROM tbl_keranjang WHERE username='$iduser';"; 
      $query=mysqli_query($db_koneksi, $query_lihat); 
      ?>
            <?php while($row = mysqli_fetch_array($query)){
            ?>
              <!-- <form action="" method="post" name="autoSumForm"> -->
            <tbody>
                <tr class="text-center" style="text-align: center !important; vertical-align: middle; border: 1px solid transparent !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important">
                <td class="product-remove" style="padding-top:5%;padding-bottom:5%;"><a href="?page=keranjang&aksi=delete&id_keranjang=<?php echo $row['id_keranjang']; ?>"  onclick="return confirm('Apakah anda yakin menghapus data ?')" style="border: 1px solid rgba(255, 255, 255, 0.1); padding: 5px; border-radius:10px;"><span class="icon-close"></span><b>×</b></a>
                </td>

                <td class="image-prod">
                  <div class="img" style="">
                      <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" alt="" style="display: block; width: 100px; height: 100px; margin: 0 auto;">
                  </div>
                </td>
                
                <?php
                @$id=$row['id_produk']; 
                  $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
                  $hasil=mysqli_query($db_koneksi, $query_lihat); 
                  $data=mysqli_fetch_array($hasil);
                // $jumlah=
                // $subtotal = $data["harga_produk"] * $val["jumlah"];
                ?>
                
                <td class="product-name" style="width: 30%;">
                  <h3 style="color:#fff; font-size: 18px; text-transform: uppercase; text-align:left;"><?php echo $data["nama_produk"];?></h3>
                </td>

              
                <td>
                  <h3 style="color:#fff; font-size: 18px;"><?php echo $data["kategori_produk"];?></h3>
                </td>

                <td class="price" style="color: #fff;"><?php echo $data["harga_produk"];?></td>
                
                <td class="quantity">
                  <center>
                    <div style="color:#000; background-color:white; font-size: 18px;">
                      <!-- <input type='number' name='harga' value='' onFocus="startCalc();" onBlur="stopCalc();" />
                      <input type="number" name='jumlah' onFocus="startCalc();" onBlur="stopCalc();" />
                      <input type='number' name="diskon" value="0" readonly onFocus="startCalc();" onBlur="stopCalc();"  /> -->
                      <!-- <input type="text" name="total" value="0" readonly> -->
                      <?php echo $row['jumlah_produk']; ?>
                    </div>
                  </center>
                </td>
                  
                  <td class="total" style="color: #fff;">
                  <?php 
                  $subtotal = $data["harga_produk"] * $row["jumlah_produk"];
                  $subtotalsum[] = $data["harga_produk"] * $row["jumlah_produk"]; 
                  ?>

                      <input type="text" value="<?php echo $subtotal; ?>" readonly>
                  </td>

                  <td>
                  <ul class="list-inline m-0">
                    <li class="list-inline-item">
                      <a href="?page=keranjang&aksi=update&id_keranjang=<?php echo $row['id_keranjang']; ?>" title="Edit">
                        <div style="background-color:green;" onMouseOver="this.style.backgroundColor='lightgreen'" onMouseOut="this.style.backgroundColor='green'">
                          <center>
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin:9;" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" color="#fff" style="padding:4%;">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>
                          </center>
                        </div>
                      </a>
                    </li>
                  </ul>
                  </td>
              </tr>
            </tbody>
            <?php } ?>
          </table>
      </div>
    </div>
<?php
$juml_nilai = array_sum($subtotalsum);
?>
    <div class="row justify-content-end">
      <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate" style="width: fit-content;">
      	<div class="cart-total mb-3" style="display: block; border: 1px solid rgba(255, 255, 255, 0.1); padding-top: 20px; padding-bottom: 20px; padding-left: 40px; padding-right: 40px;">
      		<h3 style="font-size: 20px; text-transform: uppercase; text-align:center;">Total  Keranjang</h3>
      		<p class="d-flex total-price" style=" display: block;">
          RP. &nbsp;
      			<!-- <span style="display: block; width: 50%; text-transform: uppercase;">Total</span> -->
      			<span style="display: block; text-transform: uppercase; color: #c49b63; font-size:40px;"><?php echo $juml_nilai;?></span>
      		</p>
      	</div>
        <!-- <form action="" method="post" role="form" enctype='multipart/form-data'> -->
      	<!-- <p class="text-center"><a href="?page=keranjang&aksi=checkout" class="btn btn-primary py-3 px-4" style="width:100%; background-color:#c49b63; border-color:#fff;"><b>Checkout</b></a></p> -->
        <?php
        $username=$_SESSION['username'];
        $lihat_user = mysqli_fetch_array(mysqli_query($db_koneksi,"select * from tbl_user where username='$username'"));
        ?>
        <input type="hidden" name="alamat_pengiriman" style="text-align:left;" value='<?php echo $lihat_user["alamat"];?>, <?php echo $lihat_user["kelurahan"];?>, kec. <?php echo $lihat_user["kecamatan"];?>, <?php echo $lihat_user["kota"];?>, <?php echo $lihat_user["kode_pos"];?>'>
        <input type="submit" name="submit" style="width:100%; font-weight:bold; color:#fff; height:60px; border-radius:10px; background-color:#c49b63; border-color:#fff;" value="Checkout" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='#cda45e'">
        </form>
        
      </div>
      <br>
      <?php 
          include 'koneksi.php';
          if(isset($_POST['submit'])) {
            @$iduser=$_SESSION['username']; 
            $alamat_pengiriman = $_POST['alamat_pengiriman'];
            $tanggal_transaksi = date('Y-m-d H-i-s');
            $sql_ins = "INSERT INTO header_transaksi (tanggal_transaksi, username, total_harga, alamat_pengiriman) VALUES ('$tanggal_transaksi', '$iduser', '$juml_nilai','$alamat_pengiriman')";
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
            echo "<center>";
            echo "<br>";
            echo "Halaman Keranjang telah checkout <br>";
            echo '<span style="color:blue"><a href="?page=histori"><b><u><i>Lihat transaksi</i></u></b></a></span>';
            echo "</center>";

          }
        break; 
      case "delete":
        include "page_user/delete_produk_keranjang.php";
        break;
      case "update":
        include "page_user/update_produk_keranjang.php";
         break;
      }
    }else{
      include "?page=keranjang";
      }
   ?> 
  </div>
</div>