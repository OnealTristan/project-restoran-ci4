<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cafe House - Food and Drink Menu</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="<?= base_url()?>/assets/front/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/front/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url()?>/assets/front/css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url()?>/assets/front/img/favicon.ico" type="image/x-icon" />

  </head>
  <body>
    <?php
    $jml_keranjang = 0;
    foreach ($cart as $key => $value) {
        $jml_keranjang = $jml_keranjang + $value['qty'];
    }
    ?>

    <!-- Preloader -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Preloader -->
    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="<?= base_url()?>/assets/front/img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Cafe House</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
                <ul class="list-main">
                    <?php if (!empty(session()->get('namapelanggan'))) :?>
                    <li><i class="ti-reload"></i> <a href="<?= base_url('historypembelian')?>">History
                            Pembelian</a></li>
                    <li><i class="ti-credit-card"></i> <a href="<?= base_url('statuspembayaran')?>">Status
                            Pembayaran</a></li>
                    <li><i class="ti-shopping-cart"></i> <a href="<?= base_url('keranjang')?>">Keranjang
                            [<?= $jml_keranjang ?>]</a>
                    </li>
                    <li><i class="ti-user"></i> <a><?= session()->get('namapelanggan') ?></a></li>
                    <li><i class="ti-back-right"></i><a href="<?= base_url('logout')?>">Logout</a></li>
                    <?php else :?>
                    <li><i class="ti-shopping-cart"></i> <a href="<?= base_url('keranjang')?>">Keranjang
                            [<?= $jml_keranjang ?>]</a>
                    </li>
                    <li><i class="ti-user"></i> <a href="#">Guest</a></li>
                    <li><i class="ti-power-off"></i><a href="<?= base_url('login')?>">Login</a></li>
                    <?php endif;?>
                </ul>
            </nav>
          </div>           
        </div>    
      </div>
    </div>


    
    <?= $this->renderSection('content') ?> 
    
    
    
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <nav class="col-lg-3 col-md-3 tm-footer-nav tm-footer-div">
              <h3 class="tm-footer-div-title">Main Menu</h3>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Directory</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Our Services</a></li>
              </ul>
            </nav>
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">About Us</h3>
              <p class="margin-top-15">Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.</p>
              <p class="margin-top-15">Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Get Social</h3>
              <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante.</p>
              <div class="tm-social-icons-container">
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-youtube"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div>
        <div class="container">
          <div class="row tm-copyright">
           <p class="col-lg-12 small copyright-text text-center">Copyright &copy; 2084 Your Cafe House</p>
         </div>  
       </div>
     </div>
   </footer> <!-- Footer content-->  
   <!-- JS -->
   <script type="text/javascript" src="<?= base_url()?>/assets/front/js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
   <script type="text/javascript" src="<?= base_url()?>/assets/front/js/templatemo-script.js"></script>      <!-- Templatemo Script -->

 </body>
 </html>