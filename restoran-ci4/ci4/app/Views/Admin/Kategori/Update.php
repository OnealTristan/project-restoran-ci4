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
            <h2 class="text-center text-bold" style="margin-top: 10px;">FORM UPDATE DATA</h2>
        </div>

        <div class="row">
            <div class="col-12 col-lg-4 col-md-8 mx-auto mt-3">
                <form action="<?= base_url('/admin/kategori/update') ?>" method="post">
                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <input type="text" class="form-control" name="kategori" value="<?= $kategori['kategori'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="Kategori">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" value="<?= $kategori['keterangan'] ?>" required>
                    </div>
                    <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary float-right w-100" name="simpan" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>