<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <div class="container">

        <div class="col">
            <?php
        if (!empty(session()->getFlashdata('info'))) {
            echo '<div class="alert alert-danger font-weight-bold text-center" role="alert">';
            $error = session()->getFlashdata('info');
            foreach ($error as $key => $value) {
                echo $value;
            }
            echo '</div>';
        }
        ?>
        </div>


        <div class="col text-center">
            <h2 class="text-center text-bold" style="margin-top: 10px;">FORM UPDATE DATA</h2>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 col-md-8 mx-auto mt-3">
                <form action="<?= base_url('/admin/menu/update') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="gambar">Kategori</label>
                        <select class="form-control" name="idkategori" id="idkategori">
                            <?php foreach ($kategori as $key => $value) : ?>
                            <option <?php if ($value['idkategori'] == $menu['idkategori']) echo "selected" ?>
                                value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="menu">Menu</label>
                        <input type="text" class="form-control" value="<?= $menu['menu'] ?>" name="menu" required>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" value="<?= $menu['harga'] ?>" name="harga" required>
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <input type="hidden" class="form-control" value="<?= $menu['gambar'] ?>" name="gambar" required>
                    <input type="hidden" class="form-control" value="<?= $menu['idmenu'] ?>" name="idmenu" required>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary float-right w-100" name="simpan" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>