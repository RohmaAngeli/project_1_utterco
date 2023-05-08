<?php
include "koneksi.php";
$id_autor = $_SESSION["username"];
    $query="SELECT * FROM tbl_user WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query); 
    
    while($data=mysqli_fetch_array($hasil)){
        ?>
<div class="container bootstrap snippets bootdey"style="margin-top:8%; margin-bottom:8%;">
  <div class="container" data-aos="fade-up">
<br><br>
    <div class="section-title">
      <h2>Profile</h2>
      <p>Halaman Profil Anda</p>
    </div>

    <!-- <link href="assets/css/styleedit.css" rel="stylesheet"> -->
    </div>
    <div class="alert alert-info alert-dismissable" style="width:87%; margin-left:6%;" data-aos="fade-left" >
      <a class="panel-close close" data-dismiss="alert">×</a> 
      <i class="fa fa-coffee"></i>
      <strong>Info</strong> Perubahan akan disimpan pada profil anda
    </div>

    <div class="row" style="margin-left:5%;">
      
        <!-- left column -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="text-center">
          <img src="assets\img\chefs\chefs-3.jpg" class="img-fluid" alt="">
            <h7>upload foto anda</h7>
            <form action="" method="post" role="form" enctype='multipart/form-data'>
            <input type="file" class="form-control" name="gambar_profil">
          </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info" data-aos="fade-up">
          
          <div style="width:100%;" class="profil">
            
              <table>
              <tr>
                <td>Nomor Telepon</td>
                <td width="20%" align='center'>:</td>
                <td><input class="form-control" type="text" value="<?php echo $data['no_tlp']?>" style="width:440px; margin-bottom:2%; border-radius: 0; box-shadow: none; font-size: 14px; background: #0c0b09; border-color: #625b4b; color: white;" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='black'" name="no_tlp" required></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td align='center'>:</td>
                <td><input class="form-control" type="text" value="<?php echo $data['alamat']?>" style="width:440px; margin-bottom:2%; border-radius: 0; box-shadow: none; font-size: 14px; background: #0c0b09; border-color: #625b4b; color: white;" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='black'" name="alamat" required></td>
              </tr>
              <tr>
                <td>Kode Pos</td>
                <td align='center'>:</td>
                <td><input class="form-control" type="text" value="<?php echo $data['kode_pos']?>" style="width:440px; margin-bottom:2%; border-radius: 0; box-shadow: none; font-size: 14px; background: #0c0b09; border-color: #625b4b; color: white;" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='black'" name="kodepos" required></td>
              </tr>
              <tr>
                <td>Kelurahan</td>
                <td align='center'>:</td>
                <td><input class="form-control" type="text" value="<?php echo $data['kelurahan']?>"" style="width:440px; margin-bottom:2%; border-radius: 0; box-shadow: none; font-size: 14px; background: #0c0b09; border-color: #625b4b; color: white;" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='black'" name="kelurahan" required></td>
              </tr>
              <tr>
                <td>Kecamatan</td>
                <td align='center'>:</td>
                <td><input class="form-control" type="text" value="<?php echo $data['kecamatan']?>" style="width:440px; margin-bottom:2%; border-radius: 0; box-shadow: none; font-size: 14px; background: #0c0b09; border-color: #625b4b; color: white;" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='black'" name="kecamatan" required></td>
              </tr>
              <tr>
                <td>Kota</td>
                <td align='center'>:</td>
                <td><input class="form-control" type="text" value="<?php echo $data['kota']?>" style="width:440px; margin-bottom:2%; border-radius: 0; box-shadow: none; font-size: 14px; background: #0c0b09; border-color: #625b4b; color: white;" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='black'" name="kota" required></td>
              </tr>
              <tr>
                <td>Jenis Kelamin</td>
                <td align='center'>:</td>
                <td>
                  <div class="jeniskelamin" >
                  <select id="jeniskelamin" class="selectpicker form-control" data-live-search="true" style=" width:440px; margin-bottom:2%; border-radius: 0; box-shadow: none; font-size: 14px; background: #0c0b09; border-color: #625b4b; color: white;" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='black'" name="jeniskelamin" required>
                    <option value="Laki - laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Tidak Ingin Memberitahu">Tidak Ingin Memberitahu</option>
                  </select>
                </div>
                </td>
              </tr>
            </table>
            <div class="text-center" style="margin-top:2%;"><input type="submit" name="kirim_edit_profil" value="Simpan Perubahan" style="background: #cda45e; border: 0; padding: 10px 35px; color: #fff; transition: 0.4s; border-radius: 50px;" onMouseOver="this.style.backgroundColor='#625b4b'" onMouseOut="this.style.backgroundColor='#cda45e'"></div>
          </form>
          </div>
        </div>
  </div>  
</div>
<?php
    }
    ?>
<?php 
include('koneksi.php');
if(isset($_POST['kirim_edit_profil']))
{
    if(!isset($_FILES['gambar_profil']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar_profil']['name'];
        $file_size = $_FILES['gambar_profil']['size'];
        $file_type = $_FILES['gambar_profil']['type'];
        // if ($file_size < 3048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        if ($file_size < 3048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar_profil']['tmp_name']));
            $no_tlp = $_POST['no_tlp'];
            $alamat = $_POST['alamat'];
            $kodepos = $_POST['kodepos'];
            $kelurahan = $_POST['kelurahan'];
            $kecamatan = $_POST['kecamatan'];
            $kota = $_POST['kota'];
            $jeniskelamin = $_POST['jeniskelamin'];
            $username=$_SESSION['username'];
            
            mysqli_query($db_koneksi,"UPDATE tbl_user SET no_tlp='$no_tlp', alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan', kota='$kota', kode_pos='$kodepos', jenis_kelamin='$jeniskelamin' WHERE username='$username';");
            // mysqli_query($db_koneksi,"UPDATE tbl_user SET no_tlp='$no_tlp', alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan', kota='$kota', kode_pos='$kodepos', nama_gambar='$file_name', tipe_gambar='$file_type', ukuran_gambar='$file_size', gambar_profil='$image', jenis_kelamin='$jeniskelamin' WHERE username='$username';");
            header("location: ?page=keranjang");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuran File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>