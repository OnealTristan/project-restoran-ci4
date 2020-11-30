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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Pelanggan</th>
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>Bayar</th>
                                    <th>Kembali</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1 ?>
                                <?php foreach ($order as $key => $value) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['pelanggan'] ?></td>
                                    <td><?= $value['tglorder'] ?></td>
                                    <td><?= $value['total'] ?></td>
                                    <td><?= $value['bayar'] ?></td>
                                    <td><?= $value['kembali'] ?></td>
                                    <?php
                                        if ($value['status'] == 1) {
                                            $status = "<a class='btn btn-success text-light'>LUNAS</a>";
                                        }else{
                                            $status = "<a href='". base_url("admin/order/find")."/".$value['idorder']."' class='btn btn-danger text-light'>BAYAR</a>";
                                        }
                                    ?>
                                    <td><?= $status ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>