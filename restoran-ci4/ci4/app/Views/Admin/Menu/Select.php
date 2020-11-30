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
                        <h3 class="text-right"><a class="btn btn-primary" href="<?= base_url('/admin/menu/create') ?>"
                                role="button">TAMBAH
                                DATA</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="<?= base_url('/admin/menu/read') ?>" method="get">
                            <?= view_cell('\App\Controllers\Admin\Menu::option') ?>
                        </form>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Menu</th>
                                    <th>Foto</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1?>
                                <?php foreach ($menu as $key => $value) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['menu'] ?></td>
                                    <td><img style="width: 80px;"
                                            src="<?= base_url('/upload/' . $value['gambar'] . '') ?>" alt=""></td>
                                    <td>Rp. <?= number_format($value['harga']) ?></td>
                                    <td><a href="<?= base_url() ?>/admin/menu/delete/<?= $value['idmenu'] ?>"><img
                                                src="<?= base_url('/icon/trash.svg') ?>" alt=""></a>&nbsp;|&nbsp;<a
                                            href="<?= base_url() ?>/admin/menu/find/<?= $value['idmenu'] ?>"><img
                                                src="<?= base_url('/icon/pen.svg') ?>" alt=""></a></td>
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
</div>

<?= $this->endSection() ?>