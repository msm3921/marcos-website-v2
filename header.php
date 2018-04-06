<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--**** MSM ****-->
	<!-- Reset -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/reset.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
	<!-- Mobile -->
	<?php $cssver = microtime( get_stylesheet_directory() . '/assets/css/mobile.css' ); ?>
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/mobile.css'); ?>?v=<?=$cssver?>" rel="stylesheet" media="screen" type="text/css"/>
	<!-- <link rel="stylesheet" href=""> -->
	<!-- Tablet -->
	<?php $cssver = microtime(get_stylesheet_directory() . '/assets/css/tablet.css' ); ?>
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/tablet.css');?>/assets/css/mobile.css'); ?>?v=<?=$cssver?>" rel="stylesheet" media="screen" type="text/css"/>
	<!-- <link rel="stylesheet" href=""> -->
	<!-- Desktop -->
	<?php $cssver = microtime(get_stylesheet_directory() . '/assets/css/desktop.css' ); ?>
	<link href="<?php bloginfo('stylesheet_directory');?>/assets/css/desktop.css');?>/assets/css/mobile.css'); ?>?v=<?=$cssver?>" rel="stylesheet" media="screen" type="text/css"/>
	<!-- <link rel="stylesheet" href=""> -->
	<!-- Font Icons -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css">
	<!-- Google Fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<?php wp_head(); ?>
<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9] -->
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<!--[endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Marcos Hernandez' ); ?></a>
		<!-- HEADER -->
		<header class="site-header" role="banner">
			<!-- Navbar -->
			<div class="navbar-wrapper">

				<div class="navbar navbar-inverse navbar-fixed-top navbar-right" role="navigation">
					<div class="container">
						<!-- <div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only"> Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand"href="/">
								<img src="<?php bloginfo();?>/assets/img/temp-logo.png"
								 alt="Marcos Hernandez"
								>
							</a> 
						</div>  --><!--Navbar header-->
						
						<?php
							wp_nav_menu( array(
								'theme_location'    => 'Primary', /* see register_nav_menus() in functions.php */
								'container'         => 'nav',
								'container_class'   => 'navbar-collapse collapse',
								'menu_class'        => 'nav navbar-nav navbar-right' 
								)
							);
						?>
					</div> <!--container-->

				</div> <!--Navbar-->

			</div> <!--Navbar Wrapper -->

		</header>
