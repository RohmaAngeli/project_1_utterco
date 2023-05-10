<div class="container bootstrap snippets bootdey"style="margin-top:8%; margin-bottom:8%;">
  <div class="container" data-aos="fade-up">
<br><br>
      <div class="section-title">
         <h2>Profile</h2>
         <p>Halaman Profil Anda</p>
      </div>
      <?php 
      include "koneksi.php";
      if(isset($_GET['page'])){
         @$aksi = $_GET['aksi'];
         switch ($aksi){
               //Menampilkan data profil
               default:
      // @$id=$_GET['id']; 
      $id_autor = $_SESSION["username"];
      $query="SELECT * FROM tbl_user WHERE username = '$id_autor'";
      $hasil=mysqli_query($db_koneksi, $query); 
      
      while($data=mysqli_fetch_array($hasil)){
      ?>
      
      <div class="row">
         <div class="col-4" style="padding:2% 0 5% 5%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="230px" height="230px" style="background-color:#ffffff; border-radius:50%; box-shadow: 0 0 30px 5px #cda45e; border: 1px solid #000000; color:#000;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
               <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
               <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg> 
         </div>

         <!-- <div class="col-4" style="padding:2% 0 5% 5%;">
            <img src="image_profile_view.php?username=" alt="" width="230px" height="230px" style="background-color:#ffffff; border-radius:50%; box-shadow: 0 0 30px 5px #cda45e; border: 1px solid #000000; color:#000;">               
         </div> -->

         <div class="col-8">
            <div class="main" style="margin-top:4%; background-color:#cda45e; padding:40px; border-radius:20px; border: 3px solid #000000">
               <div class="row">
                  <div class="col" style="color:#000; background-color:#fff; padding:6px; border: 2px solid black; text-align:center; border-radius:5px; margin-right:8%; margin-left:5%;"><?php echo $_SESSION['username']?></div>
                  <div class="col" style="color:#000; background-color:#fff; padding:6px; border: 2px solid black; text-align:center; border-radius:5px; margin-right:5%;"><?php echo $data['nama_user']?></div>
               </div>
               <div class="text" style="color:#000; text-align:center; margin-top:3%; margin-bottom:3%; font-weight:bold;">"Money can't buy happiness? Lie! Money buys coffee, coffee makes you happy!"</div>
	            <div class="row">
                  <div class="col"><center><button style="width:100%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'">Edit User</button></center></div>
                  <div class="col"><center><a href="?page=profil&aksi=logout&username=<?php echo $data['username']; ?>"><button style="width:100%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'">Logout</button></a></center></div>
               </div>
            </div>
         </div>
      </div>

      <div>
         <div>
            <div class="alert alert-info alert-dismissable" style="">
               <a class="panel-close close" data-dismiss="alert">×</a> 
               <i class="fa fa-coffee"></i>
               <strong>Info</strong> Ini adalah halaman profil anda yang akan digunaan sebagai informasi pelaku transaksi di UTTER.CO
            </div>
         </div>

         <div>
            <div class="main" style="background-color:#cda45e; padding:40px; border-radius:20px; border: 3px solid #000000">
               <table align='center'>
                  <tr style="color:black; font-weight:bold;">
                     <td>Nomor Telepon</td>
                     <td width="20%" align='center'>:</td>
                     <td><div style="width:500px; color:#000; background-color:#fff; padding:6px; border: 1px solid black; border-radius:5px; font-size: 14px; margin-bottom:2%;"><?php echo $data['no_tlp']?></div></td>
                  </tr>
                  <tr style="color:black; font-weight:bold;">
                     <td>Alamat</td>
                     <td align='center'>:</td>
                     <td><div style="color:#000; background-color:#fff; padding:6px; border: 1px solid black; border-radius:5px; font-size: 14px; margin-bottom:2%;"><?php echo $data['alamat']?></div></td>
                  </tr>
                  <tr style="color:black; font-weight:bold;">
                     <td>Kode Pos</td>
                     <td align='center'>:</td>
                     <td><div style="color:#000; background-color:#fff; padding:6px; border: 1px solid black; border-radius:5px; font-size: 14px; margin-bottom:2%;"><?php echo $data['kode_pos']?></div></td>
                  </tr>
                  <tr style="color:black; font-weight:bold;">
                     <td>Kelurahan</td>
                     <td align='center'>:</td>
                     <td><div style="color:#000; background-color:#fff; padding:6px; border: 1px solid black; border-radius:5px; font-size: 14px; margin-bottom:2%;"><?php echo $data['kelurahan']?></div></td>
                  </tr>
                  <tr style="color:black; font-weight:bold;">
                     <td>Kecamatan</td>
                     <td align='center'>:</td>
                     <td><div style="color:#000; background-color:#fff; padding:6px; border: 1px solid black; border-radius:5px; font-size: 14px; margin-bottom:2%;"><?php echo $data['kecamatan']?></div></td>
                  </tr>
                  <tr style="color:black; font-weight:bold;">
                     <td>Kota</td>
                     <td align='center'>:</td>
                     <td><div style="color:#000; background-color:#fff; padding:6px; border: 1px solid black; border-radius:5px; font-size: 14px; margin-bottom:2%;"><?php echo $data['kota']?></div></td>
                  </tr>
                  <tr style="color:black; font-weight:bold;">
                     <td>Jenis Kelamin</td>
                     <td align='center'>:</td>
                     <td><div style="color:#000; background-color:#fff; padding:6px; border: 1px solid black; border-radius:5px; font-size: 14px; margin-bottom:2%;"><?php echo $data['jenis_kelamin']?></div></td>
                  </tr>
               </table>
	            <center><a href="?page=profil&aksi=edit_info&username=<?php echo $data['username']; ?>"><button style="width:70%; margin-top:3%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold;" onMouseOver="this.style.backgroundColor='#AB3E16'" onMouseOut="this.style.backgroundColor='#48120E'">Edit Keterangan</button></a></center>
            </div>
         </div>
      
      <?php
    }
   break;
   case "edit_user":
      include "page_user/form_edit_user.php";
      break;
   case "edit_info":
      include "page_user/form_edit_info.php";
      break;
   case "logout":
      include "logout.php";
      break;
   }
}else{
      include "page_user/profil.php";
   }
   ?>
      </div>
   </div>
</div>

