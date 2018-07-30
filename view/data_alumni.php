<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Alumni</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="http://localhost/tracer-study/assets/css/index.css">
	<link rel="stylesheet" href="http://localhost/tracer-study/assets/css/font.css">
</head>
<body>

<?php require_once './template/excel_reader.php'; ?>
<?php require_once './template/header.php'; ?>

<div id="konten">
	<div class="containers">
		<h1>Info Alumni</h1>
		<h2>welcome <?php echo $_SESSION['username']; ?></h2>

		<div class="data-menu">
			<div class="data-menukiri">
				<form method="get" action="data_alumni">
					<div class="data-submenu">
						<h2>Angkatan</h2>
						<h3>:</h3>
						<select name="filter" class="form-filter" onchange="this.form.submit()">
							<option value="tampilkan_semua">Tampilkan Semua</option>
							<option value="21">Angkatan 21</option>
							<option value="22">Angkatan 22</option>
							<option value="23">Angkatan 23</option>
							<option value="24">Angkatan 24</option>
						</select>
					</div>
				</form>

				<form method="get" action="data_alumni">
					<div class="data-submenu">
						<h2>Tampilkan</h2>
						<h3>:</h3>
						<select name="per_laman" class="form-filter" onchange="this.form.submit()">
							<option value="10">10</option>
							<option value="20">20</option>
							<option value="50">50</option>
						</select>
					</div>
				</form>

				<form method="get" action="data_alumni">
					<div class="cari-alumni">
						<input type="text" name="cari" placeholder="Cari data alumni" class="form-cari">
						<input type="submit" value="" class="img-cari">
					</form>
				</div>
			</div>

			<div class="data-menukanan">
				<button id="myBtn" class="btn btn-uploadExcel">Upload Excel</button>
				<a href="getTambahAlumni" class="btn btn-tambah">Tambah Alumni</a>
			</div>
		</div>

		<div id="myModal" class="modal">
			<!-- Modal content -->
			<div class="modal-content">
				<span class="close">&times;</span>
				<form name="myForm" id="myForm" onSubmit="return validateForm()" action="./uploadAlumni" method="POST" enctype="multipart/form-data">
					<div class="flex flex-vcenter">
						<input type="file" id="dataAlumni" name="dataAlumni" required />
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
					<th>NAMA</th>
					<th>ANGKATAN</th>
					<th>PEKERJAAN</th>
					<th colspan="2">AKSI</th>
				</tr>
				<?php foreach ($data as $value): ?>
					<tr>
						<td><?php echo $value['id_alumni']; ?></td>
						<td><?php echo $value['nama_lengkap_alumni']; ?></td>
						<td><?php echo $value['angkatan']; ?></td>
						<td><?php echo $value['pekerjaan']; ?></td>
						<td><a style="color: #F97A66" href="deleteAlumni/?id=<?php echo $value['id_alumni']?>">Hapus</a></td>
						<td><a style="color: #FCC04E" href="updateAlumni/?id=<?php echo $value['id_alumni']?>">Edit</a></td>
					</tr>
				<?php endforeach ?>
			</table>

			<div class="flex flex-spaceBetween">
				<a href="home.php" class="btn btn-uploadExcel">Upload Excel</a>

				<div class="pagging">
					<?php
						if($total_laman > 1) {
							if($laman_sekarang > 1) { ?>
								<a href="./data_alumni?laman=<?php echo $laman_sekarang - 1 ?>">Sebelumnya</a>
							<?php } else { ?>
								Sebelumnya
							<?php }

							if($laman_sekarang < $total_laman) { ?>
								<a href="./data_alumni?laman=<?php echo $laman_sekarang + 1 ?>">Selanjutnya</a>
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