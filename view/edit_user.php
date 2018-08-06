<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="admin">
	<h1>Edit User</h1>
	<h2>Selamat datang <?php $name = "Iis"; echo $name; ?> di Tracer Study</h2>

	<div class="flex flex-hcenter">
		<div class="admin">
			<<?php foreach ($data as $value): ?>
				
			<?php endforeach ?>
			<table><form action="../updateUserSubmit" method="POST">
				<input type="hidden" name="id" value="<?php echo $value['id_user'] ?>">
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $value['nama_lengkap_user'] ?>" class="form-text"></td>
				</tr>

				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" value="<?php echo $value['username'] ?>" class="form-text"></td>
				</tr>

				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password" value="<?php echo $value['password'] ?>" class="form-text"></td>
				</tr>

				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
				</tr>

				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td><input type="submit" name="submit" value="SIMPAN" class="btn btn-simpan"></td>
				</tr>
			</form></table>
		</div>
	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>