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
                        <li class="active"><a href="<?= base_url('statuspembayaran')?>">Status Pembayaran</a></li>
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
        <?php if (session()->getFlashdata('checkout') != null) { ?>
        <div class="alert alert-success">
            <center><?= session()->getFlashdata('checkout'); ?><center>
        </div>
        <?php } ?>
        <?php if (count($orderdetail) === 0) : ?>
        <div class="alert alert-danger text-center" role="alert">
            Anda Belum Melakukan Checkout
        </div>
        <?php else : ?>
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading text-center">
                            <th>TANGGAL ORDER</th>
                            <th>PRODUK</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center">STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderdetail as $key => $value) : ?>
                        <?php
                            $time = strtotime($value['tglorder']);
                            ?>
                        <tr class="text-center">
                            <td class="product-des" data-title="TANGGAL ORDER">
                                <p class="product-name"><a><?= date("d-m-yy", $time); ?></a></p>
                            </td>
                            <td class="product-des" data-title="PRODUK">
                                <?php 
                                    $id = $value['idorder'];
                                    $db = \Config\Database::connect();
                                    $query = $db->query("SELECT * FROM vorderdetail WHERE idorder=$id");
                                    $detail = $query->getResultArray();

                                    foreach ($detail as $key => $data) {
                                        echo "<p class='product-name'><a>";
                                        echo $data['menu'];
                                        echo "&nbsp; X &nbsp;";
                                        echo $data['jumlah'];
                                        echo "</a></p>";
                                        
                                }
                                ?>
                            </td>
                            <td class="product-des" data-title="TOTAL">

                                <p class="product-name"><a>Rp.
                                        <?= number_format($value['total'], 0, ',', '.')  ?></a></p>
                            </td>
                            <td class="product-des" data-title="STATUS">
                                <?php if ($value['status'] == 1) { ?>
                                <p class="product-name"><a class="btn btn-success"
                                        style="color:white;background-color:#28a745;">SELESAI</a></p>
                                <?php }else {?>
                                <p class="product-name"><a class="btn btn-danger"
                                        style="color:white;background-color:#bd2130;">BELUM DIBAYAR</a></p>
                                <?php }?>


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