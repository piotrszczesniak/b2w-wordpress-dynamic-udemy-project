<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="./bootstrap2wordpress/style.css">
	<!-- Bootstrap CSS ================================================== -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />


	<!-- FontAwesome Icons ================================================== -->
	<link href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/font-awesome/css/font-awesome.min.css" />

	<!-- Google Fonts ================================================== -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet" />

	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->

	<?php wp_head(); ?>
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bootstrap2wordpress'); ?></a>
		<!-- HEADER ================================================== -->
		<header class="site-header sticky-top" role="banner">
			<!-- NAV BAR ============================================ -->
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark role=" navigation">
				<div class="container">
					<a class="navbar-brand" href="<?php echo home_url() ?>">
						<img src="<?php bloginfo("stylesheet_directory"); ?>/assets/img/logo.png" alt="Bootrap to WordPress" />
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
					wp_nav_menu(array(
						'theme_location'    => 'top-menu',
						'depth'             =>  1,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'navbarMobile',
						'menu_class'        => 'navbar-nav ml-auto',
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					));
					?>
				</div><!-- end of container -->
			</nav><!-- end of nav -->
		</header><!-- end of header -->