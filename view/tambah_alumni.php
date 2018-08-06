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

		<form action="tambahAlumni" method="POST">
			<div class="form-alumni">
				<table>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" class="form-text-alumni" placeholder="Nama lengkap"></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td><input type="text" name="tempat_lahir" class="form-text-alumni" placeholder="Tempat lahir"></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td><input type="text" name="tanggal_lahir" class="form-text-alumni" placeholder="yyyy-mm-dd"></td>
					</tr>
					<tr>
						<td>Angkatan</td>
						<td>:</td>
						<td><input type="text" name="angkatan" class="form-text-alumni" placeholder="Angkatan 24 (lulus tahun 2019)"></td>
					</tr>
					<tr>
						<td>Pekerjaan</td>
						<td>:</td>
						<td><input type="text" name="pekerjaan" class="form-text-alumni" placeholder="Pekerjaan"></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td>:</td>
						<td><input type="email" name="email" class="form-text-alumni" placeholder="emailalumni@email.com"></td>
					</tr>
					<tr>
						<td>No HP</td>
						<td>:</td>
						<td><input type="text" name="nohp" class="form-text-alumni" placeholder="No HP"></td>
					</tr>
					<tr>
						<td>No Ijazah</td>
						<td>:</td>
						<td><input type="text" name="no_ijazah" class="form-text-alumni" placeholder="No Ijazah"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><textarea name="alamat" rows="3" class="form-textarea-alumni" placeholder="Alamat"></textarea></td>
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