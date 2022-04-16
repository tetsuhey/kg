<?php
/*
Template Name: ホームテンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">

		<section id="main_visual">
			<div class="main_v">
			<?php 
                        	$ca_args = array(
                            'post_type' => 'main_visual', /* 投稿タイプを指定 */
                            'orderby' => 'date',
                            'order' => 'DESC', 
							'post_status'=>'publish',
                            'showposts' => 1); 
                        	// クエリの定義
                        	$wp_query = new WP_Query( $ca_args );
							if ($wp_query->have_posts()) :
								while ($wp_query->have_posts()) : $wp_query->the_post();
						?>
							<?php
								$img = get_field('image');
								if(isset($img) && !empty($img)):
							?>
								<img src="<?php the_field('image') ?>" alt="kago aktr main visual" />
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/lib/main-visual.jpg" alt="main visual">
							<?php endif; ?>
						<?php endwhile;
							else:
						?>
							<img src="<?php echo get_template_directory_uri(); ?>/lib/main-visual.jpg" alt="main visual">
							<?php endif; ?>
			</div>
			<div class="main_v_discription center">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/lib/kago_logo_w.svg" alt="logo">
				<p><strong class="opensans color_white">OSAKA / FUKUOKA / TOKYO</strong></p>
			</div>
			<div class='main_arrow'>
				<div class="relative"><p class="arrow"></p></div>
			</div>

		</section>
		<section id="projets" class="scrollAction">
			<div class="container actionChild">
				<div class="row">
					<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 center">
						<h1 class="bold opensans">TO THE NEXT LEVEL</h1>
						<p class="spacer_top_s">KAGO（カゴ）は、日本のバスケットボールの「（選手と指導者の）育成」と「普及」を考えるプロジェクトです。</p>
					</div>
				</div>
			</div>
			<!-- 1.school -->
			<div class="spacer_top_l wide_wrap actionChild">
				<img class='wide_img' src="<?php echo get_template_directory_uri(); ?>/lib/IMG1.png" alt="project1">
				
				<div class="container">
					<div class="row">
						<div class="spacer_top_s col-12 col-lg-6 offset-lg-6 center d-flex flex-column flex-lg-row">
							<!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/1.svg" alt="01"> -->
							<div class="cap">
								<h2 class="bold opensans">KAGO SCHOOL</h2>
								<h2 class="bold">バスケットボールスクールの運営(大阪/福岡/東京)</h2>
							</div>
						</div>
					</div>
					<div class="row spacer_top_m">
						<p class="col-12 col-lg-6 offset-lg-6 text">
						小・中学生を対象としたバスケットボールスクールです。初心者からプロを目指す選手まで幅広くレベルに合った指導を行なっております。選手として 、人として成長する為の「きっかけ」作りを行い、日本だけでなく世界で活躍する人間（選手）の育成を目指します。
						</p>
					</div>
					<div class="row spacer_top_m">
						<div class="col-12 col-lg-6 offset-lg-6 center">
							<div class="kagobtn">
								<a href="<?php echo esc_url( home_url( '/' ) ).'school/'; ?>">スクールについて</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 2.team -->
			<div class="spacer_top_l wide_wrap actionChild">
				<img class='wide_img right' src="<?php echo get_template_directory_uri(); ?>/lib/IMG2.png" alt="project2">
				<div class="container">
					<div class="row">
						<div class="spacer_top_s col-12 col-lg-6 d-flex flex-column flex-lg-row">
							<!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/2.svg" alt="02"> -->
							<div class="cap">
								<h2 class="bold opensans">KAGO CLUB</h2>
								<h2 class="bold">クラブチームの運営(大阪/福岡)</h2>
							</div>
						</div>
					</div>
					<div class="row spacer_top_m">
						<p class="col-12 col-lg-6 text">
						小・中学生を対象としたクラブチームです。バスケットボールのスキルや IQ を学ぶだけでなく、チーム活動から人間性を学び、日本だけでなく世界で活躍する人間（選手）の育成を目指します。<br />そして、勝つだけに拘るのではなくジュニア期の自由な感性と発想を大事にし、個人・チームともに魅力的なバスケットボールを目指します。
						</p>
					</div>
					<div class="row spacer_top_m">
						<div class="col-12 col-lg-6 center">
							<div class="kagobtn">
								<a href="<?php echo esc_url( home_url( '/' ) ).'team/'; ?>">チームについて</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 3.FACILITIES -->
			<div class="spacer_top_l wide_wrap actionChild">
				<img class='wide_img left' src="<?php echo get_template_directory_uri(); ?>/lib/IMG3.png" alt="project3">
				<div class="container">
					<div class="row">
						<div class="spacer_top_s col-12 col-lg-6 offset-lg-6 center d-flex flex-column flex-lg-row">
							<!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/3.svg" alt="03"> -->
							<div class="cap">
								<h2 class="bold opensans">FACILITIES</h2>
								<h2 class="bold">バスケットボール施設の運営(大阪/福岡/東京)</h2>
							</div>
						</div>
					</div>
					<div class="row spacer_top_m">
						<p class="col-12 col-lg-6 offset-lg-6 text">
							KAGOでは、バスケットボール専用コート「KAGO SKILLS LABO（大阪）」、バスケットボールやダンススクールなどで利用できる「QOOOP FUKUOKA（福岡）」、インドア3人制バスケットボールコート「F1 STUDIO（東京）」を運営しています。
						</p>
					</div>
					<div class="row spacer_top_m">
						<div class="col-12 col-lg-6 offset-lg-6 center">
							<div class="kagobtn">
								<a href="<?php echo esc_url( home_url( '/' ) ).'facility/'; ?>">施設について</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 4. Online salon　-->			
			<div class="spacer_top_l wide_wrap actionChild">
				<img class='wide_img right' src="<?php echo get_template_directory_uri(); ?>/lib/IMG4.png" alt="project4">
				<div class="container">
					<div class="row">
						<div class="spacer_top_s col-12 col-lg-6 d-flex flex-column flex-lg-row">
							<!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/4.svg" alt="04"> -->
							<div class="cap">
								<h2 class="bold opensans">ONLINE SALON</h2>
								<h2 class="bold">オンラインサロンの運営</h2>
							</div>
						</div>
					</div>
					<div class="row spacer_top_m">
						<p class="col-12  col-lg-6 text">バスケットボール指導者の為のオンラインサロンを運営しています。<br />--ただいま準備中です。--</p>
					</div>
					<div class="row spacer_top_m">
						<div class="col-12  col-lg-6 center">
							<div class="kagobtn">
								<a href="<?php echo esc_url( home_url( '/' ) ).'onlinesalon/'; ?>">オンラインサロンについて</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- 5.OTHERS -->
			<div class="spacer_top_l wide_wrap actionChild">
				<img class='wide_img' src="<?php echo get_template_directory_uri(); ?>/lib/IMG5.png" alt="project5">
				<div class="container">
					<div class="row">
						<div class="spacer_top_s col-12 col-lg-6 offset-lg-6 center d-flex flex-column flex-lg-row">
							<!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/5.svg" alt="05"> -->
							<div class="cap">
								<h2 class="bold opensans">OTHERS</h2>
								<h2 class="bold">その他</h2>
							</div>
						</div>
					</div>
					<div class="row spacer_top_m">
						<p class="col-12  col-lg-6 offset-lg-6 text">
						海外挑戦 / 大会主催 / PRO WORKOUT / リズムトレーニング / クリニック / 定期指導など、様々なアプローチから、バスケットボールを普及・支援する活動を行なっています。
						</p>
					</div>
					<div class="row spacer_top_m">
						<div class="col-12  col-lg-6 offset-lg-6 center">
							<div class="kagobtn">
								<a href="<?php echo esc_url( home_url( '/' ) ).'others/'; ?>">もっと詳しく</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			
		</section>
		<section id="kago-aktr" class="scrollAction">
			<div class="box actionChild">
				<div class='container relative'>
					<div class='row'>
						<div class='col-12'>
							<h1 class="center">
								<img src="<?php echo get_template_directory_uri(); ?>/lib/kago-aktr_logo.svg" alt="kago-aktr logo" />
							</h1>
							<h2 class="bold spacer_top_l">どの年代からでも”かっこいい”と思われる<br class='d-none d-lg-block'/>バスケットボールカルチャーを作る。</h2>	
						</div>
						<div class='col-12 col-lg-6'>
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
					</div>
					<div id='kago-aktr-visual'>
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
							<img src="<?php the_field('image') ?>" alt="kago aktr main visual" />
						<?php endwhile;
							else:
						?>
							<img src="<?php echo get_template_directory_uri(); ?>/lib/aktr_visual_202108.jpg" alt="kago aktr main visual">
							<?php endif; ?>
					</div>
				</div>
			</div>
			<div class="products_box actionChild">
				<div class="container">
					<div class="row tile">
						<?php 						
                        	$ca_args = array(
                            'post_type' => 'product', /* 投稿タイプを指定 */
                            'orderby' => 'meta_value',
							'meta_key' => 'custom_order',
							'post_status'=>'publish',
                            'order' => 'ASC', 
                            'showposts' => 8); 
                        	// クエリの定義
                        	$wp_query = new WP_Query( $ca_args );
                        	// ループ用カウンター
                        	$x = 0;
                        	$get_num = $wp_query->post_count;//取得した数

							if ($wp_query->have_posts()) :
								while ($wp_query->have_posts()) : $wp_query->the_post();
						?>
							<div class="col-6 col-md-4 col-lg-3 product relative">
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
										</p>
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
		</section>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
