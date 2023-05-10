<?php
include "koneksi.php";
$id_autor = $_SESSION["username"];
    $query="SELECT * FROM tbl_user WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query); 
    
    while($data=mysqli_fetch_array($hasil)){
        ?>
<div class="container" data-aos="fade-up">
    <div class="alert alert-info alert-dismissable" style="margin-bottom:5%;"data-aos="fade-left" >
      <a class="panel-close close" data-dismiss="alert">×</a> 
      <i class="fa fa-coffee"></i>
      <strong>Info</strong> Perubahan akan disimpan pada profil anda
    </div>

    <div class="row" style="align:center;">
      
        <!-- left column -->
        <div class="col-md-3" data-aos="fade-up">
          <div class="col-4" style="padding:10%;">
            <svg xmlns="http://www.w3.org/2000/svg" width="230px" height="230px" style="background-color:#ffffff; border-radius:50%; box-shadow: 0 0 30px 5px #cda45e; border: 1px solid #000000; color:#000;" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
               <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
               <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg> 
         </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info" data-aos="fade-up" >
          
          <div style="width:100%; margin-left:5%;" class="profil">
            
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
            <input type="submit" name="kirim_edit" value="simpan">
          </form>
          </div>
        </div>
</div>
<?php
    }
    ?>
<?php 
include 'koneksi.php';
if(isset($_POST['kirim_edit']))
{
  $no_tlp = $_POST['no_tlp'];
  $alamat = $_POST['alamat'];
  $kodepos = $_POST['kodepos'];
  $kelurahan = $_POST['kelurahan'];
  $kecamatan = $_POST['kecamatan'];
  $kota = $_POST['kota'];
  $jeniskelamin = $_POST['jeniskelamin'];
  $username=$_SESSION['username'];
  
  $query_update=mysqli_query($db_koneksi,"UPDATE tbl_user SET no_tlp='$no_tlp', alamat='$alamat', kelurahan='$kelurahan', kecamatan='$kecamatan', kota='$kota', kode_pos='$kodepos', jenis_kelamin='$jeniskelamin' WHERE username='$username';");
  
  if ($query_update){
    echo "<center>";
    echo "<br>";
    echo "Data Telah Terupdate! <br>";
    echo '<span style="color:blue"><a href="?page=profil"><b><u><i>Refresh Halaman Profil</i></u></b></a></span>';
    echo "</center>";
  }
}

?>