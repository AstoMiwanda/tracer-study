<!DOCTYPE html>
<html>
<head>
	<title>Edit Data Alumni</title>
	<link rel="stylesheet" type="text/css" href="http://localhost/tracer-study/assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/tracer-study/assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="bg-form">
	<div class="bg-form">
		<h1>Data Alumni</h1>
		<h2>Melihat dan mengubah data alumni Tracer Study</h2>

		<?php foreach ($data as $value): ?>
			<form action="../updateAlumniSubmit" method="POST">
				<div class="form-alumni">
					<table>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td><input type="text" name="nama" class="form-text-alumni" value="<?php echo $value['nama_lengkap_alumni']; ?>"></td>
						</tr>
						<tr>
							<td>Angkatan</td>
							<td>:</td>
							<td><input type="text" name="angkatan" class="form-text-alumni" value="<?php echo $value['angkatan']; ?>"></td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td>:</td>
							<td><input type="text" name="pekerjaan" class="form-text-alumni" value="<?php echo $value['pekerjaan']; ?>"></td>
						</tr>
						<tr>
							<td>E-mail</td>
							<td>:</td>
							<td><input type="text" name="email" class="form-text-alumni" value="<?php echo $value['email']; ?>"></td>
						</tr>
						<tr>
							<td>No HP</td>
							<td>:</td>
							<td><input type="text" name="nohp" class="form-text-alumni" value="<?php echo $value['no_hp']; ?>"></td>
						</tr>
						<tr>
							<td>No Ijazah</td>
							<td>:</td>
							<td><input type="text" name="no_ijazah" class="form-text-alumni" value="<?php echo $value['no_ijazah']; ?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><textarea name="alamat" rows="3" class="form-textarea-alumni"><?php echo $value['alamat']; ?></textarea></td>
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
						<input type="hidden" name="id" value="<?php echo $value['id_alumni']; ?>">
					</table>
				</div>
			</form>	
		<?php endforeach ?>
	</div>	
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>