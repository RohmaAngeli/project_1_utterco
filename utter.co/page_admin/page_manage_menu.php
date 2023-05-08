<div class="container bootstrap snippets bootdey"style="margin-top:12%; margin-bottom:8%;">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Manage Product</h2>
      <p>Halaman Manage Produk</p>
    </div>
      <?php 
         include('koneksi.php');
         if(isset($_GET['page'])){
         @$aksi = $_GET['aksi'];
         switch ($aksi){
            //Menampilkan data kelola
            default:
               $query_lihat="SELECT * FROM tbl_produk"; 
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
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Gambar</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Produk</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Deskripsi</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Kategori</b></th>
                <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;"><b>Harga</b></th>
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
                  <h3 style="color:#fff; font-size: 18px;"><?php echo $data["id_produk"];?></h3>
                </td>

                <td class="image-prod">
                  <div class="img" style="">
                      <img src="image_view.php?id_produk=<?php echo $data['id_produk']; ?>" style="display: block; width: 100px; height: 100px; margin: 0 auto;">
                  </div>
                </td>
                <?php
               //  @$id=$row['id_produk']; 
               //    $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
               //    $hasil=mysqli_query($db_koneksi, $query_lihat); 
               //    $data=mysqli_fetch_array($hasil);
                ?>
                
                <td class="product-name" style="width: 30%;">
                  <h3 style="color:#fff; font-size: 18px; text-transform: uppercase; text-align:left;"><?php echo $data["nama_produk"];?></h3>
                </td>

                <td>
                  <h3 style="color:#fff; font-size: 18px; text-align:left;"><?php echo $data["deskripsi_produk"];?></h3>
                </td>

                <td>
                  <h3 style="color:#fff; font-size: 18px;"><?php echo $data["kategori_produk"];?></h3>
                </td>

                <td class="price" style="color: #fff;"><?php echo $data["harga_produk"];?></td>

                  <td>
                  <!-- <ul class="list-inline m-0"> -->
                  <ul class="list-inline">
                    <li>
                      <a href="?page=manage_menu&aksi=create" title="Create">
                        <div style="background-color:green;" onMouseOver="this.style.backgroundColor='lightgreen'" onMouseOut="this.style.backgroundColor='green'">
                          <center>
                            <svg xmlns="http://www.w3.org/2000/svg" style="margin:9;" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16" color="#fff" style="padding:4%;">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
                            </svg>
                          </center>
                        </div>
                      </a>
                    </li>

                    <li>
                      <a href="" title="Update">
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

                    <li>
                      <a title="Delete" href="?page=manage_menu&aksi=delete&id_produk=<?php echo $data['id_produk']; ?>"  onclick="return confirm('Apakah anda yakin menghapus data <?php echo $data['nama_produk']; ?>?')">
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
      case "create":
         include "page_admin/form_tambahmenu.php";
         break;
      case "update":
         include "page_admin/update_menu.php";
         break;
      case "delete":
         include "page_admin/delete_menu.php";
         break;
      }
    }else{
      include "?page=manage_menu";
      }
   ?> 
  </div>
</div>

