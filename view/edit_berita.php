<!DOCTYPE html>
<html>
<head>
	<title>Edit Berita</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="admin">
	<h1>Edit Berita</h1>
	<h2>Selamat datang <?php $name = "Iis"; echo $name; ?> di Tracer Study</h2>

	<div class="flex flex-hcenter">
		<div class="admin">
			<table><form action="../updateBeritaSubmit" method="POST"><?php foreach ($data as $value): ?>
				<tr>
					<td>Judul</td>
					<td>:</td>
					<td><input type="text" name="judul" value="<?php echo $value['judul_berita'] ?>" class="form-text" style="width: 50%; float: left;"></td>
				</tr>

				<tr>
					<td>Isi</td>
					<td>:</td>
					<td><textarea name="isi" class="form-textarea"><?php echo $value['isi_berita']; ?></textarea></td>
				</tr>

				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
				</tr>

				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<input type="hidden" name="id" value="<?php echo $value['id_berita'] ?>">
					<td><input type="submit" name="submit" value="SIMPAN" class="btn btn-simpan"></td>
				</tr>
			<?php endforeach ?></form></table>
		</div>
	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>