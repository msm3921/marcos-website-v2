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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--**** MSM ****-->
	<!-- Reset -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/reset.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
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

<body <?php body_class(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'Marcos Hernandez' ); ?></a>
		<!-- HEADER -->
		<header class="site-header" role="banner">
			<!-- Navbar -->
			<div class="navbar-wrapper">
				<nav class="navbar navbar-inverse navbar-fixed-top navbar-right" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle dropdown-menu-right" data-toggle="collapse" data-toggle="dropdown" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

						</div> <!-- navbar header -->
						<?php
							wp_nav_menu( array(
								'theme_location'    => 'Primary', /* see register_nav_menus() in functions.php */
								'container'         => 'nav',
								'container_class'   => 'navbar-collapse collapse',
								'menu_class'        => 'nav navbar-nav navbar-right js-nav'
								)
							);
						?> 
					</div> <!--container-->

				</nav> <!--navbar-->

			</div> <!--Navbar Wrapper -->

		</header>







