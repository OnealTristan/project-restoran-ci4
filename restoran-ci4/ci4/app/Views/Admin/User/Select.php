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
                        <h3 class="text-right"><a class="btn btn-primary" href="<?= base_url('/admin/user/create') ?>"
                                role="button">TAMBAH
                                DATA</a></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1 ?>
                                <?php foreach ($user as $key => $value) : ?>
                                <tr class="text-center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $value['user'] ?></td>
                                    <td><?= $value['email'] ?></td>
                                    <td><?= $value['level'] ?></td>
                                    <?php 
                                            if ($value['aktif'] == 1) {
                                                $aktif = "<p class='btn btn-success text-light'>AKTIF</p>";
                                            } else {
                                                $aktif = "<p class='btn btn-danger text-light'>BANNED</p>";
                                            }
                                            
                                        ?>
                                    <td><a
                                            href="<?= base_url() ?>/admin/user/update/<?= $value['iduser'] ?>/<?= $value['aktif'] ?>"><?= $aktif?></a>
                                    </td>
                                    <td><a href="<?= base_url() ?>/admin/user/delete/<?= $value['iduser'] ?>"><img
                                                src="<?= base_url('/icon/trash.svg') ?>" alt=""></a>&nbsp;|&nbsp;<a
                                            href="<?= base_url() ?>/admin/user/find/<?= $value['iduser'] ?>"><img
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