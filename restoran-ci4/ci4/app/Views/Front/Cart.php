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
                        <li class="active"><a href="<?= base_url('keranjang')?>">Keranjang</a></li>
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
        <?php if ($totalitem === 0) : ?>
        <div class="alert alert-danger text-center" role="alert">
            Keranjang Anda Masih Kosong ,Silahkan Belanja Terlebih Dahulu <a href="<?= base_url() ?>"
                class="alert-link">&nbsp; Home</a>
        </div>
        <?php else : ?>
        <div class="row">
            <div class="col-12">
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading text-center">
                            <th>GAMBAR</th>
                            <th>PRODUK</th>
                            <th class="text-center">HARGA</th>
                            <th class="text-center">JUMLAH</th>
                            <th class="text-center">TOTAL</th>
                            <th class="text-center"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart as $key => $value) : ?>
                        <tr class="text-center">
                            <td class="image" data-title="Gambar"><img style="width:100px;"
                                    src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt="#"></td>
                            <td class="product-des" data-title="Produk">
                                <p class="product-name"><a href="#"><?= $value['name'] ?></a></p>
                            </td>
                            <td class="price" data-title="Harga">
                                <p class="product-name"><a href="#"><span>Rp.
                                            <?= number_format($value['price'], 0, ',', '.')  ?></span></a></p>
                            </td>
                            <td class="qty" data-title="Jumlah">
                                <div class="row justify-content-md-center">
                                    <a
                                        href="<?= base_url('/keranjang/minus/' . $value['qty'] . '/' . $value['rowid'])?>"><span
                                            style="padding: 12px 20px; border-radius: 30px;"
                                            class="btn btn-primary">-</span></a>
                                    <input style="width: 50px; padding: 0px; margin: 0 10px;border-radius: 15px;"
                                        type="text" name="quantity[]" class="input-number" data-min="1" data-max="100"
                                        value="<?= $value['qty']; ?>">
                                    <a
                                        href="<?= base_url('/keranjang/plus/' . $value['qty'] . '/' . $value['rowid'])?>"><span
                                            style="padding: 12px 20px;border-radius: 30px;"
                                            class="btn btn-primary">+</span></a>
                                </div>
                            </td>
                            <td class="total-amount" data-title="Total">
                                <p class="product-name"><a href="#"><span>Rp.
                                            <?= number_format($value['subtotal'], 0, ',', '.')  ?></span></a></p>
                            </td>
                            <td class="action" data-title="Hapus"><a
                                    href="<?= base_url('/hapus/' . $value['rowid']) ?>"><i
                                        class="ti-trash remove-icon"></i></a></td>
                        </tr>
                        <?php endforeach?>
                        <tr>
                            <td colspan="4" class="text-right td1">
                                <h4>SUB TOTAL</h4>
                            </td>
                            <td data-title="Subtotal" class="text-center td2">
                                <p class="product-name"><a href="#"><span>Rp.
                                            <?= number_format($total, 0, ',', '.')  ?></span></a></p>
                            </td>
                            <td class="td3"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="right" style="padding-left: 0;">
                                <div class="button5">
                                    <?php if (!empty(session()->get('namapelanggan'))) { ?>
                                    <a href="<?= base_url('checkout')?>" class="btn">Checkout</a>
                                    <?php } else { ?>
                                    <a href="<?= base_url('login')?>" onclick="ky()" class="btn">Checkout</a>
                                    <?php } ?>
                                    <a href="<?= base_url()?>" class="btn">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Total Amount -->
            </div>
            <?php endif ?>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->
<script>
function ky() {
    alert("Harap Login Dahulu !");
}
</script>

<?= $this->endSection() ?>