<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tracer Study</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="http://localhost/tracer-study/assets/css/home.css">
	<link rel="stylesheet" href="http://localhost/tracer-study/assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div class="containers">
	<div id="bg-konten">
		<div id="content">
			<div class="kotak-berita">
				<div class="bg-img" style="background-image: url('./assets/img/GoesToJapan.png');">
					<div class="theme-box">
						<div class="theme-title theme-pengumuman">
							Kotak Pengumuman
						</div>
					</div>
				</div>

				<div class="bg-content">
					<div class="publisher">
						<div class="status"></div>
						<h2>Iis Yuliane</h2>
						<div class="line"></div>
						<h3>20 Mei 2018</h3>
					</div>

					<h1>SMK Telkom Purwokerto Goes to Japan</h1>
					<p>Sebanyak 15 siswa yang telah lolos seleksi tahap akhir yaitu medical check-up, hari ini melakukan pemantapan program belajar Bahasa Jepang bersama ISH yang diwakili oleh bapak Hafiz.</p>
				</div>
			</div>
		</div>

		<div id="content-list">
			<h1>Pengumuman Lainnya</h1>

			<?php for ($i=0; $i<5; $i++) { ?>
				<div class="list">
					<div class="img" style="background-image: url('./assets/img/GoesToJapan.png');"></div>

					<div class="info">
						<h2>Rekrutmen PT Huawei</h2>

						<div class="publisher">
							<div class="status"></div>
							<h3>Iis Yuliane</h3>
							<div class="line"></div>
							<h4>20 Mei 2018</h4>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>