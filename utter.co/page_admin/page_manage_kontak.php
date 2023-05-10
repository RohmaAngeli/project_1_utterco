<div class="container bootstrap snippets bootdey"style="margin-top:12%; margin-bottom:8%;">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Manage Contact Us</h2>
      <p>Halaman Manage Contact Us</p>
    </div>
      <?php 
         include('koneksi.php');
         if(isset($_GET['page'])){
         @$aksi = $_GET['aksi'];
         switch ($aksi){
            //Menampilkan data kelola
            default:
               $query_lihat="SELECT * FROM tbl_kontak"; 
               $hasil=mysqli_query($db_koneksi, $query_lihat); 
               $no=1;
         ?>

    <div>
      <div>
        <!-- <form action="" method="post" name="autoSumForm"> -->
          <table class="table" style="min-width: 1000px !important;width: 100%; text-align: center;">
            <thead class="thead-primary" style="background: #c49b63;">
              <tr class="text-center" style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">No.</th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>ID</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Email</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Subjek</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Pesan</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Opsi</b></th>
              </tr>
            </thead>
            <?php 
            $no = 1;
            while($data = mysqli_fetch_array($hasil))
            {
                ?>
              <!-- <form action="" method="post" name="autoSumForm"> -->
            <tbody>
              <tr class="text-center" style="text-align: center !important; vertical-align: middle; border: 1px solid transparent !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important">
                <td class="product-remove" style="padding-top:5%;padding-bottom:5%;"><a href="#" style="border: 1px solid rgba(255, 255, 255, 0.1); padding: 5px; border-radius:10px;"><?php echo $no++ ?>.</a>
                </td>

                <td>
                  <h3 style="color:#fff; font-size: 18px; text-align:left;"><?php echo $data["id_kontak"];?></h3>
                </td>

                <?php
               //  @$id=$row['id_produk']; 
               //    $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
               //    $hasil=mysqli_query($db_koneksi, $query_lihat); 
               //    $data=mysqli_fetch_array($hasil);
                ?>
                
                <td>
                  <h3 style="color:#fff; font-size: 18px; text-align:left;"><?php echo $data["username"];?></h3>
                </td>

                <td>
                  <h3 style="color:#fff; font-size: 18px; text-align:left;"><?php echo $data["subjek"];?></h3>
                </td>

                <td class="product-name" style="width: 30%;">
                  <h3 style="color:#fff; font-size: 18px; text-transform: uppercase; text-align:left;"><?php echo $data["pesan"];?></h3>
                </td>

                  <td>
                  <!-- <ul class="list-inline m-0"> -->
                  <ul class="list-inline">
                    
                    <li>
                      <a title="Delete" href="?page=manage_kontak&aksi=delete&id_kontak=<?php echo $data['id_kontak']; ?>"  onclick="return confirm('Apakah anda yakin menghapus data <?php echo $data['id_kontak']; ?>?')">
                        <div style="background-color:green;" onMouseOver="this.style.backgroundColor='lightgreen'" onMouseOut="this.style.backgroundColor='green'">
                          <center>
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin:9;" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16" color="#fff" style="padding:4%;">
                            <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
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
      break; 
      case "delete":
         include "page_admin/delete_kontak.php";
         break;
      }
    }else{
      include "?page=manage_menu";
      }
   ?> 
  </div>
</div>

