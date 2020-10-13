<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<div class="col">
    <?php 
        if (!empty(session()->getFlashdata('info'))) {
            echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('info');
            echo '</div>';
        }
    ?>
</div>

<div class="col">
    <h3> UPDATE DATA </h3>
</div>

<div class="col-6">
        <form action="<?= base_url('/admin/menu/update') ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="gambar">Kategori</label>
            <select class="form-control" name="idkategori" id="idkategori">
                <?php foreach($kategori as $key => $value): ?>
                <option <?php if ($value['idkategori']==$menu['idkategori']) echo "selected"?> value="<?= $value['idkategori'] ?>"><?= $value['kategori'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="menu">Menu</label>
            <input type="text" name="menu" value="<?= $menu['menu'] ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" name="harga" value="<?= $menu['harga'] ?>" required class="form-control">
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar">
        </div>
        <input type="hidden" name="gambar" value="<?= $menu['gambar'] ?>" class="form-control">
        <input type="hidden" name="idmenu" value="<?= $menu['idmenu'] ?>" class="form-control">
        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="simpan" value="SIMPAN">
        </div>
    </form>
</div>

<?= $this->endSection() ?>