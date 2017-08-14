<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?> All American Gymnastics</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=1" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>

<div class="container">

	<header>

		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php bloginfo( "template_url" ) ?>/img/logo.png" alt="<?php bloginfo( 'name' ); ?>">
			</a>
		</div>
		
		<div class="contact">
			Call us today at <a href="tel:804.240.5954">804.240.5954</a><br />
			<span><a href="https://www.google.com/maps/place/All+American+Gymnastics/@37.7465622,-77.4667827,17z/data=!4m13!1m7!3m6!1s0x89b13be14b6e2617:0xf26dde5791738688!2s323+Business+Ln,+Ashland,+VA+23005!3b1!8m2!3d37.746558!4d-77.464594!3m4!1s0x89b13c30d40fe7cb:0x16c7a685f90d0ae1!8m2!3d37.746558!4d-77.4645939">323-A Business Lane,<br>
			Ashland, VA 23005</a></span>
		</div>

		<button class="menu-toggle"><i class="fa fa-bars"></i></button>
		<nav role="navigation" class="main-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'nav-menu' ) ); ?>
		</nav>
		
	</header>

	<section class="content">
