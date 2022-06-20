<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
	<link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>

    <div class="login_box">
		<p class="login_text">SignIn</p>
      <?php if(session()->getFlashdata('flash_msg')):?>
		<div class="alert alert-danger">
			<?= session()->getFlashdata('flash_msg') ?>
		</div>
	<?php endif;?>
		<form action="" method="post">
			<label for="InputForEmail" class="form-label">Email address</label>
			<input type="email" name="email" class="form_login" id="InputForEmail" value="<?= set_value('email') ?>" placeholder="Username or email ...">

			<label for="InputForPassword" class="form-label">Password</label>
			<input type="password" name="password" class="form_login" id="InputForPassword" placeholder="Password ...">

			<button type="submit" class="btn btn_primary">Login</button>
		</form>
	</div>
</body>
</html>