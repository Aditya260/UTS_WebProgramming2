<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?= base_url(); ?>assets/about/img/favicon.png" type="image/png">
        <title>Tentang</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/css/bootstrap.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/vendors/linericon/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/css/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>assets/about/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
              <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="<?= base_url();?>tentang">Tentang</a></li> 
                <li class="nav-item"><a class="nav-link" href="<?= base_url();?>karyawan">Data Karyawan</a></li> 
                <li class="nav-item"><a class="nav-link" href="<?= base_url();?>cabang">Data Cabang</a></li> 
                
              </ul>
            </div> 
          </div>
              </nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="box_1620">
        <div class="banner_inner d-flex align-items-center">
          <div class="container">
            <div class="banner_content text-center">
              <h2>Tentang</h2>
              <div class="page_link">
                <a href="index.html">Home</a>
                <a href="about-us.html">Tentang</a>
              </div>
            </div>
          </div>
        </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        <!--================Home Banner Area =================-->
        <section class="profile_area">
          <?php foreach ($tentang as $a) :?>
            <div class="container">
              <div class="profile_inner p_120">
          <div class="row">
            <div class="col-lg-5">
              <img class="img-fluid" src="<?= base_url(); ?>assets/gambar/<?php echo $a['foto']; ?>" alt="">
            </div>
            <div class="col-lg-7">
              <div class="personal_text">
                <h6>Perkenalkan</h6>
                <h3><?php echo $a['nama']; ?></h3>
                <h4>Mahasiswa D4 Teknik Informatika</h4>
                
                <ul class="list basic_info">
                  <li><a href="#"><i class="lnr lnr-calendar-full"></i> <?php echo $a['tgl_lhr']; ?></a></li>
                  <li><a href="#"><i class="lnr lnr-phone-handset"></i> <?php echo $a['no_hp']; ?></a></li>
                  <li><a href="#"><i class="lnr lnr-envelope"></i> adityayudha21@remarais.com</a></li>
                  <li><a href="#"><i class="lnr lnr-home"></i> <?php echo $a['alamat']; ?></a></li>
                </ul>
                <ul class="list personal_social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
              </div>
            </div>
          <?php endforeach; ?>
        </section>
        <!--================End Home Banner Area =================-->
        
       
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
          <div class="container"></div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="<?= base_url(); ?>assets/about/js/jquery-3.3.1.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/js/popper.js"></script>
        <script src="<?= base_url(); ?>assets/about/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/js/stellar.js"></script>
        <script src="<?= base_url(); ?>assets/about/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="<?= base_url(); ?>assets/about/js/mail-script.js"></script>
        <script src="<?= base_url(); ?>assets/about/js/theme.js"></script>
    </body>
</html>