<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>
		<meta name="author" content="Ondaweb - www.ondaweb.com.br" />

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>


		<!-- Link Validate/Masked Input-->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.validate.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/jquery.maskedinput.js"></script>
	
		<!-- swipper -->
		<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700;800&family=Roboto:wght@400;500;900&display=swap" rel="stylesheet">

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body id="go-top" <?php body_class(); ?>>

		<header class="c-header js-header">

			<div class="o-wrapper o-wrapper--1400">
				<div class="c-header__container">
		
					<p class="c-header__logo">
						<a href="<?php echo home_url(); ?>" rel="nofollow">
							<svg width="241" height="103.503">
								<title><?php bloginfo( 'name' ); ?></title>
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#logotipo" />
							</svg>
						</a>
					</p>
		
					<div class="c-menu">
						<div class="c-menu__hamburguer js-menu-mobile">
							<span></span>
							<span></span>
							<span></span>
						</div>

						<?php get_template_part('partials/main-nav-top'); ?>
					</div>

					<!-- <div class="c-menu-lang">
						<ul class="c-menu-lang__list">
							<?php get_template_part('partials/main-lang-menu'); ?>
						</ul>
					</div> -->
				</div>
			</div>

		</header>

		<div class="c-whats">
			<a href="#">
				<svg width="98" height="98">
					<title>whatsapp</title>
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#whats" />
				</svg>
			</a>
		</div>
