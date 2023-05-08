<section id="menu" class="menu section-bg" style="margin-top:8%;">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Menu Utter.co</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <div style="padding-right:3%;"><a href="?page=menu&kategori=semua">All</a></div>
            <div style="padding-right:3%;"><a href="?page=menu&kategori=milko">Milko</a></div>
            <div style="padding-right:3%;"><a href="?page=menu&kategori=choco">Choco</a></div>
            <div style="padding-right:3%;"><a href="?page=menu&kategori=tropikal">Tropikal</a></div>
            <div style="padding-right:3%;"><a href="?page=menu&kategori=seliter">Seliter</a></div>
          </div>
        
          <?php
include('koneksi.php');
if(isset($_GET['page'])){
  @$kategori = $_GET['kategori'];
  switch ($kategori){
    default:
    include "produk/semua.php";
  break;
  case 'semua':
    include "produk/semua.php";
    break;
  case 'milko':
      include "produk/milko.php";
      break;
  case 'choco':
      include "produk/choco.php"; 
      break;
  case 'tropikal':
    include "produk/tropikal.php"; 
    break;
  case 'seliter':
    include "produk/seliter.php"; 
    break;
  }
}else{
        include "produk/semua.php";
    }
    ?>
      </div>
    </section>


            </div>
        </div>
    <script src="main.js"></script>
</div>