<?= $this->extend('Template/Front') ?>
<?= $this->section('content') ?>

<section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="<?= base_url()?>/assets/front/img/light.png" alt="Light" class="light light-1">
          <img src="<?= base_url()?>/assets/front/img/light.png" alt="Light" class="light light-2">
          <img src="<?= base_url()?>/assets/front/img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="<?= base_url()?>/assets/front/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Our Menus&nbsp;&nbsp;<img src="<?= base_url()?>/assets/front/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
          <p class="gray-text tm-welcome-description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusnec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>    
        </div>
        <img src="<?= base_url()?>/assets/front/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">  
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <div class="col-lg-9 col-md-9 col-sm-8">
            <h2 class="tm-section-header gold-text tm-handwriting-font">Variety of Menus</h2>
            <h2>Cafe House</h2>
            <p class="tm-welcome-description">Fndimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Ettiam sit amet orci eget eros faucibus tincidunt.</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-4 tm-welcome-img-container">
            <div class="inline-block shadow-img">
              <img src="<?= base_url()?>/assets/front/img/1.jpg" alt="Image" class="img-circle img-thumbnail">  
            </div>              
          </div>            
        </section>          
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="<?= base_url()?>/assets/front/img/logo.png" alt="Logo" class="tm-site-logo"> Our Menus</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div>
            <div class="col-lg-3 col-md-3">
              <div class="tm-position-relative margin-bottom-30">              
                <nav class="tm-side-menu" style="background-color: #825959; padding:15px; border-radius:25px;">
                  <ul>
                    <?php foreach($kategori as $key => $value): ?>
                        <div style="background-color:white; margin-bottom:10px;">
                        <li><a href="#<?= $value['idkategori'] ?>" class="active"><?= $value['kategori'] ?></a></li>
                        </div>
                    <?php endforeach; ?>
                  </ul>         
                </nav>    
              </div>  
            </div>            
            <div class="tm-menu-product-content col-lg-9 col-md-9"> <!-- menu content -->
                <?php foreach($kategori as $key => $value): ?>
                    <div id='<?= $value['idkategori'] ?>'>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <?php foreach($menu as $key => $data): ?>
                                        <?php if($data['idkategori'] === $value['idkategori']): ?>
                                            <div class="tm-product">
                                            <img style="width:150px;" src="<?= base_url("/upload/".$data['gambar'])?>" alt="Product">
                                            <div class="tm-product-text">
                                                <h3 class="tm-product-title"><?= $data['menu'] ?></h3>
                                            </div>
                                            <div class="tm-product-price">
                                                <a href="<?= base_url('tambah-ke-keranjang/' . $data['idmenu']) ?>" class="tm-product-price-link tm-handwriting-font">Rp. <?= $data['harga'] ?></a>
                                            </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
          </div>          
        </section>
      </div>
    </div>

<?= $this->endSection() ?>