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

			<?php foreach ($berita as $value): ?>
				<div class="kotak-berita">
					<div class="bg-img" style="background-image: url('./assets/img/GoesToJapan.png');">
						<div class="theme-box">
							<div class="theme-title theme-pengumuman">
								Kotak <?php echo $value['tema']; ?>
							</div>
						</div>
					</div>

					<div class="bg-content">
						<div class="publisher">
							<div class="status"></div>
							<h2><?php echo $value['penulis_berita']; ?></h2>
							<div class="line"></div>
							<h3><?php echo $value['tanggal_berita']; ?></h3>
						</div>

						<h1><?php echo $value['judul_berita']; ?></h1>
						<p><?php echo $value['isi_berita']; ?></p>
					</div>
				</div>
			<?php endforeach ?>

		</div>

		<div id="content-list">
			<h1>Berita Lainnya</h1>

			<?php foreach ($listBerita as $list): ?>
				
				<div class="list">
					<div class="img" style="background-image: url('./assets/img/GoesToJapan.png');"></div>

					<div class="info">
						<h2><?php echo $list['judul_berita']; ?></h2>

						<div class="publisher">
							<div class="status"></div>
							<h3><?php echo $list['penulis_berita']; ?></h3>
							<div class="line"></div>
							<h4><?php echo $list['tanggal_berita']; ?></h4>
						</div>
					</div>
				</div>

			<?php endforeach ?>

		</div>
	</div>
</div>

<div class="containers">
	<div id="line"></div>
</div>

<div class="containers">
	<div id="bg-konten">
		<div id="content">

			<?php foreach ($pengumuman as $value): ?>
				<div class="kotak-berita">
					<div class="bg-img" style="background-image: url('./assets/img/GoesToJapan.png');">
						<div class="theme-box">
							<div class="theme-title">
								Kotak <?php echo $value['tema']; ?>
							</div>
						</div>
					</div>

					<div class="bg-content">
						<div class="publisher">
							<div class="status"></div>
							<h2><?php echo $value['penulis_pengumuman']; ?></h2>
							<div class="line"></div>
							<h3><?php echo $value['tanggal_pengumuman']; ?></h3>
						</div>

						<h1><?php echo $value['judul_pengumuman']; ?></h1>
						<p><?php echo $value['isi_pengumuman']; ?></p>
					</div>
				</div>	
			<?php endforeach ?>

		</div>

		<div id="content-list">
			<h1>Pengumuman Lainnya</h1>

			<?php foreach ($listPengumuman as $list): ?>
				<div class="list">
					<div class="img" style="background-image: url('./assets/img/GoesToJapan.png');"></div>

					<div class="info">
						<h2><?php echo $list['judul_pengumuman']; ?></h2>

						<div class="publisher">
							<div class="status"></div>
							<h3><?php echo $list['penulis_pengumuman']; ?></h3>
							<div class="line"></div>
							<h4><?php echo $list['tanggal_pengumuman']; ?></h4>
						</div>
					</div>
				</div>				
			<?php endforeach ?>
				
		</div>
	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>