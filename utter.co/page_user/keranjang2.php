<head>
	<script src="main.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
    include('koneksi.php');
    @$id=$row['id_produk']; 
    $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
    $hasil=mysqli_query($db_koneksi, $query_lihat); 
    $data=mysqli_fetch_array($hasil);
    ?>
<section class="ftco-section ftco-cart" style="margin-top:8%;" >
<div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Cart</h2>
      <p>Halaman Keranjang</p>
    </div>
	<?php
	@$id=$_GET['id']; 
    $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
    $hasil=mysqli_query($db_koneksi, $query_lihat); 
    $data_cart=mysqli_fetch_array($hasil);
	if(!empty($data_cart["username"] = $_SESSION["username"])){
	
    $username=$_SESSION['username'];
    $query = mysqli_query($db_koneksi,"SELECT * FROM tbl_keranjang WHERE username='$username'");
    ?>
	
		<div class="row">
    		<div class="col-md-12 ftco-animate">
    			<div class="cart-list" style="overflow-x: scroll;">
	  				<table class="table" style="min-width: 1000px !important;width: 100%; text-align: center;">
					    <thead class="thead-primary" style="background: #c49b63;">
					      <tr class="text-center" style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">
					        <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">&nbsp;</th>
					        <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">Gambar</th>
					        <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">Produk</th>
					        <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">Kategori</th>
					        <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">Harga</th>
					        <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">Jumlah</th>
					        <th style="padding: 20px 10px; color: #fff !important; border: 1px solid transparent !important;">Total</th>
					      </tr>
					    </thead>
						<?php 
        while($row = mysqli_fetch_array($query))
        {

        ?>
					    <tbody>
					      <tr class="text-center" style="text-align: center !important; vertical-align: middle; border: 1px solid transparent !important; border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important">

					        <td class="product-remove" style="padding-top:5%;padding-bottom:5%;"><a href="#" style="border: 1px solid rgba(255, 255, 255, 0.1); padding: 5px; border-radius:10px;"><span class="icon-close"></span><b>×</b></a></td>

					        <td class="image-prod">
                                  <div class="img" style="">
                                      <img src="image_view.php?id_produk=<?php echo $row['id_produk']; ?> alt="" style="display: block; width: 100px; height: 100px; margin: 0 auto;">
                                  </div></td>
                            <?php
							@$id=$row['id_produk']; 
    						$query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
    						$hasil=mysqli_query($db_koneksi, $query_lihat); 
    						$data=mysqli_fetch_array($hasil);
							// $jumlah=
							// $subtotal = $data["harga_produk"] * $val["jumlah"];
							?>
							<td class="product-name" style="width: 30%;">
					        	<h3 style="color:#fff; font-size: 18px; text-transform: uppercase;"><?php echo $data["nama_produk"];?></h3>
					        </td>

							
                              <td>
					        	<h3 style="color:#fff; font-size: 18px;"><?php echo $data["kategori_produk"];?></h3>
					        </td>
					        <td class="price" style="color: #fff;"><?php echo $data["harga_produk"];?></td>
					        <td class="quantity">
                    <center>
											<form action="" method="post" name="autoSumForm">
					        	<div>
											<input type="number" name="harga" value="<?php echo $data['harga_produk'];?>" style="width:50%; font-color:black;" onFocus="startCalc();" onBlur="stopCalc();">
				             	<input type="number" name="jumlah" value="1" min="1"max="1000" style="width:50%; font-color:black;" onFocus="startCalc();" onBlur="stopCalc();">
											<input type="text" name="total" value="0" style="width:50%; font-color:black;" readonly>
				          	</div>
                                  </center>
				            </td>
					        
					        <td class="total" style="color: #fff;">
									<input type="text" name="total" value="0" style="width:50%; font-color:black;" readonly></td>
									</form>
					      </tr><!-- END TR-->
					    </tbody>
						<?php
		}
		?>
						</table>
				  </div>
    		</div>
    	</div>
    	<div class="row justify-content-end">
    		<div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
    			<div class="cart-total mb-3" style="width: 100%; display: block; border: 1px solid rgba(255, 255, 255, 0.1); padding: 20px;">
    				<h3 style="font-size: 20px; text-transform: uppercase;">Total  Keranjang</h3>
    				<p class="d-flex total-price" style="width: 100%; display: block;">
    					<span style="display: block; width: 50%; text-transform: uppercase;">Total</span>
    					<span style="display: block; width: 50%; text-transform: uppercase; color: #c49b63;"><?php echo $grandtotal?></span>
    				</p>
    			</div>
    			<p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4" style="width:100%; background-color:#c49b63; border-color:#fff;"><b>Checkout</b></a></p>
    		</div>
              <div>
                  <p class="text-center"><a href="checkout.html" class="btn btn-primary py-3 px-4"><b> Checkout</b></a></p>
              </div>
    		</div>
		
		</div>
			<?php
	}else{
	echo "Belum ada Produk di Shopping Cart";
	}
	?>
	</div>
	</div>
	

</section>

