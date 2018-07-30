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

<div id="konten">
	<div class="containers">
		<h1>Management Pengumuman</h1>
		<h2>welcome <?php echo $_SESSION['username']; ?></h2>
		
		<div class="data-menu">
			<div class="data-menukiri" style="width: 400px;">
				<div class="data-submenu">
					<h2>Tampilkan</h2>
					<h3>:</h3>
					<form>
						<select name="tampilkan" onchange="this.form.submit()" class="form-filter">
							<option selected value="5">5</option>
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
						</select>
					</form>
				</div>

				<form action="data_berita" method="GET">
					<div class="cari-alumni" style="width: 200px;">
						<input type="text" name="cari" placeholder="Cari data pengumuman" class="form-cari">
						<input type="submit" value="" class="img-cari">
					</form>
				</div>
			</div>

			<div class="data-menukanan">
				<button id="myBtn" class="btn btn-uploadExcel">Upload Excel</button>
				<a href="getTambahPengumuman" class="btn btn-tambah">Tambah Pengumuman</a>
			</div>
		</div>

		<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<form name="myForm" id="myForm" onSubmit="return validateForm()" action="./uploadPengumuman" method="POST" enctype="multipart/form-data">
					<div class="flex flex-vcenter">
						<input type="file" id="dataPengumuman" name="dataPengumuman" required />
						<input type="submit" name="submit" value="Import" class="btn btn-tambah" /><br/>
					</div>
					<label><input type="checkbox" name="drop" value="1" style="margin-top: 15px;" /> <u>Kosongkan tabel sql terlebih dahulu.</u></label>
				</form>
			</div>
		</div>

		<div class="data-alumni">
			<div class="header-alumni">Data Pengumuman SMK Telkom Puwokerto</div>

			<table class="table-alumni" border="1">
				<tr>
					<th>ID</th>
					<th>JUDUL</th>
					<th>PENULIS</th>
					<th>TANGGAL</th>
					<th>ISI</th>
					<th colspan="2">AKSI</th>
				</tr>
				<?php foreach ($data as $value): ?>
					<tr>
						<td style="max-width: 50px;"><?php echo $value['id_pengumuman']; ?></td>
						<td style="max-width: 150px;"><?php echo $value['judul_pengumuman']; ?></td>
						<td style="max-width: 100px;"><?php echo $value['penulis_pengumuman']; ?></td>
						<td style="max-width: 100px;"><?php echo $value['tanggal_pengumuman']; ?></td>
						<td style="max-width: 250px;"><?php echo $value['isi_pengumuman']; ?></td>
						<td style="max-width: 50px;"><a style="color: #F97A66" href="deletePengumuman/?id=<?php echo $value['id_pengumuman']?>">Hapus</a></td>
						<td  style="max-width: 50px;"><a style="color: #FCC04E" href="updatePengumuman/?id=<?php echo $value['id_pengumuman']?>">Edit</a></td>
					</tr>
				<?php endforeach ?>
			</table>

			<div class="flex flex-spaceBetween">
				<a href="home.php" class="btn btn-uploadExcel">Upload Excel</a>

				<div class="pagging">
					<?php
						if($total_laman > 1) {
							if($laman_sekarang > 1) { ?>
								<a href="./data_pengumuman?laman=<?php echo $laman_sekarang - 1 ?>">Sebelumnya</a>
							<?php } else { ?>
								Sebelumnya
							<?php }

							if($laman_sekarang < $total_laman) { ?>
								<a href="./data_pengumuman?laman=<?php echo $laman_sekarang + 1 ?>">Selanjutnya</a>
							<?php } else { ?>
								Selanjutnya
							<?php }
						}
					?>
				</div>
			</div>
		</div>

	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>