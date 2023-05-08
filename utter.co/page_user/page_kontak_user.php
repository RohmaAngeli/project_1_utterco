<?php 
// ob_start();
    include "koneksi.php";
    
    $id_autor = $_SESSION["username"];
    $query="SELECT * FROM tbl_user WHERE username = '$id_autor'";
    $hasil=mysqli_query($db_koneksi, $query); 
    $data=mysqli_fetch_array($hasil);
    ?>

    <?php
//proses penambahan data contact us
@$username=$_POST['username'];
@$subject=$_POST['subject'];
@$message=$_POST['message'];
if(isset($_POST['kirim'])) {
// $query_tambah = "INSERT INTO tbl_kontak (username, subjek, pesan) VALUES ('$username', '$subject', '$message')";
$query_insert="INSERT INTO tbl_kontak VALUES ('', '$username', '$subject', '$message');"; 

$hasil = mysqli_query($db_koneksi, $query_insert);
    if($hasil) {
        echo "<script> alert('data tertambah!');</script>";
    } else {
        die( 'Unable to load the "PHP Email Form" Library!');
    }
    // if ($hasil) {
    // //jika berhasil create kembali ke halaman profil 
    // echo "<script> alert('data terupdate!');</script>";
    // echo '<span style="color:blue"><a href="?page=profil"><b><u><i>Kembali ke halaman profil</i></u></b></a></span>';
    // }
}
// ob_end_flush();
?> 

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact" style="margin-top:8%;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Hubungi Kami</p>
        </div>
      </div>

      <!-- <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div> -->

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.1550969223094!2d112.6281128!3d-7.982913699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629a5e2f64367%3A0x2147f131c090c57f!2sutter.co%20coffee%20%26%20drinks!5e0!3m2!1sid!2sid!4v1680595014106!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Kauman No.21a, Kauman, Kec. Klojen, Malang.</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Jam Operasional:</h4>
                <p>
                  <!-- Monday-Saturday:<br> -->
                  08.00-22.00 WIB
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>about.utter@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telepon:</h4>
                <p>+62 813-5835-4890</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="" method="post" role="form" enctype='multipart/form-data'>
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama_user" class="form-control" id="name" value="<?php echo $data['nama_user'];?>" disabled style="background-color:white;">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="text" class="form-control" name="username" id="email"  value="<?php echo $_SESSION['username']?>">
                </div>
              </div>
              <hr>
              <div weight>
                Subjek : <br>
              </div>
              <div class="form-group mt-3">
                <!-- <input type="text" class="form-control" name="subject" id="subject" placeholder="Subjek" required> -->
                
                <select id="subject" name="subject" class="form-control" style="background-color:#d9ba85;">
                    <option value="Saran">Saran</option>
                    <option value="Kritikan">Kritikan</option>
                    <option value="Pertanyaan">Pertanyaan</option>
                </select>
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Tulis Pesan" required style="border-radius: 0;
  box-shadow: none;
  font-size: 14px;
  background: #0c0b09;
  border-color: #625b4b;
  color: white;"></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
              <div class="text-center" style="margin-top:2%;"><input type="submit" name="kirim" value="Kirim" style="background: #cda45e;
  border: 0;
  padding: 10px 35px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;"></div>
              
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

