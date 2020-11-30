<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>


<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5">
                <h2 class="text-center text-bold"><?= $judul ?></h2>
            </div>
        </div>
        <div class="row mx-auto ">
            <div class="col">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <form action="<?= base_url('/admin/orderdetail/cari') ?>" method="post">
                                    <div class="form-group col-5 float-left">
                                        <label for="Kategori">Awal</label>
                                        <input type="date" class="form-control" name="awal" required>
                                    </div>
                                    <div class="form-group col-5 float-left">
                                        <label for="Kategori">Sampai</label>
                                        <input type="date" class="form-control" name="sampai" required>
                                    </div>
                                    <div class="form-group col-2 float-left mt-4">
                                        <input type="submit" style="margin-top: 8px;" class="btn btn-primary"
                                            name="cari" value="CARI">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Menu</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1 ?>
                                <?php foreach ($orderdetail as $key => $value) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['tglorder'] ?></td>
                                    <td><?= $value['menu'] ?></td>
                                    <td><?= $value['harga'] ?></td>
                                    <td><?= $value['jumlah'] ?></td>
                                    <td><?= $value['jumlah'] * $value['harga'] ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>