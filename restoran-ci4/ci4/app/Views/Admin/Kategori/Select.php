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
                    <div class="card-header">
                        <h3 class="text-right"><a class="btn btn-primary"
                                href="<?= base_url('/admin/kategori/create') ?>" role="button">TAMBAH
                                DATA</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                <?php foreach ($kategori as $key => $value) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['kategori'] ?></td>
                                    <td><?= $value['keterangan'] ?></td>
                                    <td><a href="<?= base_url() ?>/admin/kategori/delete/<?= $value['idkategori'] ?>"><img
                                                src="<?= base_url('/icon/trash.svg') ?>" alt=""></a>&nbsp;|&nbsp;<a
                                            href="<?= base_url() ?>/admin/kategori/find/<?= $value['idkategori'] ?>"><img
                                                src="<?= base_url('/icon/pen.svg') ?>" alt=""></a></td>
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