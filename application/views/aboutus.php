<!DOCTYPE html>
<html lang="en">
<head>
	<title>About Us</title>
	<?php $this->load->view("_partials/head.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/about.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/about_responsive.css') ?>">
</head>
<body>

<div class="super_container">
	
	<!-- Home -->

	<div class="home">
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('images/about.jpg') ?>" data-speed="0.8"></div>

		<!-- Header -->

		<?php $this->load->view("_partials/navbar.php") ?>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content" style="padding-top: 105px;">
							<div class="home_title">About us</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">A few words about us</div>
					<div class="section_subtitle">too choose from</div>
				</div>
			</div>
			<div class="row about_row row-eq-height">
				<div class="col-lg-4">
					<div class="logo">
						<a href="#">herbal<span>life+</span></a>	
					</div>
					<div class="about_text_highlight">Herballife merupakan website yang berisi cara pengobatan penyakit terutama menggunakan tumbuhan herbal</div>
				</div>
				<div class="col-lg-4">
					<div class="about_text_2">
						<p><b>Menu Penyakit : </b>Berisi data - data penyakit</p>
						<p><b>Menu Katalog : </b>Berisi seluruh daftar tumbuhan yang bisa digunakan sebagai obat</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about_image"><img src="<?php echo base_url('images/about_1.jpg') ?>" alt=""></div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<?php $this->load->view("_partials/footer.php") ?>
</div>

<?php $this->load->view("_partials/js.php") ?>
</body>
</html>