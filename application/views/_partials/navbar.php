<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="#">herbal<span>life+</span></a>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
											<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li class="active"><a href="<?php echo site_url('') ?>">Home</a></li>
													<li><a href="<?php echo site_url('penyakit') ?>">Penyakit</a></li>
													<li><a href="<?php echo site_url('tumbuhan') ?>">Katalog</a></li>
													<li><a href="<?php echo site_url('aboutus') ?>">About Us</a></li>
												</ul>
											</nav>
											<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
												<form action="<?php echo site_url('penyakit/search') ?>" id="search_container_form" class="search_container_form" action="GET">
													<input type="text" class="search_container_input" name="cari" placeholder="Pencarian Penyakit" required="required">
													<button class="search_container_button" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>