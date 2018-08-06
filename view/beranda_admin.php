<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Beranda Admin</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="admin">
	<h1>Beranda Admin</h1>
	<h2>Selamat datang <?php echo $_SESSION['username']; ?> di Tracer Study</h2>

	<div class="flex flex-hcenter">
		<?php foreach ($data as $value): ?>
		<div class="admin">
			<table><form action="updateAdmin" method="POST">
				<input type="hidden" name="id" value="<?php echo $value['id_user'] ?>">
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username" value="<?php echo $value['username'] ?>" class="form-text"></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><input type="mail" name="namaLengkap" value="<?php echo $value['nama_lengkap_user'] ?>" class="form-text"></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td>:</td>
					<td><input type="text" name="telp" value="<?php echo $value['telepon'] ?>" class="form-text" style="width: 50%; float: left;"></td>
				</tr>

				<tr>
					<td>WA/SMS</td>
					<td>:</td>
					<td><input type="text" name="sms" value="<?php echo $value['sms'] ?>" class="form-text" style="width: 50%; float: left;"></td>
				</tr>

				<tr>
					<td>E-mail</td>
					<td>:</td>
					<td><input type="email" name="mail" value="<?php echo $value['email'] ?>" class="form-text"></td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><textarea name="alamat" class="form-textarea"><?php echo$value['alamat'] ?></textarea></td>
				</tr>

				<tr>
					<td>Website</td>
					<td>:</td>
					<td><input type="text" name="website" value="<?php echo$value['website'] ?>" class="form-text"></td>
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
			<?php endforeach ?></form></table>
		</div>
	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>