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
                        <li class="active"><a href="<?= base_url('historypembelian')?>">History Pembelian</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- Shopping Cart -->
<div class="shopping-cart section">
    <div class="container">
        <?php if (count($orderdetail) === 0) : ?>
        <div class="alert alert-danger text-center" role="alert">
            Anda Tidak Memiliki History Pembelian
        </div>
        <?php else : ?>
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading text-center">
                            <th>TANGGAL ORDER</th>
                            <th>GAMBAR</th>
                            <th>PRODUK</th>
                            <th class="text-center">HARGA</th>
                            <th class="text-center">JUMLAH</th>
                            <th class="text-center">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderdetail as $key => $value) : ?>
                        <?php
                            $time = strtotime($value['tglorder']);
                            $myFormatForView = date("d-m-yy G:i", $time);
                            ?>
                        <tr class="text-center">
                            <td class="product-des" data-title="TANGGAL ORDER">
                                <p class="product-name"><a><?= $myFormatForView ?></a></p>
                            </td>
                            <td class="product-des" data-title="PRODUK">
                                <img src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="#">
                            </td>
                            <td class="product-des" data-title="PRODUK">
                                <p class="product-name"><a><?= $value['menu'] ?></a></p>
                            </td>
                            <td class="product-des" data-title="HARGA">
                                <p class="product-name"><a>Rp.
                                        <?= number_format($value['harga'], 0, ',', '.')  ?></a></p>
                            </td>
                            <td class="qty" data-title="JUMLAH">
                                <p class="product-name"><a><?= $value['jumlah'] ?></a></p>
                            </td>
                            <td class="product-des" data-title="Total">
                                <?php $total = $value['harga'] * $value['jumlah']?>
                                <p class="product-name"><a>Rp.
                                        <?= number_format($total, 0, ',', '.')  ?></a></p>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        <?php endif;?>
    </div>
</div>
<!--/ End Shopping Cart -->

<?= $this->endSection() ?>