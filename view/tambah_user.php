<!DOCTYPE html>
<html>
<head>
	<title>Tambah Alumni</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="bg-form">
	<div class="bg-form">
		<h1>Data Alumni</h1>
		<h2>Melihat dan mengubah data alumni Tracer Study</h2>

		<form action="tambahUser" method="POST">
			<div class="form-alumni">
				<table>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td><input type="text" name="nama_lengkap_user" class="form-text-alumni" placeholder="Nama lengkap"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" class="form-text-alumni" placeholder="Username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password" class="form-text-alumni" placeholder="Password"></td>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td>&nbsp</td>
						<td>&nbsp</td>
					</tr>
					<tr>
						<td>&nbsp</td>
						<td>&nbsp</td>
						<td><input type="submit" value="SIMPAN" class="btn btn-simpan"></td>
					</tr>
				</table>
			</div>
		</form>	
	</div>	
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>