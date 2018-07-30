<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Berita</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="http://localhost/tracer-study/assets/css/index.css">
	<link rel="stylesheet" href="http://localhost/tracer-study/assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="konten">
	<div class="containers">
		<h1>Management Berita</h1>
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
						<input type="text" name="cari" placeholder="Cari data alumni" class="form-cari">
						<input type="submit" value="" class="img-cari">
					</form>
				</div>
			</div>

			<div class="data-menukanan">
				<button id="myBtn" class="btn btn-uploadExcel">Upload Excel</button>
				<a href="getTambahBerita" class="btn btn-tambah">Tambah Berita</a>
			</div>
		</div>

		<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<form name="myForm" id="myForm" onSubmit="return validateForm()" action="./uploadBerita" method="POST" enctype="multipart/form-data">
					<div class="flex flex-vcenter">
						<input type="file" id="dataBerita" name="dataBerita" required />
						<input type="submit" name="submit" value="Import" class="btn btn-tambah" /><br/>
					</div>
					<label><input type="checkbox" name="drop" value="1" style="margin-top: 15px;" /> <u>Kosongkan tabel sql terlebih dahulu.</u></label>
				</form>
			</div>
		</div>

		<div class="data-alumni">
			<div class="header-alumni">Data Alumni SMK Telkom Puwokerto</div>

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
						<td style="max-width: 10px;"><?php echo $value['id_berita']; ?></td>
						<td style="max-width: 100px;"><?php echo $value['judul_berita']; ?></td>
						<td style="max-width: 50px;"><?php echo $value['penulis_berita']; ?></td>
						<td style="max-width: 50px;"><?php echo $value['tanggal_berita']; ?></td>
						<td style="max-width: 250px;"><?php echo $value['isi_berita']; ?></td>
						<td style="max-width: 25px;"><a style="color: #F97A66" href="deleteBerita/?id=<?php echo $value['id_berita']?>">Hapus</a></td>
						<td style="max-width: 25px;"><a style="color: #FCC04E" href="updateBerita/?id=<?php echo $value['id_berita']?>">Edit</a></td>
					</tr>
				<?php endforeach ?>
			</table>

			<div class="flex flex-spaceBetween">
				<a href="home.php" class="btn btn-uploadExcel">Upload Excel</a>

				<div class="pagging">
					<?php
						if($total_laman > 1) {
							if($laman_sekarang > 1) { ?>
								<a href="./data_berita?laman=<?php echo $laman_sekarang - 1 ?>">Sebelumnya</a>
							<?php } else { ?>
								Sebelumnya
							<?php }

							if($laman_sekarang < $total_laman) { ?>
								<a href="./data_berita?laman=<?php echo $laman_sekarang + 1 ?>">Selanjutnya</a>
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