<?php
/*
Template Name: KAGO-AKTRテンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">
        <nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
        
        <div id="" class="">
        <section id="kago-aktr-main" class="" style="padding-bottom:0;">
            <div class='container'>
                <div class='row'>
                    <div class="col-12 col-lg-6">
                        <h1 class=""><img style="max-height:30vh;" src="<?php echo get_template_directory_uri(); ?>/lib/kago-aktr_logo.svg" alt="kago-aktr logo" /></h1>
                        <h2 class="bold center spacer_top_l">どの年代からでも”かっこいい”と思われる<br class='d-none d-md-block'/>バスケットボールカルチャーを作る。</h2>	
                    </div>
                </div>
            </div>
            <div class="bk_gray spacer_top_l" style="padding-bottom:60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p class="spacer_top_m">バスケットボールスクールのKAGOと、バスケットボール専門のアパレルブランドAKTRがコラボし、ユニフォームやバスケットボールに関係する様々な物販を展開。子供から大人まで男女問わず、”かっこいい”バスケットボールカルチャーの創造を目指しています！</p>
                            <div class="center spacer_top_m">
							    <div class="kagobtn">
								    <a href="https://kago.theshop.jp/" target="_blank">WEBショップへ</a>
							    </div>
							    <div class="kagobtn">
								    <a href="https://aktr.jp/" target='_blank'>AKTRとは</a>
							    </div>
						    </div>
                        </div>
                        <div class="col-12 col-lg-6 relative">
                            <?php 
                        	$ca_args = array(
                            'post_type' => 'kago_aktr_mainvisual', /* 投稿タイプを指定 */
                            'orderby' => 'date',
                            'order' => 'DESC', 
							'post_status'=>'publish',
                            'showposts' => 1); 
                        	// クエリの定義
                        	$wp_query = new WP_Query( $ca_args );
							if ($wp_query->have_posts()) :
								while ($wp_query->have_posts()) : $wp_query->the_post();
						?>
							<img id='kago-aktr-visual' src="<?php the_field('image') ?>" alt="kago aktr main visual" />
						<?php endwhile;
							else:
						?>
							<img id='kago-aktr-visual' src="<?php echo get_template_directory_uri(); ?>/lib/aktr_visual_202108.jpg" alt="kago aktr main visual">
							<?php endif; ?>
                        </div>
                        
                    </div>
                    <div class="products_box">
                        <div class="row tile scrollAction">
                        <?php 						
                        	$ca_args = array(
                            'post_type' => 'product', /* 投稿タイプを指定 */
                            'orderby' => 'meta_value',
							'meta_key' => 'custom_order',
                            'post_status'=>'publish',
                            'order' => 'ASC',
                            'showposts' => -1); 
                        	// クエリの定義
                        	$wp_query = new WP_Query( $ca_args );
							if ($wp_query->have_posts()) :
								while ($wp_query->have_posts()) : $wp_query->the_post();
						?>
                            <div class="col-6 col-md-4 col-lg-3 product relative actionChild">
							    <a href="<?php the_field('product_url');?>" target="_blank">
								    <img src="<?php the_field('image');?>" alt="kago-aktr <?php the_field('product_name'); ?>" />
								    <div class="hover_info">
									    <h3 class="opensans"><?php the_field('product_name');?></h3>
                                        <p class="sale">
                                        <?php
                                            $salePrice = get_field('product_price_sale');
                                            if (empty($salePrice) || !isset($salePrice) || $salePrice == 0) :
                                        ?>
                                            <span class="bold color_yellow">¥<?php the_field('product_price'); ?></span>
                                        <?php else : ?>
                                            <span class="now">¥<?php the_field('product_price'); ?></span>
										    <span class="bold color_yellow">¥<?php the_field('product_price_sale');?></span>
									    </p>
                                        <?php endif; ?>
								    </div>
							    </a>
						    </div>
						<?php 
							endwhile;
							endif;
						?>
                        </div>
                        <div class="row spacer_top_l">
						    <div class="col-12 center">
							    <div class="kagobtn">
								    <a href="https://kago.theshop.jp/" target="_blank">もっと見る</a>
							    </div>
						    </div>
					    </div>
                    </div>
                </div>
            </div>
		</section>

        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
