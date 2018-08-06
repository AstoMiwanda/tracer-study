<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Kontak Kami</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css">
</head>
<body>

<?php require_once './template/header.php'; ?>

<div id="kontak-kami">
	<h1>Kontak Kami</h1>

	<div class="kontak-kami">
		<div class="testimonial">
			<div class="flex flex-vcenter">
				<div class="profile-img">
					<img src="<?php echo base_url(); ?>assets/img/profile-img.jpg" class="img-profile">
				</div>

				<div class="profile-id">
					<p class="profile-name">Iis Yuliani</p>
					<p class="profile-ket">CEO</p>
				</div>
			</div>

			<p class="profile-testimonial">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

		</div>

		<div class="kontak-info">
			<div class="flex flex-vcenter">
				<img src="<?php echo base_url(); ?>assets/img/phone.png" class="img-kontak">
				<p class="info-kontak">021-219-0801</p>
			</div>
			<div class="flex flex-vcenter">
				<img src="<?php echo base_url(); ?>assets/img/call.png" class="img-kontak">
				<p class="info-kontak">081326923754</p>
			</div>
			<div class="flex flex-vcenter">
				<img src="<?php echo base_url(); ?>assets/img/mail.png" class="img-kontak">
				<p class="info-kontak">astomiwanda08@gmail.com</p>
			</div>
			<div class="flex flex-vcenter">
				<img src="<?php echo base_url(); ?>assets/img/address.png" class="img-kontak">
				<p class="info-kontak">Jl.D.I.Panjaitan No.128, Purwokerto</p>
			</div>
			<div class="flex flex-vcenter">
				<img src="<?php echo base_url(); ?>assets/img/website.png" class="img-kontak">
				<p class="info-kontak">www.smktelkom-pwt.sch.co.id</p>
			</div>
		</div>
	</div>
</div>

<?php require_once './template/footer.php'; ?>

</body>
</html>