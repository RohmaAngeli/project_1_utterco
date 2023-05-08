<div>
  <?php
    include('koneksi.php');
    if(isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            default:
    $query = mysqli_query($db_koneksi,"SELECT * FROM tbl_produk");
    ?>
        <?php 
            while($row = mysqli_fetch_array($query))
            {
            ?>
        
          <div class="row menu-container" data-aos="fade-up" data-aos-delay="200" align='center'>

          <div class="col-lg-6 menu-item filter-starters"> <!-- milko -->
            <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?>" class="menu-img" alt="">
            <div class="menu-content">
              <a href="?page=menu&aksi=view&id=<?php echo $row['id_produk']; ?>"><?php echo $row['nama_produk']; ?></a><span><?php echo $row['harga_produk']; ?></span>
            </div>
            <div class="menu-ingredients" align="left">
              <?php echo $row['kategori_produk']; ?>
            </div>
          </div>
      </div>
      
        <?php
            }
    break;
    case "view":
        include "view_menu.php";
        break;
    case "like":
        include "page_user/like.php";
        break;
    }
}else{
        include "page_guest/berandaguest.php";
    }
    ?>

</div>
<!-- 
<div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-6 menu-item filter-starters"> 
        <img src="assets\img\menu\kopi\milkofrosty.png" class="menu-img" alt="">
        <div class="menu-content">
            <a href="#">Frosty Vanilla</a><span>$5.95</span>
        </div>
        <div class="menu-ingredients">
            Lorem, deren, trataro, filede, nerada
        </div>
    </div>
</div> -->

