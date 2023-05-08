<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <title>Utterco</title> -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link href="assets/img/utteritem.png" rel="icon">
  	<link href="assets/img/utteritem.png" rel="apple-touch-icon">
	<style>
		/*****************globals*************/
		body {
		font-family: 'poppins';
		/* overflow-x: hidden; */
		background: #0c0b09;
		padding-top:8%;
		padding-bottom:8%;
		}

		img {
		max-width: 100%;
		background: #0c0b09; }

		.preview {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-webkit-flex-direction: column;
			-ms-flex-direction: column;
				flex-direction: column; }
		@media screen and (max-width: 996px) {
			.preview {
			margin-bottom: 20px; 
			background: #0c0b09;} }

		.preview-pic {
		-webkit-box-flex: 1;
		-webkit-flex-grow: 1;
			-ms-flex-positive: 1;
				flex-grow: 1; 
				background: #0c0b09;}

		.preview-thumbnail.nav-tabs {
		border: none;
		margin-top: 15px; }
		.preview-thumbnail.nav-tabs li {
			width: 18%;
			margin-right: 2.5%; }
			.preview-thumbnail.nav-tabs li img {
			max-width: 100%;
			display: block; }
			.preview-thumbnail.nav-tabs li a {
			padding: 0;
			margin: 0; }
			.preview-thumbnail.nav-tabs li:last-of-type {
			margin-right: 0; }

		.tab-content {
		overflow: hidden; }
		.tab-content img {
			width: 100%;
			-webkit-animation-name: opacity;
					animation-name: opacity;
			-webkit-animation-duration: .3s;
					animation-duration: .3s; }

		.card {
		margin-top: 40px;
		background: #0c0b09;
		padding: 3em;
		line-height: 1.5em; 
		}

		@media screen and (min-width: 997px) {
		.wrapper {
			display: -webkit-box;
			display: -webkit-flex;
			display: -ms-flexbox;
			display: flex; } }

		.details {
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		-webkit-flex-direction: column;
			-ms-flex-direction: column;
				flex-direction: column; 
				color: #fff;
			;
			}

		.colors {
		-webkit-box-flex: 1;
		-webkit-flex-grow: 1;
			-ms-flex-positive: 1;
				flex-grow: 1; }

		.product-title, .price, .sizes, .colors {
		text-transform: UPPERCASE;
		font-weight: bold;
		}

		.checked, .price span {
		color: #b36800; }


		.product-title, .rating, .product-description, .price, .vote, .sizes {
		margin-bottom: 15px; }

		.product-title {
		margin-top: 0; }

		.size {
		margin-right: 10px; }
		.size:first-of-type {
			margin-left: 40px;
		background: #0c0b09;
		font-style: normal; 
		color: #fff}


		.color {
		display: inline-block;
		vertical-align: middle;
		margin-right: 10px;
		height: 2em;
		width: 2em;
		border-radius: 2px; }
		.color:first-of-type {
			margin-left: 20px; }

		.add-to-cart, .like {
		background: #ff9f1a;
		padding: 1.2em 1.5em;
		border: none;
		text-transform: UPPERCASE;
		font-weight: bold;
		color: #000;
		-webkit-transition: background .3s ease;
				transition: background .3s ease; }
		.add-to-cart:hover, .like:hover {
			background: #b36800;
			color: #000; }

		.not-available {
		text-align: center;
		line-height: 2em; }
		.not-available:before {
			font-family: fontawesome;
			content: "\f00d";
			color: #fff; }

		.size, .like {
		background: #000; 
		padding: 0%;
		border: none;
		text-transform: UPPERCASE;
		font-weight: bold;
		color: #fff;
		-webkit-transition: background .3s ease;
				transition: background .3s ease;}
				.size:hover, .like:hover {
					background: #0c0b09;
					color: #fff;
		}

		.size {
		background: #000; }

		.size {
		background: #000; }

		.tooltip-inner {
		padding: 1.3em; }

		@-webkit-keyframes opacity {
		0% {
			opacity: 0;
			-webkit-transform: scale(3);
					transform: scale(3); }
		100% {
			opacity: 1;
			-webkit-transform: scale(1);
					transform: scale(1); } }

		@keyframes opacity {
		0% {
			opacity: 0;
			-webkit-transform: scale(3);
					transform: scale(3); }
		100% {
			opacity: 1;
			-webkit-transform: scale(1);
					transform: scale(1); } }

		/*# sourceMappingURL=style.css.map */
		 .qty .count {
    color: #000;
    display: inline-block;
    vertical-align: top;
    font-size: 25px;
    font-weight: 700;
    line-height: 30px;
    padding: 0 2px;
    min-width: 35px;
    text-align: center;
  }
  .qty .plus {
      cursor: pointer;
      display: inline-block;
      vertical-align: top;
      color: white;
      width: 30px;
      height: 30px;
      font: 30px/1 Arial,sans-serif;
      text-align: center;
      border-radius: 50%;
      }
  .qty .minus {
      cursor: pointer;
      display: inline-block;
      vertical-align: top;
      color: white;
      width: 30px;
      height: 30px;
      font: 30px/1 Arial,sans-serif;
      text-align: center;
      border-radius: 50%;
      background-clip: padding-box;
  }
  div {
      text-align: center;
  }
  .minus:hover{
      background-color: #717fe0 !important;
  }
  .plus:hover{
      background-color: #717fe0 !important;
  }
  /*Prevent text selection*/
  span{
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
  }
  input{  
      border: 0;
      width: 2%;
  }
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
  }
  input:disabled{
      background-color:white;
  }
	</style>

  </head>

<body>
<?php
    include('koneksi.php');
    @$id=$_GET['id']; 
    $query_lihat="SELECT * FROM tbl_produk WHERE id_produk='$id';"; 
    $hasil=mysqli_query($db_koneksi, $query_lihat); 
    $data=mysqli_fetch_array($hasil);

	// @$id_autor = $_SESSION["username"];
    // $query="SELECT * FROM tbl_user WHERE username = '$id_autor'";
    // $hasil=mysqli_query($db_koneksi, $query); 
    // $user=mysqli_fetch_array($hasil);
    
if(isset($_GET['page'])){
        @$aksi = $_GET['aksi'];
        switch ($aksi){
            default:
			?>
<div class="container" data-aos="fade-up" data-aos-delay="200">
	<div class="card" style="border:1px solid white;">
		<div class="container-fliud">
			<div class="wrapper row">
				<div class="preview col-md-6" style="width:45%;" >
					<div class="preview-pic tab-content">
					  <div class="tab-pane active" id="frosty.png">
						<img src="image_view.php?id_produk=<?php echo $data['id_produk']; ?>" alt="" class="img-fluid" style="width:50%; height:100%;">
						</div>
					</div>
				</div>
				<div class="details col-md-6" align='left' style="text-align:left;">
					<h3 class="product-title" style="color:orange;"><?php echo $data['nama_produk']; ?></h3>
                    <p> <?php echo $data['kategori_produk']; ?> </p>
					<div class="rating">
						<div class="stars" style="align-item:left;">
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
						</div>
					</div>
					<p class="product-description"><?php echo $data['deskripsi_produk']; ?></p>
					<h4 class="price">harga: <span><?php echo $data['harga_produk']; ?></span></h4>
					<!-- <h5 class="sizes">Sizes:
						<span class="size" data-toggle="tooltip" title="small">S</span>
						<span class="size" data-toggle="tooltip">M</span>
						<span class="size" data-toggle="tooltip">L</span>
					</h5>
                    <div class="size" role="size" aria-label="for size" font-weight: bold; font-color: #000: > Sizes:
						<button type="button" class="btn btn-secondary" title="small">S</button>
						<button type="button" class="btn btn-secondary" title="medium">M</button>
						<button type="button" class="btn btn-secondary" title="large">L</button>
					</div> -->
			
<form action="" method="post" name="autoSumForm">
    <input style="background-color:#c7a59b; height:30px; width:200px; border-radius:10px; padding-left:20px; font-size:16px;" type="hidden" name="username" value="<?php echo $_SESSION['username'] ?>">
    <input style="background-color:#c7a59b; height:30px; width:200px; border-radius:10px; padding-left:20px; font-size:16px;" type="hidden" name="id_produk" value="<?php echo $data['id_produk']; ?>">

		<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
					<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
					<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
					<!-- <div class="center">
						<center>
						<div class="input-group" style="width:40%;">
							<span class="input-group-btn">
									<button type="button" class="btn btn-danger btn-number"  data-type="minus" data-field="quant[2]" style="margin-right:50%;">
										<span class="glyphicon glyphicon-minus"></span>
									</button>
							</span>
							<input type="text" name="jumlah_produk" class="form-control input-number" value="1" min="1" max="1000"  style="text-align:center;">
							<span class="input-group-btn">
									<button type="button" class="btn btn-success btn-number" data-type="plus" data-field="quant[2]">
											<span class="glyphicon glyphicon-plus"></span>
									</button>
							</span>
						</div>
						</center>	
					</div> -->
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="qty mt-5">
  <span class="minus bg-dark" style="color:orange;">-</span>
  <input type="number" class="count" name="qty" value="1" style="border-radius:10%; width:20%;" max="1000" onFocus="startCalc();" onBlur="stopCalc();">
  <span class="plus bg-dark" style="color:orange;">+</span>

</div>

<script>
	$(document).ready(function(){
   //  $('.count').prop('disabled', true);
		$(document).on('click','.plus',function(){
		$('.count').val(parseInt($('.count').val()) + 1 );
		});
    	$(document).on('click','.minus',function(){
			$('.count').val(parseInt($('.count').val()) - 1 );
				if ($('.count').val() == 0) {
				$('.count').val(1);
			}
	    	});
	// one = document.autoSumForm.harga.value;
	// two = document.autoSumForm.jumlah.value;
	// document.autoSumForm.total.value = (one * 1) * (two * 1);
  });
</script>

<!-- <div>
	<input style="width:170px;" type='number' name='harga' value='' onFocus="startCalc();" onBlur="stopCalc();" />
	<input style="width:170px;" type="number" name='jumlah' onFocus="startCalc();" onBlur="stopCalc();" />
   <input type="number" class="count" name="jumlah" value="1" style="border-radius:10%; width:20%;" max="1000"  readonly>
	<input style="width:170px;" type='number' name="diskon" value="0" readonly onFocus="startCalc();" onBlur="stopCalc();"  />
	<input style="width:170px;" type="text" name="total" value="0" readonly>
</div> -->

<!-- <script>
	$(document).ready(function(){
// function startCalc(){
// interval = setInterval("calc()",1);}
// function calc(){
one = document.autoSumForm.harga.value;
two = document.autoSumForm.jumlah.value;
three = document.autoSumForm.diskon.value;
document.autoSumForm.total.value = (one * 1) * (two * 1) - (three * 1);
  });

// function stopCalc(){
// clearInterval(interval);}
</script> -->

	<center><input type="submit" value="tambah ke keranjang" name="submit" style="width:82%; margin-top:10%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'"></center>
</form>
					
					<!-- <div class="action">
						<a href="?page=menu&aksi=view&aksi=tambah_keranjang&id=<?php echo $data['id_produk']; ?>"><button class="add-to-cart btn btn-default" type="button" href=""> tambah ke keranjang</a></button>
					</div>
					<div class="action">
						<a href="?page=menu&aksi=view&aksi?do_tambah_cart_copy.php?id=<?php echo $data['id_produk']; ?>"><button class="add-to-cart btn btn-default" type="button" href=""> tambah ke keranjang</a></button>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <script>
	//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
</script> -->


<?php
    break;
    case "tambah_keranjang":
        include "do_tambah_cart_copy.php";
		
        break;
    }
}
// else{
//         include "page_guest/berandaguest.php";
//     }
    ?>

	<?php
// @$username=$_POST['username'];
// @$id_produk=$_POST['id_produk'];
// @$jumlah_produk=$_POST['qty'];
@$submit=$_POST['submit'];



if ($submit){
@$username=$_POST['username'];
@$id_produk=$_POST['id_produk'];
@$jumlah_produk=$_POST['qty'];

@$iduser=$_SESSION['username'];

$query_see="SELECT * FROM tbl_keranjang WHERE username='$iduser'AND id_produk='$id_produk'"; 
$hsil=mysqli_query($db_koneksi, $query_see); 
$data_dup=mysqli_num_rows($hsil);



// $cek_cart=mysql_num_rows(mysql1_query("SELECT id_produk FROM tbl_keranjang WHERE username='$iduser'AND id_produk='$id_produk'"));
if($data_dup > 0) {
	// $_SESSION['pesan']="oops duplikat data!!";
	echo "<script> alert('Data duplikat! Produk ini sudah ditambahkan ke halaman keranjang!');</script>";
}else{
	$query_create="INSERT INTO tbl_keranjang VALUES ('', '$id_produk', '$username', '$jumlah_produk') ";
	$hasil=mysqli_query($db_koneksi, $query_create) or die ("ERROR TAMBAHKAN KE KERANJANG");
// } else if ($hasil){
	echo "<script> alert('Produk telah tertambah di halaman keranjang');</script>";
// }
// 	// header("location")

// $query_create="INSERT INTO tbl_keranjang VALUES ('', '$id_produk', '$username', '$jumlah_produk') ";
// $hasil=mysqli_query($db_koneksi, $query_create) or die ("ERROR TAMBAHKAN KE KERANJANG");



// // $query_lihat_keranjang="SELECT * FROM tbl_keranjang WHERE username='$username'";
// // $data_sama=mysqli_fetch_array($query_lihat_keranjang, MYSQLI_NUM);
   //  if ($hasil) {
	// 		echo "<script> alert('data tertambah wes');</script>";
	// 	}



// 		// else {
//     //jika berhasil update kembali ke halaman profil 
// 		// $query_create="INSERT INTO tbl_keranjang VALUES ('', '$id_produk', '$username', '$jumlah_produk') ";
// 		// $hasil=mysqli_query($db_koneksi, $query_create) or die ("ERROR TAMBAHKAN KE KERANJANG");

//     // echo "<script> alert('produk telah tertambah di halaman Keranjang!');</script>";}
//     // $id = $_GET["id"];

//     // $sql = "SELECT * FROM tbl_produk WHERE id_produk=".$id;
//     // $query = mysqli_query($db_koneksi, $sql);
//     // $hasil = mysqli_fetch_object($query);

//     // $_SESSION["cart"][$id] = [
//     //     "nama" => $hasil->nama_produk, 
//     //     "kategori" => $hasil->kategori_produk,
//     //     "harga" => $hasil->harga_produk,
//     //     // "jumlah" => 1
//     // ];

//     // // header("location:page_user/keranjang.php");
// 	// echo "<script> alert('produk telah tertambah di halaman Keranjang!');</script>";
	}
}
?>
</body>