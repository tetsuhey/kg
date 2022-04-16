<?php
/*
Template Name: オンラインサロンテンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">
        <nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
        
        <div id="onlinesalon">		
            <section id="" class=''>
			    <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                            <h1 class="bold center">オンラインサロン</h1>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1">
                            <p class="spacer_top_m center">バスケットボール指導者の為のオンラインサロンを運営しています。</p>
                        </div>
                    </div>
                    <div class="row spacer_top_l">
                        <div class="col-12 col-md-6 offset-md-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/lib/commingsoon.png" alt="comming soon">
                        </div>
                    </div>
                </div>
		    </section>
        
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
