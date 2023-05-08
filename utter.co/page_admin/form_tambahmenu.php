<?php 
include('koneksi.php');
if(isset($_POST['tombol']))
{
    if(!isset($_FILES['gambar']['tmp_name'])){
        echo '<span style="color:red"><b><u><i>Pilih file gambar</i></u></b></span>';
    }
    else
    {
        $file_name = $_FILES['gambar']['name'];
        $file_size = $_FILES['gambar']['size'];
        $file_type = $_FILES['gambar']['type'];
        // if ($file_size < 3048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        if ($file_size < 3048000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
        {
            $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
            $nama_produk = $_POST['nama_produk'];
            $deskripsi_produk = $_POST['deskripsi_produk'];
            $kategori_produk = $_POST['kategori_produk'];
            $harga_produk = $_POST['harga_produk'];
            // $deskripsi_post = $_POST['deskripsi'];
            
            mysqli_query($db_koneksi,"insert into tbl_produk (nama_produk,gambar_produk,nama_gambar,tipe_gambar,ukuran_gambar,deskripsi_produk,kategori_produk,harga_produk)values('$nama_produk', '$image', '$file_name','$file_type','$file_size','$deskripsi_produk','$kategori_produk','$harga_produk')");
            // header("location: ?page=postingan");
        }
        else
        {
            echo '<span style="color:red"><b><u><i>Ukuran File / Tipe File Tidak Sesuai</i></u></b></span>';
        }
    }
}
?>
<div class="halaman" style="background-color:#EFAA52; padding-top:120px; padding-left:auto; ">   
    
<div style="width:800px; height:auto; background-color:#ffffff; padding:auto; margin:20 auto; border-redius:20px; border: 1px solid #000000; padding-bottom:20px; border-radius:20px; ">
    <div style="width:800px; height:auto; background-color:#48120E  ; margin:auto; padding-top:15px; padding-bottom:15px; color:white; border-top-left-radius: 20px; border-top-right-radius: 20px;"><h3>Formulir Tambah produk :v</h3></div>
    <div style="margin-left:15%; padding-top:4%;">
    <form method="POST" action="" enctype='multipart/form-data'>
    <table border="0" align="center">
        <tr><input type="hidden" name="id_produk"></tr>
        <tr>
            <td style=" padding:10px;">Nama Produk</td>
            <td style=" padding:10px;">:</td>
            <td style=" padding:10px;"><input type="text" name="nama_produk" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;"></td> 
        </tr>
        <tr>
            <td style=" padding:10px;">Deskripsi</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><textarea name="deskripsi_produk" style="background-color:#c7a59b; height:70px; border-radius:10px; padding-left:20px; font-size:16px; width:400px; height:150px;"></textarea></td>
        </tr>
        <tr>
            <td style=" padding:10px;">Kategori Produk</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><select name="kategori_produk" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;">
                <option value="Milko">Milko</option>
                <option value="Choco">Choco</option>
                <option value="Tropikal">Tropikal</option>
                <option value="Seliter">Seliter</option>
            </select></td>
        </tr>
        <tr>
            <td style=" padding:10px;">Harga Produk</td>
            <td style=" padding:10px;">:</td>
            <td style=" padding:10px;"><input type="number" name="harga_produk" style="background-color:#c7a59b; height:30px; border-radius:10px; padding-left:20px; font-size:16px;"></td> 
        </tr>
        <tr>
            <td style=" padding:10px;">Masukkan Gambar Produk</td>
            <td style=" padding:10px;">: </td>
            <td style=" padding:10px;"><input type="file" name="gambar" style="background-color:#c7a59b; height:40px; border-radius:10px; padding-left:20px; padding-top:7.5px; font-size:16px;"></td>
        </tr>

        <tr style="">
            <td colspan="2" style=" padding:10px;"><input type="reset" name="reset" value="RESET" style="width:100%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold; margin-top:20px;"></td>
            <td colspan="" style=" padding:10px;"><input type="submit" name="tombol" value="UNGGAH" style="width:100%; background-color:#48120E ; border-radius:20px; padding:10px; font-size:20px; cursor: pointer; letter-spacing:5px; color:white; font-weight:bold; margin-top:20px;"></td>
        <tr>
        
    </table>
</form>
</div>
</div>
</div>