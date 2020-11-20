<?php

$settings = get_fields('theme-options');
?>
<style>
	#hero {
		background-image: url(<?php echo $settings["banner"]["url"]; ?>) !important;
	}

	.vbox-content {
		margin-top: 250px !important;
		margin-bottom: 200px !important;
	}
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
	<header id="header" class="fixed-top d-flex align-items-center">
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