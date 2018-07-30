<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Pengumuman</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="http://localhost/tracer-study/assets/css/index.css">
	<link rel="stylesheet" href="http://localhost/tracer-study/assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="bg-form">
	<div class="bg-form">
		<h1>Data Pengumuman</h1>
		<h2>Melihat dan mengubah data pengumuman Tracer Study</h2>

		<form action="tambahPengumuman" method="POST">
			<div class="form-alumni">
				<table>
					<input type="hidden" name="tanggal_pengumuman" class="form-text-alumni" value="<?php echo $tgl = date('Y-m-d') ?>">
					<input type="hidden" name="penulis_pengumuman" class="form-text-alumni" value="<?php echo $_SESSION['username']; ?>">
					<tr>
						<td>Judul Pengumuman</td>
						<td>:</td>
						<td><input type="text" name="judul_pengumuman" class="form-text-alumni" placeholder="Judul Pengumuman"></td>
					</tr>					
					<tr>
						<td>Isi Pengumuman</td>
						<td>:</td>
						<td><textarea name="isi_pengumuman" rows="3" class="form-textarea-alumni" placeholder="Isi Pengumuman"></textarea></td>
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