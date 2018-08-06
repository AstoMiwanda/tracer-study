<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/template.css">

<?php require_once 'excel_reader.php'; ?>

<div id="header">
	<div class="containers">
		<div class="header-top">
			<div class="logo">
				<img src="<?php echo base_url(); ?>assets/img/logo.png" class="logo-img">
			</div>

			<div class="title">
				<h1>TRACER STUDY</h1>
				<h2>SMK Telkom Purwokerto</h2>
			</div>

			<div class="kontak">
				<div class="mail">
					<img src="<?php echo base_url(); ?>assets/img/mail.png" class="kontak-img">
					<div class="kontak-teks">smktel.pwt@gmail.com</div>
				</div>

				<div class="phone">
					<img src="<?php echo base_url(); ?>assets/img/phone.png" class="kontak-img">
					<div class="kontak-teks">029-110-0801</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="menu">
	<div class="containers">
		<div class="list-menu">
			<ul>
				<li><a href="home">Beranda</a></li>
				<div class="line-menu"></div>
				<li><a href="data_alumni">Alumni</a></li>
				<div class="line-menu"></div>
				<li><a href="pengumuman">Pengumuman</a></li>
				<div class="line-menu"></div>
				<li><a href="berita">Berita</a></li>
				<div class="line-menu"></div>
				<li><a href="kontak_kami">Hubungi Kami</a></li>
				<?php if (isset($_SESSION['username'])) { ?>

						<div class="line-menu"></div>
						<li>
							<div class="dropdown">
								<div class="dropbtn" onclick="dropdown()"></div>

								<div id="myDropdown" class="dropdown-content">
									<a href="beranda_admin" style="color: #222;">Beranda Admin</a>
									<a href="data_alumni" style="color: #222;">Data Alumni</a>
									<a href="data_berita" style="color: #222;">Data Berita</a>
									<a href="data_pengumuman" style="color: #222;">Data Pengumuman</a>
									<a href="data_user" style="color: #222;">Data User</a>
									<a href="logout" style="color: #222;">Logout</a>
								</div>
							</div>
						</li>

				<?php }else { ?>

						<div class="line-menu"></div>
						<li><a href="login">Login</a></li>

				<?php } ?>
			</ul>
		</div>
	</div>
</div>