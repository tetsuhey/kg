<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KAGO-AKTR
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon -->
	<!-- <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/lib/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/lib/favicon-180px180px.gif">
	<link rel="icon" type="image/gif" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/lib/favicon-192px192px.gif"> -->

	<!-- boot strap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- SLICK -->
	<link href="<?php echo get_template_directory_uri(); ?>/lib/slick/slick.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/lib/slick/slick-theme.css" rel="stylesheet" type="text/css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-JB0C4T2T6C"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'G-JB0C4T2T6C');
	</script>

	<?php wp_head(); ?>
</head>

<body <?php /* body_class(); */?>>
<?php /* wp_body_open(); */?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php /*
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				*/ ?>
				<!-- <p class="site-title"><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></p> -->
				<?php /*
			endif;
			$kago_aktr_description = get_bloginfo( 'description', 'display' );
			if ( $kago_aktr_description || is_customize_preview() ) :
				*/ ?>
				<!-- <p class="site-description"><?php //echo $kago_aktr_description; ?></p> -->
			<?php //endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="navi">
			<div class="menubar">
				<div class="d-flex justify-content-between">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/lib/kago_logo.svg" alt="logo"></a>
					<div class="menu_btn"><p></p><p></p></div>
				</div>
			</div>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
			</div>
			<div class='d-md-none'>
			<div class="snswrap">
						<div class="d-flex flex-row justify-content-between align-items-center">
							<a href="https://www.tiktok.com/@kago.official" target="_blank" rel=""><img src="<?php echo get_template_directory_uri(); ?>/lib/tiktok-logo.svg" alt="tiktok"/></a>
							<a href="https://www.youtube.com/channel/UCws5EsCrtkhmbW_nye-NdFg" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/youtube-logo.png" alt="youtube"/></a>
							<a href="https://www.instagram.com/kago_bbs/?ref=badge" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/instagram-logo.png" alt="instagram"/></a>
							<a href="https://www.facebook.com/kagobasketballschool/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/facebook-logo.png" alt="facebook"/></a>
							<a href="https://twitter.com/kago_bbs" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/twitter-logo.svg" alt="twitter"/></a>
						</div>
					</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
