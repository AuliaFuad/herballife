<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $tumbuhans->NAMA_TUMBUHAN ?></title>
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
							<div class="home_title">About Tumbuhan</div>
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
					<div class="section_title"><?= $tumbuhans->NAMA_TUMBUHAN ?></div>
					<div class="section_subtitle">Herbal Life</div>
				</div>
			</div>
			<div class="row about_row row-eq-height">
				<div class="col-lg-4">
					<div class="about_image">
						<img src="<?php echo base_url('images/'.$tumbuhans->GAMBAR) ?>" alt="" width="250" height="250">
						
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about_text_2">
						<p><b>Kegunaan : </b><?= $tumbuhans->DESKRIPSI ?></p>
					</div>
				</div>
				<div class="col-lg-4">
					
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