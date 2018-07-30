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

<div id="admin">
	<h1>Edit Pengumuman</h1>
	<h2>Selamat datang <?php echo $_SESSION['username']; ?> di Tracer Study</h2>

	<div class="flex flex-hcenter">
		<div class="admin">
			<table><form action="../updatePengumumanSubmit" method="POST"><?php foreach ($data as $value): ?>
				<tr>
					<td>Judul</td>
					<td>:</td>
					<td><input type="text" name="judul" value="<?php echo $value['judul_pengumuman'] ?>" class="form-text" style="width: 50%; float: left;"></td>
				</tr>

				<tr>
					<td>Isi</td>
					<td>:</td>
					<td><textarea name="isi" class="form-textarea"><?php echo $value['isi_pengumuman']; ?></textarea></td>
				</tr>

				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<td>&nbsp</td>
				</tr>

				<tr>
					<td>&nbsp</td>
					<td>&nbsp</td>
					<input type="hidden" name="id" value="<?php echo $value['id_pengumuman'] ?>">
					<td><input type="submit" name="submit" value="SIMPAN" class="btn btn-simpan"></td>
				</tr>
			<?php endforeach ?></form></table>
		</div>
	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>