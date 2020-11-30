<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="container">

        <div class="row">
            <div class="col text-center">
                <h2 class="text-center text-bold" style="margin-top: 10px;"><?= $judul?></h2>
            </div>
        </div>
        <div class="row mx-auto text-center">
            <div class="col">
                <p>Pelanggan : <?= $order[0]['pelanggan']?></p>
            </div>
            <div class="col">
                <p>Tanggal : <?= date("d-m-Y",strtotime($order[0]['tglorder'])) ?></p>
            </div>
            <div class="col">
                <p>Total : <b><?= number_format($order[0]['total']) ?></b></p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col">
                <h2 class="text-center text-bold" style="margin-top: 10px;">Rincian Order</h2>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col">
                <table class="table">
                    <tr>
                        <th>No</th>
                        <th>Menu</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                    </tr>
                    <?php $no = 1;?>
                    <?php foreach ($detail as $key => $value) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $value['menu']?></td>
                        <td><?= $value['hargajual']?></td>
                        <td><?= $value['jumlah']?></td>
                        <td><?= $value['jumlah'] * $value['hargajual']; ?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="col-8 mx-auto">
                    <?php
            if (!empty(session()->getFlashdata('info'))) {
                echo '<div class="alert alert-danger font-weight-bold text-center" role="alert">';
                echo session()->getFlashdata('info');
                echo ' !!!';
                echo '</div>';
            }
            ?>
                </div>
            </div>
        </div>

        <div class="row" style="justify-content: center;">
            <div class="col-8">
                <form action="<?= base_url('/admin/order/update') ?>" method="post">
                    <div class="form-group">
                        <input type="number" class="form-control" name="bayar" placeholder="BAYAR" required>
                    </div>
                    <input type="hidden" class="form-control" value="<?= $order[0]['total']?>" name="total" required>
                    <input type="hidden" class="form-control" value="<?= $order[0]['idorder']?>" name="idorder"
                        required>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary float-right" name="simpan" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>