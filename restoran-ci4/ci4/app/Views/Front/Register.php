<?= $this->extend('Template/Front') ?>
<?= $this->section('content') ?>

<style>
    @import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}

</style>

<div class="wrapper">
    <form class="form-signin form" method="post" action="<?= base_url('authregister') ?>">  

    <?php if (session()->getFlashdata('message') != null) : ?>
    <center>
        <div class="alert alert-success" role="alert"><?= session()->getFlashdata('message') ?>
        </div>
    </center>
    <?php endif?>
    <?php if (session()->getFlashdata('error') != null) : ?>
    <center>
        <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('error') ?></div>
    </center>
    <?php endif?>

      <h2 class="form-signin-heading">Register</h2>
      <input type="text" class="form-control" style="margin-bottom:5px;" name="pelanggan" placeholder="Nama" required="required">
      <input type="text" class="form-control" style="margin-bottom:5px;" name="alamat" placeholder="Alamat" required="required">
      <input type="text" class="form-control" style="margin-bottom:5px;" name="telp" placeholder="Telepon" required="required">
      <input type="email" class="form-control" style="margin-bottom:5px;" name="email" placeholder="Email" required="required">
      <input type="password" class="form-control" style="margin-bottom:20px;" name="password" placeholder="Password" required="required">
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="register" value="Register"></input>
      <a class="btn btn-lg btn-primary btn-block" href="<?= base_url('login')?>" type="submit">Login</a>
    </form>
</div>

<div style="margin: 0; background-image: url(<?= base_url()?>/assets/front/images/hero-bg.jpg);background-repeat:no-repeat;background-size:cover;"
    class="shop login">
    <div class="container">
        <div class="row">
            <div style="color:#fff; background:lightgrey;opacity:0.9;" class="mx-auto col-sm-5 col-12">
                <div class="m-5 login-form">
                    <h2 class="text-center mb-4">Register</h2>

                    <form class="form" method="post" action="<?= base_url('authregister') ?>">
                        <?php if (session()->getFlashdata('info') != null) : ?>
                        <center>
                            <div class="alert alert-danger" role="alert"><?= session()->getFlashdata('info') ?></div>
                        </center>
                        <?php endif?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000"><b>Nama</b></label>
                                    <input type="text" name="pelanggan" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000"><b>Alamat</b></label>
                                    <input type="text" name="alamat" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000">
                                        <b?>Telepon</b>
                                    </label>
                                    <input type="number" name="telp" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000"><b>Email</b></label>
                                    <input type="email" name="email" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label style="color : #000"><b>Password</b></label>
                                    <input type="password" name="password" required="required">
                                </div>
                            </div>
                            <div class="col-12 mx-auto">
                                <input style="background : #ffc107" class="btn btn-warning btn-block" type="submit"
                                    name="register" value="Submit">
                            </div>
                            <div class="col-12 mx-auto">
                                <a style="background : red" class="btn btn-warning btn-block text-center"
                                    href="<?= base_url('login')?>">Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>