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
    <form class="form-signin form" method="post" action="<?= base_url('/authlogin') ?>">  

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

      <h2 class="form-signin-heading">Please login</h2>
      <input type="email" class="form-control" style="margin-bottom:5px;" name="email" placeholder="Email Address" required="required">
      <input type="password" class="form-control" style="margin-bottom:20px;" name="password" placeholder="Password" required="required">
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="Login"></input>
      <a class="btn btn-lg btn-primary btn-block" href="<?= base_url('register')?>" type="submit">Register</a>
    </form>
  </div>

<?= $this->endSection() ?>