<?php
session_start();
include "cek.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Utter.co</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/utteritem.png" rel="icon">
  <link href="assets/img/utteritem.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>+62 813-5835-4890</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> Everyday: 08.00-22.00 WIB</span></i>
      </div>

      <!-- <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#">De</a></li>
        </ul>
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html"><img src="assets\img\uttercologo.png" alt="" style="height: 100px; "></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <!-- class="nav-link scrollto active" -->
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="user.php?page=beranda">Beranda</a></li>
          <!-- <li><a class="nav-link scrollto" href="#about">Tentang</a></li> -->
          <li><a href="user.php?page=menu">Menu</a></li>
          <!-- <li><a class="nav-link scrollto" href="#specials">Kontak</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#events">Events</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li> -->
          <li><a href="user.php?page=kontak">Kontak</a></li>
          <li><a href="user.php?page=keranjang">Keranjang</a></li>
          <li><a href="user.php?page=histori">Histori</a></li>
          <li><a href="user.php?page=profil">Profil</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Lainnya</span> <i class="bi bi-chevron-down"></i></a> -->
          <!-- <ul>
              <li><a href="#">Profil</a></li>
              </li>
              <li><a href="#">Riwayat</a></li>
              <li><a href="#">Menu</a></li>
              <li><a href="#">Keranjang</a></li>
            </ul>
          </li>
        </ul> -->
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="user.php?page=profil" class="book-a-table-btn scrollto d-none d-lg-flex">Hallo! <?php echo $_SESSION['username']?></a>
    </div>
  </header><!-- End Header -->

  <div>
    <?php
      //pemanggilan halaman dengan switch...case..
      if (isset($_GET['page'])){
        $page = $_GET['page'];
        switch ($page) {
          case 'beranda':
            include "page_guest/berandaguest1.php"; 
            break;
          case 'menu':
            include "page_guest/page_menu.php"; 
            break;
          case 'kontak':
            include "page_user/page_kontak_user.php"; 
            break;
          case 'keranjang':
            include "page_user/keranjang.php";
            break;
          case 'histori':
            include "page_user/histori_transaksi.php"; 
            break;
          case 'profil':
            include "page_user/profil.php";
            break;
          default:
            echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
            break;
        }
      }
      else{
          include "page_guest/berandaguest1.php";
      }
    ?>
  </div>

  
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Utter.co</h3>
              <p>
                Jl. Kauman No.21a, Kauman, Kec. Klojen, Malang.<br><br>
                <strong>Telepon:</strong> +62 813-5835-4890<br>
                <strong>Email:</strong> about.utter@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Restaurantly</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</div>
<script>

function startCalc(){

interval = setInterval("calc()",1);}

function calc(){

one = document.autoSumForm.harga.value;

two = document.autoSumForm.jumlah.value;

three = document.autoSumForm.diskon.value;

document.autoSumForm.total.value = (one * 1) * (two * 1) - (three * 1);}

function stopCalc(){

clearInterval(interval);}

</script>

</body>
</html>