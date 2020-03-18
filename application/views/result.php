<!DOCTYPE html>
<html lang="en">
<head>
<title>List Penyakit</title>
<?php $this->load->view("_partials/head.php") ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/services.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/services_responsive.css') ?>">
</head>
<body>

<div class="super_container">
	
	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url('images/services.jpg') ?>" data-speed="0.8"></div>

		<!-- Header -->

		<?php $this->load->view('_partials/navbar.php') ?>

		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content">
							<div class="home_title">List Penyakit</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Hasil Pencarian Penyakit</div>
					<div class="section_subtitle">to choose from</div>
				</div>
			</div>
			<div class="row icon_boxes_row">

				<?php
					if(count($cari)>0){
						foreach ($cari as $data): ?>
							<div class="col-xl-3 col-lg-6">
								<div class="icon_box">
									<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
										<div class="icon_box_icon"><img src="<?php echo base_url('images/icon_4.svg') ?>" alt=""></div>
										<div class="icon_box_title">
											<a href="<?php echo site_url('penyakit/view/'.$data->ID_PENYAKIT) ?>" class="btn btn-small"><?php echo $data->NAMA_PENYAKIT ?></a>
											
										</div>
									</div>
									<div class="icon_box_text"><?php echo substr($data->BAHAN, 0,100) ?> ...</div>
								</div>
							</div>
						<?php endforeach;
					}else{ ?>
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="section_title">Data Tidak Di Temukan</div>
									<div class="section_subtitle">Maaf data yang anda masukan tidak ada</div>
								</div>
							</div>
						</div>
					<?php }
				?>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<?php $this->load->view("_partials/footer.php") ?>
</div>

<?php $this->load->view("_partials/js.php") ?>
<script src="<?php echo base_url('js/services.js') ?>"></script>
</body>
</html>