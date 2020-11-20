<?php

$settings = get_fields('theme-options');
?>
<style>
	#hero{background-image: url(<?php echo $settings["banner"]["url"]; ?>) !important;}
	
	.vbox-content{ margin-top: 250px !important; margin-bottom: 200px !important;}
</style>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<title>
		<?php
		wp_title('|', false, 'right');
		?>
	</title>
	<?php wp_head(); ?>
</head>

<body>
	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
		<div class="container d-flex align-items-center">

			<div class="logo mr-auto">
				<h1 class="text-light"><a href="<?= get_home_url() ?>"><span>Cristiano Group SRL</span></a></h1>
				<!-- Uncomment below if you prefer to use an image logo -->
				<!--<a href="<?= get_home_url() ?>"><img src="<?= $settings['logo']['url']; ?>" alt="" class="img-fluid"></a>-->
			</div>

			<nav class="nav-menu d-none d-lg-block">
				<?php
				wp_nav_menu([
					'theme_location'	=> 'primary',
					'container'			=> 'ul',
				]);
				?>
			</nav><!-- .nav-menu -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Hero Section ======= -->
	<section id="hero">

		<div class="container">
			<div class="row">
				<div class="col-lg-7  pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
					<div data-aos="zoom-out">
						<h2><?= $settings['testo_su_banner']; ?></h2>
						<h3><?= $settings['sottotitolo_su_banner']; ?></h3>
						<?php if($settings['button_banner']):?>
						<div class="text-center text-lg-left">
              				<a href="/<?=$settings['button_banner']; ?>" class="btn-get-started scrollto"><?=$settings['text_button']; ?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
					<img src="<?= $settings['hero']['url']; ?>" class="img-fluid animated" alt="">
				</div>
			</div>
		</div>

		<svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
			<defs>
				<path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
			</defs>
			<g class="wave1">
				<use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
			</g>
			<g class="wave2">
				<use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
			</g>
			<g class="wave3">
				<use xlink:href="#wave-path" x="50" y="9" fill="#fff">
			</g>
		</svg>

	</section><!-- End Hero -->