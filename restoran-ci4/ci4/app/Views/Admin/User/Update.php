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
                <form action="<?= base_url('/admin/user/ubah') ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" value="<?= $user['iduser']?>" class="form-control" name="iduser">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $user['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="harga">Level</label>
                        <select class="form-control" name="level" id="idkategori">
                            <?php foreach ($level as $key) : ?>
                            <option <?php if($user['level'] == $key){
                        echo "selected";
                        }?> value="<?= $key ?>"><?= $key ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="simpan" value="SIMPAN">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>