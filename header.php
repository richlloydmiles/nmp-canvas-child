<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>" />
	<title><?php woo_title(); ?></title>
	<?php woo_meta(); ?>
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>" />
      <?php wp_head(); ?>
      <?php woo_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  	<?php 
  // Fix menu overlap bug..
  	if ( is_admin_bar_showing() ) echo '<div class="wobble-top-bar"></div>'; 
  	?>
  	<div class="row nmp_top">
  		<div class="col-sm-2">
  			<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
  				<div class='site-logo'>
  					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
  				</div>
  			<?php else : ?>
  				<hgroup>
  					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
  					<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
  				</hgroup>
  			<?php endif; ?>
  		</div>
  		<div class="col-sm-10">
  			<nav class="navbar navbar-default header">
  				<div class="container-fluid">
  					<!-- Brand and toggle get grouped for better mobile display -->
  					<div class="navbar-header">
  						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
  							<span class="sr-only">Toggle navigation</span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  							<span class="icon-bar"></span>
  						</button>
  				<a class="nmp_cart_button_link"><i class="fa fa-shopping-cart nmp_cart_button visible-xs"></i></a>
  					 
  					</div>
  							
  					<!-- Collect the nav links, forms, and other content for toggling -->
  					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  						<?php wp_nav_menu( array( 
  							'theme_location' => 'primary-menu',
  							'items_wrap'      => '	<ul class="nav navbar-nav">%3$s</ul>',
  							) ); ?>

  						
  			
		<a ><i class="fa fa-shopping-cart nmp_cart_button hidden-xs"></i></a>
  						</div><!-- /.navbar-collapse -->
  					</div><!-- /.container-fluid -->
  				</nav>
  				<div class="nmp_cart">
  					<?php echo woo_add_nav_cart_link(); ?>	
  				</div>
  			</div>
  		</div>
  		<header id="header"></header>
  		<?php woo_top(); ?>
  		<div id="wrapper">
  			<div id="inner-wrapper">


  				<a  href="<?php get_site_url(); ?>">
  					<img src="<?php echo get_background_image(); ?>">	
  				</a>

