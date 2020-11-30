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
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1?>
                                <?php foreach ($pelanggan as $key => $value) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['pelanggan'] ?></td>
                                    <td><?= $value['alamat'] ?></td>
                                    <td><?= $value['telp'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><a href="<?= base_url() ?>/admin/pelanggan/delete/<?= $value['idpelanggan'] ?>"><img
                                                src="<?= base_url('/icon/trash.svg') ?>" alt=""></a></td>
                                    <?php 
                                            if ($value['aktif'] == 1) {
                                                $aktif = "<p class='btn btn-success text-light'>AKTIF</p>";
                                            } else {
                                                $aktif = "<p class='btn btn-danger text-light'>TIDAK AKTIF</p>";
                                            }
                                            
                                        ?>
                                    <td><a
                                            href="<?= base_url() ?>/admin/pelanggan/update/<?= $value['idpelanggan'] ?>/<?= $value['aktif'] ?>"><?= $aktif?></a>
                                    </td>
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