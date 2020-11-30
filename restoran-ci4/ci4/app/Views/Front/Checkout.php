<?= $this->extend('Template/Front') ?>
<?= $this->section('content') ?>

<!-- Breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <ul class="bread-list">
                        <li><a href="<?= base_url()?>">Home<i class="ti-arrow-right"></i></a></li>
                        <li class="active"><a href="<?= base_url('checkout')?>">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Start Checkout -->
<section class="shop checkout section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="checkout-form">
                    <h2>Identitas Pelanggan</h2>
                    <br>
                    <!-- Form -->
                    <form class="form" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Pelanggan</label>
                                    <input type="text" disabled name="name"
                                        value="<?= session()->get('namapelanggan')?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input type="email" disabled name="email"
                                        value="<?= session()->get('emailpelanggan')?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nomor Telepon</label>
                                    <input type="number" disabled name="telp"
                                        value="<?= session()->get('telppelanggan')?>" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" disabled name="alamat"
                                        value="<?= session()->get('alamatpelanggan')?>" required="required">
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--/ End Form -->
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="order-details">
                    <!-- Order Widget -->
                    <div class="single-widget">
                        <h2>TOTAL BELANJA</h2>
                        <div class="content">
                            <ul>
                                <li>Sub Total<span style="float:right;">Rp.
                                        <?= number_format($total, 0, ',', '.')  ?></span></li>
                                <li>Pengiriman<span style="float:right;">Rp. 0</span></li>
                                <li class="last">Total<span style="float:right;">Rp.
                                        <?= number_format($total, 0, ',', '.')  ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-widget payement">
                        <div class="content">
                            <img src="<?= base_url()?>/assets/front/images/payment-method.png" alt="#">
                        </div>
                    </div>
                    <div class="single-widget get-button">
                        <div class="content">
                            <div class="button">
                                <a href="<?= base_url('bayar')?>" class="btn">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Checkout -->

<?= $this->endSection() ?>