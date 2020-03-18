<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $penyakits->NAMA_PENYAKIT ?></title>
	<?php $this->load->view("_partials/head.php") ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/about.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/about_responsive.css') ?>">
</head>
<body>

<div class="super_container">
	
	<!-- Home -->

	<div class="home">
		<!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('images/news.jpg') ?>" data-speed="0.8"></div>

		<!-- Header -->

		<?php $this->load->view("_partials/navbar.php") ?>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content" style="padding-top: 105px;">
							<div class="home_title">About Penyakit</div>
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
					<div class="section_title"><?= $penyakits->NAMA_PENYAKIT ?></div>
					<div class="section_subtitle">Herbal Life</div>
				</div>
			</div>
			<div class="row about_row row-eq-height">
				<div class="col-lg-4">
					<div class="about_text_2">
						<p><b>Bahan : </b><?= $penyakits->BAHAN ?></p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about_text_2">
						<p><b>Penggunaan : </b><?= $penyakits->PENGGUNAAN ?></p>
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