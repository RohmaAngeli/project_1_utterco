<?php
    include('koneksi.php');
    @$id=$_GET['id']; 
    $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
    $hasil=mysqli_query($db_koneksi, $query_lihat); 
    $data=mysqli_fetch_array($hasil);
    ?>

    <div>
        <div class="tab-pane active" id="frosty.png">
			<img src="image_view.php?id_produk=<?php echo $data['id_produk']; ?>" alt=""class="img-fluid">
		</div>
        nama: <?php echo $data['nama_produk']; ?>
        kategori: <?php echo $data['kategori_produk']; ?>
    </div>