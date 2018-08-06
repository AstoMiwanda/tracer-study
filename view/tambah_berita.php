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

		<form action="tambahBerita" method="POST">
			<div class="form-alumni">
				<table>
					<input type="hidden" name="tanggal_berita" class="form-text-alumni" value="<?php echo $tgl = date('Y-m-d') ?>">
					<input type="hidden" name="penulis_berita" class="form-text-alumni" value="<?php echo $_SESSION['username']; ?>">
					<tr>
						<td>Judul Berita</td>
						<td>:</td>
						<td><input type="text" name="judul_berita" class="form-text-alumni" placeholder="Judul Berita"></td>
					</tr>					
					<tr>
						<td>Isi Berita</td>
						<td>:</td>
						<td><textarea name="isi_berita" rows="3" class="form-textarea-alumni" placeholder="Isi Berita"></textarea></td>
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