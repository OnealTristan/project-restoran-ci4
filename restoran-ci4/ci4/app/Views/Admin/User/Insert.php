<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="content-wrapper">
    <div class="container">

        <div class="col">
            <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger font-weight-bold text-center" role="alert">';
        echo session()->getFlashdata('info');
        echo ' !!!';
        echo '</div>';
    }
    ?>
        </div>


        <div class="col text-center">
            <h2 class="text-center text-bold" style="margin-top: 10px;">FORM INSERT DATA</h2>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 col-md-8 mx-auto mt-3">
                <form action="<?= base_url('/admin/user/insert') ?>" method="post">
                    <div class="form-group">
                        <label for="Kategori">User</label>
                        <input type="text" class="form-control" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Email</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Level</label>
                        <select class="form-control" name="level" id="idkategori">
                            <?php foreach ($level as $key) : ?>
                            <option value="<?= $key ?>"><?= $key ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-primary float-right w-100" name="simpan" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>