<div class="container bootstrap snippets bootdey"style="margin-top:12%; margin-bottom:8%;">
   <div class="container" data-aos="fade-up">
      <div class="section-title">
         <h2>Transaction history</h2>
         <p>Halaman Histori Transaksi</p>
      </div>
   <?php 
   include "koneksi.php";
      if(isset($_GET['page'])){
         @$aksi = $_GET['aksi'];
         switch ($aksi){
               //Menampilkan data profil
               default: ?>
      <table class="table" style="min-width: 1000px !important;width: 100%; text-align: center;">
            <thead class="thead-primary" style="background: #c49b63;">
              <tr class="text-center" style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>No.</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>ID Transaksi</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Tanggal Transaksi</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Total Harga</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Alamat Pengiriman</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Opsi</b></th>
              </tr>
            </thead>
            <?php
            @$id=$row['id_produk']; 
            $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
            $hasil=mysqli_query($db_koneksi, $query_lihat); 
            $data=mysqli_fetch_array($hasil);

            @$iduser=$_SESSION['username']; 
            $query_lihat="SELECT * FROM header_transaksi WHERE username='$iduser';"; 
            $query=mysqli_query($db_koneksi, $query_lihat); 

            $no = 1;
            while($row = mysqli_fetch_array($query)){
            ?>

            <tbody>
               <tr class="text-center" style="text-align: center !important; vertical-align: middle; border: 1px solid transparent !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important">
                  <td>
                     <?php echo $no++ ?>.
                  </td>
                  <td>
                     <h3 style="color:#fff; font-size: 18px; text-transform: uppercase; text-align:center;"><?php echo $row["id_transaksi"];?></h3>
                  </td>

                  <td>
                     <h3 style="color:#fff; font-size: 18px; text-transform: uppercase; text-align:left;"><?php echo $row["tanggal_transaksi"];?></h3>
                  </td>

                  <td>
                     <h3 style="color:#fff; font-size: 18px; text-transform: uppercase; text-align:center;"><?php echo $row["total_harga"];?></h3>
                  </td>

                  <td>
                     <h3 style="color:#fff; font-size: 18px; text-transform: uppercase; text-align:left;"><?php echo $row["alamat_pengiriman"];?></h3>
                  </td>

                  <td>
                     <h3 style="color:#fff; font-size: 18px; text-align:left;"><a href="?page=histori&aksi=detail&id_transaksi=<?php echo $row["id_transaksi"];?>">Lihat Detail</a></h3>
                  </td>
               </tr>
            
            <?php } ?>
            </tbody>
         </table>
      <?php
        break; 
      case "detail":
        include "page_user/detail_transaksi.php";
        break;
      }
    }else{
      include "?page=histori";
      } ?>

   </div>
</div>