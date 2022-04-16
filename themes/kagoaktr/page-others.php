<?php
/*
Template Name: その他テンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">
        <nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
        
        <div id="others" class="scrollAction">		
            <section id="" class=''>
			    <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                            <h1 class="bold center">その他</h1>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1">
                            <p class="spacer_top_m">
                            海外挑戦 / 大会主催 / PRO WORKOUT / リズムトレーニング / クリニック / 定期指導など、様々なアプローチから、バスケットボールを普及・支援する活動を行なっています。
                            </p>
                        </div>
                        <div class="btnwrap col-12 col-md-6 offset-md-3  col-lg-8 offset-lg-2 d-flex flex-wrap flex-column flex-lg-row justify-content-lg-center spacer_top_m">
                            <div class="kagobtn">
				    			<a href="#overseas">海外挑戦</a>
					    	</div>
                            <div class="kagobtn">
							    <a href="#compe">大会</a>
    						</div>
                            <div class="kagobtn">
							    <a href="#workout">PRO WORKOUT</a>
    						</div>
                            <div class="kagobtn">
		    					<a href="#rythem">リズムトレーニング</a>
			    			</div>
                            <div class="kagobtn">
		    					<a href="#clinic">クリニック・定期指導</a>
			    			</div>
                        </div>
                    </div>
                </div>
		    </section>

            <section id="overseas" class="actionChild">
                <div class="bk_gray relative cap_box">
                    <div class="cap_img right"></div>
                    <div class="container">
				        <div class="row">
					        <div class="col-12 d-flex flex-column flex-md-row">
                                <!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/1.svg" alt="01"> -->
                                <div class="cap">
								    <h2 class="bold opensans">OVERSEAS PROJECTS</h2>
    								<h2 class="bold">海外挑戦</h2>
	    						</div>
                            </div>
                            <div class="col-12 col-lg-5 spacer_top_m">
                                <p>
                                    KAGOでは、海外へ挑戦する若者をサポートしています。バスケットボールの本場アメリカを中心に海外ツアーを実施。NBAチームやNBA選手のバスケットボールキャンプへ参加したり、現地スキルコーチの指導を受けたり、アメリカのトーナメントや大会に出場など、 世界に触れる「きっかけ」を作りを行っております。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="spacer_top_m">
                                    <h3 class='center bold'>GR TOUR</h3>
                                    <img src="<?php echo get_template_directory_uri(); ?>/lib/grtour-logo.png" alt="gr tour"/>
                                    <p class="spacer_top_s">バスケットボール界、世界の頂点に立つ本場アメリカのバスケを肌で感じ、またABA試合観戦等を通じて子供たちに刺激を与え、今後の成長・将来の目標設定のきっかけをつくります。</p>
                                </div>
                                <div class="spacer_top_m center">
                                    <div class="kagobtn">
				    			        <a href="http://gymrats.juno.weblife.me/pg162796.html" target="_blank">GR TOURとは</a>
					    	        </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="spacer_top_m">
                                    <h3 class='center bold'>IMG ACADEMY</h3>
                                    <img src="<?php echo get_template_directory_uri(); ?>/lib/imgacademy-logo.png" alt="img academy"/>
                                    <p class="spacer_top_s">NBA選手を多数輩出しているスポーツ学校IMG ACADEMYへ短期留学を行います。IMGコーチ陣の英語での指導や、世界最高峰のトレーニング施設で過ごす時間を通し、子どもたちの成長のきっかけをつくります。</p>
                                </div>
                                <div class="spacer_top_m center">
                                    <div class="kagobtn">
                                    <a href="https://www.imgacademy.jp/" target="_blank">IMG ACADEMYとは</a>
					    	        </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="spacer_top_m">
                                    <h3 class='center bold'>GLOBALLERS</h3>
                                    <img src="<?php echo get_template_directory_uri(); ?>/lib/globallers-banner.jpg" alt="globallers"/>
                                    <p class="spacer_top_s">早い段階で選手に海外での経験をしてもらい、将来NBA選手となり得る若き才能を発掘・育成するプロジェクト。全国の新中学3年生を対象に、トーナメントやトライアウトを通じてメンバーを選び、『Team GLOBALLERS』を結成。国内の強豪校と対戦する遠征や、海外挑戦を行います。</p>
                                </div>
                                <div class="spacer_top_m center">
                                    <div class="kagobtn">
                                    <a href="https://scgloballers.com/" target="_blank">GLOBALLERSとは</a>
					    	        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="overseas_gallery spacer_top_m">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">ライブラリ</h3>
                            </div>
                        </div>
                        <?php 
                            $ca_args = array(
                               'post_type' => 'library', /* 投稿タイプを指定 */
                                'meta_key' => 'target',
                                'meta_value' => 'overseas',
                                'post_status'=>'publish',
                                'showposts' => -1
                            ); 
                            // クエリの定義
                            $wp_query = new WP_Query( $ca_args );
                            if ($wp_query->have_posts()) :
                        ?>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <div class="slider">
                                    <?php 
                                    // ループ用カウンター
                                    $i = 1;
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <a href="<?php the_field('image'); ?>" target="_blank"><img src="<?php the_field('image');?>" alt="overseas <?php $i ?>" /></a>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <p class="center">写真が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
		    </section>

            <section id="compe" class="actionChild">
                <div class="bk_gray relative cap_box">
                    <div class="cap_img"></div>
                    <div class="container">
				        <div class="row">
                            <div class="col-12 col-lg-5 offset-lg-7 d-flex flex-column flex-md-row">
                                <!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/2.svg" alt="02"> -->
                                <div class="cap">
								    <h2 class="bold opensans">COMPETITION</h2>
    								<h2 class="bold">大会</h2>
	    						</div>
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-7 spacer_top_m">
                                <p>当スクール主催の大会やイベントを定期的に開催しております。日頃の練習の成果を実践でチャレンジできる機会や色々なバスケットボールの楽しみ方を提供します。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="compe_gallery spacer_top_m">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">ライブラリ</h3>
                            </div>
                        </div>
                        <?php 
                            $ca_args = array(
                               'post_type' => 'library', /* 投稿タイプを指定 */
                                'meta_key' => 'target',
                                'meta_value' => 'competition',
                                'post_status'=>'publish',
                                'showposts' => -1
                            ); 
                            // クエリの定義
                            $wp_query = new WP_Query( $ca_args );
                            if ($wp_query->have_posts()) :
                        ?>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <div class="slider">
                                    <?php 
                                    // ループ用カウンター
                                    $i = 1;
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <a href="<?php the_field('image'); ?>" target="_blank"><img src="<?php the_field('image');?>" alt="competition <?php $i ?>" /></a>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <p class="center">写真が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
		    </section>

            <section id="workout" class="actionChild">
                <div class="bk_gray relative cap_box">
                    <div class="cap_img right"></div>
                    <div class="container">
				        <div class="row">
                        <div class="col-12 d-flex flex-column flex-md-row">
                                <!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/2.svg" alt="02"> -->
                                <div class="cap">
								    <h2 class="bold opensans">PRO WORKOUT</h2>
    								<h2 class="bold">プロワークアウト</h2>
	    						</div>
                            </div>
                            <div class="col-12 col-lg-5 spacer_top_m">
                                <p>プロ選手、プロを目指す選手、今よりもレベルアップしたい選手、高校生以上を対象にスキルトレーニングやリズムトレーニングのワークアウトを提供しています。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="compe_gallery spacer_top_m">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">ライブラリ</h3>
                            </div>
                        </div>
                        <?php 
                            $ca_args = array(
                               'post_type' => 'library', /* 投稿タイプを指定 */
                                'meta_key' => 'target',
                                'meta_value' => 'workout',
                                'post_status'=>'publish',
                                'showposts' => -1
                            ); 
                            // クエリの定義
                            $wp_query = new WP_Query( $ca_args );
                            if ($wp_query->have_posts()) :
                        ?>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <div class="slider">
                                    <?php 
                                    // ループ用カウンター
                                    $i = 1;
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <a href="<?php the_field('image'); ?>" target="_blank"><img src="<?php the_field('image');?>" alt="pro workout <?php $i ?>" /></a>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <p class="center">写真が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
		    </section>

            <section id="rythem" class="actionChild">
                <div class="bk_gray relative cap_box">
                    <div class="cap_img"></div>
                    <div class="container">
				        <div class="row">
                            <div class="col-12 col-lg-5 offset-lg-7 d-flex flex-column flex-md-row">
                                <!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/3.svg" alt="03"> -->
                                <div class="cap">
                                    <h2 class="bold opensans">RHYTHM TRAINIG</h2>
    								<h2 class="bold">リズムトレーニング</h2>
	    						</div>
                            </div>
                            <div class="col-12 col-lg-5 offset-lg-7 spacer_top_m">
                                <p>スポーツに必要なリズム感を、トレーニングやウォーミングアップに取り入れています。キッズ・ジュニア世代からプロアスリートまで実践し、当スクールコーチが全国のバスケチームに出張リズムトレーニングや養成講習会を開催し、普及活動を行っています。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="rythem_gallery spacer_top_m">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">動画で見る</h3>
                            </div>
                        </div>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <video src="<?php echo get_template_directory_uri(); ?>/lib/rythemtraining.mp4" preload="metadata" playinline controls poster=""></video>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">ライブラリ</h3>
                            </div>
                        </div>
                        <?php 
                            $ca_args = array(
                               'post_type' => 'library', /* 投稿タイプを指定 */
                                'meta_key' => 'target',
                                'meta_value' => 'rythm',
                                'post_status'=>'publish',
                                'showposts' => -1
                            ); 
                            // クエリの定義
                            $wp_query = new WP_Query( $ca_args );
                            if ($wp_query->have_posts()) :
                        ?>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <div class="slider">
                                    <?php 
                                    // ループ用カウンター
                                    $i = 1;
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <a href="<?php the_field('image'); ?>" target="_blank"><img src="<?php the_field('image');?>" alt="RHYTHM TRAINIG <?php $i ?>" /></a>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <p class="center">写真が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
		    </section>

            <section id="clinic" class="actionChild">
                <div class="bk_gray relative cap_box">
                    <div class="cap_img right"></div>
                    <div class="container">
				        <div class="row">
                        <div class="col-12 d-flex flex-column flex-md-row">
                                <!-- <img class="material_nums" src="<?php echo get_template_directory_uri(); ?>/lib/4.svg" alt="04"> -->
                                <div class="cap">
                                    <h2 class="bold opensans">CLINIC</h2>
    								<h2 class="bold">クリニック・定期指導</h2>
	    						</div>
                            </div>
                            <div class="col-12 col-lg-5 spacer_top_m">
                                <p>当スクールコーチ陣が学校やチーム訪問し、バスケットボールやリズムトレーニングのクリニックや定期指導を行っております。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 spacer_top_m">
                                <h3 class='center bold'>福大大濠トロージャンズ</h3>
                                <img src="<?php echo get_template_directory_uri(); ?>/lib/trojans-logo.png" alt="trojans logo"/>
                                <p class="spacer_top_s">福岡大学附属大濠高等学校バスケットボール部「福大大濠トロージャンズ」にスタッフを派遣し、スキル、リズム、メンタルなどのトレーニングを定期的に行っています。</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-5 spacer_top_m">
                                <h3 class='center bold'>別府溝部学園ライジングサン</h3>
                                <img src="<?php echo get_template_directory_uri(); ?>/lib/risingusun_logo.gif" alt="risingusun logo"/>
                                <p class="spacer_top_s">別府溝部学園高校バスケットボール部「ライジングサン」にコーチを派遣し、リズムトレーニングを定期的に行っています。</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="rythem_gallery spacer_top_m">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 center spacer_top_l">
                                <h3 class="bold">ライブラリ</h3>
                            </div>
                        </div>
                        <?php 
                            $ca_args = array(
                               'post_type' => 'library', /* 投稿タイプを指定 */
                                'meta_key' => 'target',
                                'meta_value' => 'clinic',
                                'post_status'=>'publish',
                                'showposts' => -1
                            ); 
                            // クエリの定義
                            $wp_query = new WP_Query( $ca_args );
                            if ($wp_query->have_posts()) :
                        ?>
                        <div class="row spacer_top_m">
                            <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                                <div class="slider">
                                    <?php 
                                    // ループ用カウンター
                                    $i = 1;
                                    while ($wp_query->have_posts()) : $wp_query->the_post();
                                    ?>
                                    <a href="<?php the_field('image'); ?>" target="_blank"><img src="<?php the_field('image');?>" alt="clinic <?php $i ?>" /></a>
                                    <?php $i++; endwhile; ?>
                                </div>
                            </div>
                        </div>
                        <?php else: ?>
                            <p class="center">写真が見つかりませんでした。</p>
                        <?php endif; ?>
                    </div>
                </div>
		    </section>
        
        </div>
	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
