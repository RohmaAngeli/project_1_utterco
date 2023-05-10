<div class="container" data-aos="fade-up" data-aos-delay="200">
   <?php
      include('koneksi.php');
      @$id_transaksi=$_GET['id_transaksi']; 
      $query_header = mysqli_fetch_array(mysqli_query($db_koneksi,"select * from header_transaksi where id_transaksi='$id_transaksi'"));
      ?>
      <table>
         <tr>
            <td>Tanggal Transaksi</td>
            <td width="10%" align="center">:</td>
            <td><?php echo $query_header["tanggal_transaksi"];?></td>
         </tr>
         <tr>
            <td>Total Harga Transaksi</td>
            <td width="10%" align="center">:</td>
            <td><?php echo $query_header["total_harga"];?></td>
         </tr>
         <tr>
            <td>Alamat Pengiriman</td>
            <td width="10%" align="center">:</td>
            <td><?php echo $query_header["alamat_pengiriman"];?></td>
         </tr>
      </table>
      <hr>
	<div class="card" style="border:1px solid white; background-color:white;">
		<div class="container-fliud">
         <table class="table" style="min-width: 1000px !important;width: 100%; text-align: center;">
            <thead class="thead-primary" style="background: #c49b63;">
              <tr class="text-center" style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">No.</th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>ID</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Gambar</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Produk</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Kategori</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Harga</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Jumlah</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Subtotal</b></th>
              </tr>
            </thead>
               <?php
               include('koneksi.php');
               @$id=$_GET['id_transaksi']; 
               $query_lihat="SELECT * FROM detail_transaksi WHERE id_header_transaksi='$id';"; 
               $hasil=mysqli_query($db_koneksi, $query_lihat); 

               $no = 1;
               while($row = mysqli_fetch_array($hasil)){ ?>
            <tbody>
               <tr class="text-center" style="text-align: center !important; vertical-align: middle; border: 1px solid transparent !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important">
                  <td>
                     <?php echo $no++ ?>.
                  </td>
                  <td>
                     <h3 style="color:#000; font-size: 18px; text-transform: uppercase; text-align:center;"><?php echo $row["id_detail_transaksi"];?></h3>
                  </td>

                  <?php
                  @$id_produk=$row["id_produk"]; 
                  $query_lihat_produk = mysqli_fetch_array(mysqli_query($db_koneksi,"select * from tbl_produk where id_produk='$id_produk'"));
                  ?>
                  <td class="image-prod">
                     <div class="img" style="">
                        <img src="image_view.php?id_produk=<?php echo $query_lihat_produk['id_produk']; ?>" alt="" style="display: block; width: 100px; height: 100px; margin: 0 auto;">
                     </div>
                  </td>

                  <td>
                     <h3 style="color:#000; font-size: 18px; text-transform: uppercase; text-align:left;"><?php echo $query_lihat_produk["nama_produk"];?></h3>
                  </td>

                  <td>
                     <h3 style="color:#000; font-size: 18px; text-align:center;"><?php echo $query_lihat_produk["kategori_produk"];?></h3>
                  </td>

                  <td>
                     <h3 style="color:#000; font-size: 18px; text-align:center;"><?php echo $query_lihat_produk["harga_produk"];?></h3>
                  </td>
                  
                  <td>
                     <h3 style="color:#000; font-size: 18px; text-transform: uppercase; text-align:center;"><?php echo $row["jumlah"];?></h3>
                  </td>

                  <td style="color: #000;">
                     <?php 
                     $subtotal = $query_lihat_produk["harga_produk"] * $row["jumlah"];
                     $subtotalsum[] = $query_lihat_produk["harga_produk"] * $row["jumlah"]; 
                     ?>
                     <h3 style="color:green; font-size: 18px; text-transform: uppercase; text-align:center;"><?php echo $subtotal; ?></h3>
                  </td>
               </tr>
            </tbody>
            <?php } ?>
            
            
         </table>
      </div>
   </div>
</div>