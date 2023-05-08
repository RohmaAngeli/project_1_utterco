<center>
<div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <?php
    include('koneksi.php');
    $query = mysqli_query($db_koneksi,"SELECT * FROM tbl_produk WHERE kategori_produk='Milko'");
    ?>
        <?php 
            while($row = mysqli_fetch_array($query))
            {
            ?>
        
          <div class="col-lg-6 menu-item filter-starters"> <!-- milko -->
            <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $row['nama_produk']; ?></a><span><?php echo $row['harga_produk']; ?></span>
            </div>
            <div class="menu-ingredients" align="left">
              <?php echo $row['kategori_produk']; ?>
            </div>
          </div>
        
        <?php
            }
            ?>
</div>
</center>
