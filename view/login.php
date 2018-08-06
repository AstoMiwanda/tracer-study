<!DOCTYPE html>
<html>
<head>
	<title>Login Tracer Study</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="login">
	<h1>Login</h1>
	<h2>Selamat datang kembali di Trace Study</h2>

	<div class="flex flex-hcenter">
		<div class="form-login">
			<form action="loginSubmit" method="POST">
				<input type="text" name="username" class="form-text" placeholder="Username">
				<input type="password" name="password" class="form-text" placeholder="Password">
				<input type="submit" value="LOGIN" class="form-submit flex flex-hcenter flex-vcenter">
			</form>
		</div>
	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>