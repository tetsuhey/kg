<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package KAGO-AKTR
 */

?>

	<footer id="footer" class="site-footer bk_darkblue">
		<div class="container">
			<div class="row">
				<div class="col-4 col-sm-4 col-lg-3 offset-lg-1 center">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/lib/kago_logo_w.svg" alt="logo"></a>
				</div>
				<div class="col-8 col-sm-8 col-lg-7 wrap1">
					<div class="links d-flex">
						<div class="d-flex flex-wrap flex-column flex-md-row">
							<a class="color_white" href="<?php echo esc_url( home_url( '/' ) ).'school/'; ?>">スクール</a>
							<a class="color_white" href="<?php echo esc_url( home_url( '/' ) ).'team/'; ?>">チーム</a>
							<a class="color_white" href="<?php echo esc_url( home_url( '/' ) ).'facility/'; ?>">施設</a> 
							<a class="color_white" href="https://kago.theshop.jp/" target="_blank">オンラインショップ</a>
							<a class="color_white" href="<?php echo esc_url( home_url( '/' ) ).'onlinesalon/'; ?>">オンラインサロン</a>
							<a class="color_white" href="<?php echo esc_url( home_url( '/' ) ).'others/'; ?>">その他</a>
							<a class="color_white" href="<?php echo esc_url( home_url( '/' ) ).'news/'; ?>">お知らせ・ニュース</a>
							<a class="color_white" href="<?php echo esc_url( home_url( '/' ) ).'contact/'; ?>">お問い合わせ</a>
							<a class="color_white" href="<?php echo esc_url( home_url( '/' ) ).'recruit/'; ?>">リクルート</a>
						</div>
					</div>
					<div class="snswrap">
						<div class="d-flex flex-row flex-wrap">
							<a href="https://www.tiktok.com/@kago.official" target="_blank" rel="">
								<img src="<?php echo get_template_directory_uri(); ?>/lib/tiktok-logo.svg" alt="tiktok"/>
							</a>
							<a href="https://www.youtube.com/channel/UCws5EsCrtkhmbW_nye-NdFg" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/youtube-logo.png" alt="youtube"/></a>
							<a href="https://www.instagram.com/kago_bbs/?ref=badge" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/instagram-logo.png" alt="instagram"/></a>
							<a href="https://www.facebook.com/kagobasketballschool/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/facebook-logo.png" alt="facebook"/></a>
							<a href="https://twitter.com/kago_bbs" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/twitter-logo.svg" alt="twitter"/></a>
						</div>
					</div>
				</div>
			</div>	
			<div class="row sponsers">
				<div class="col-12">
					<div class="d-flex flex-wrap flex-row justify-content-start">
						<a href="https://aktr.jp/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/aktr-logo.gif" alt="aktr"></a>
						<a href="http://tachikara.jp/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/tachikara-banner.jpg" alt="tachikara"></a>
						<a href="http://gymrats.juno.weblife.me/index.html" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/sgr-banner.jpg" alt="shizuoka gym rats"></a>
						<a href="https://scgloballers.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/globallers-banner.jpg" alt="globallers"></a>
						<a href="https://www.qooop.info/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/qoop-banner.jpg" alt="qoop oosaka"></a>
						<a href="https://www.sunchlorella.co.jp/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/lib/sunchlorella-banner.jpg" alt="sunchlorella"></a>
					</div>
				</div>
			</div>
			<div class="row copy">
				<p class="col-12 small center color_white">&copy;2021 TSO.</p>
			</div>
		</div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- GOOGLE FONT -->
<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,700;1,700&display=swap" rel="stylesheet">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"　defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"　defer></script>
<!-- SLICK -->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/slick/slick.min.js" type="text/css"　defer></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/customizer.js"　defer></script>
</body>
</html>
