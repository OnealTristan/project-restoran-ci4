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
    <h1> UPDATE DATA </h1>
</div>

<div class="col-6">
    <form action="<?= base_url() ?>/admin/kategori/update" method="post">
        <div class="form-group">
        <label for="Kategori">Kategori</label>
        <input type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required class="form-control">
        </div>
        <div class="form-group">
        <label for="Keterangan">Keterangan</label>
        <input type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required class="form-control">
        </div>
        <div class="form-group">
        <input type="hidden" name="idkategori" value="<?=$kategori['idkategori']?>">
        <input type="submit" name="simpan" value="SIMPAN">
        </div>
    </form>
</div>

<?= $this->endSection() ?>