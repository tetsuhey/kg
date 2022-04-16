<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package KAGO_AKTR
 */

get_header();
?>

	<main id="primary" class="site-main">
	<div id="404" class="scrollAction">
            <section id="" class=''>
			    <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                            <h1 class="bold center spacer_top_l">お探しのページは表示されません。</h1>
                        </div>
                        <div class="col-12 col-md-10 offset-md-1 center">
                            <p class="spacer_top_m">すでに削除されたか、URLが変更されています。<br />お探しのページが見つからない場合、お問い合わせください。</p>
                        </div>
                    </div>
                </div>
		    </section>
			<section id="company">
                <div class="bk_gray">
                    <div class="container">
				        <div class="row">
					        <div class="col-12">
                                <h2 class="bold center">会社概要</h2>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">運営会社</h4>
                                    <div class="contents">
                                        <p>一般社団法人TSO<br />（KAGO BASKETBALL SCHOOL事務局）</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">所在地</h4>
                                    <div class="contents">
                                        <p>〒812-0053<br />福岡県福岡市東区箱崎1丁目12－14－506</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4 spacer_top_m">
                                <div class="card">
                                    <h4 class="bold">お問い合わせ先</h4>
                                    <div class="contents">
                                        <p class="bold">福岡本社（KAGO福岡）</p>
                                        <div class="d-flex flex-row">
                                            <p class="a">電話</p>
                                            <p class="b">092-776-5402</p>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <p class="a">メール</p>
                                            <p class="b" style="word-break:break-all;">kagobasketballschoolfukuoka@gmail.com</p>
                                        </div>

                                        <p class="bold spacer_top_m">大阪支社（KAGO大阪）</p>
                                        <div class="d-flex flex-row">
                                            <p class="a">電話</p>
                                            <p class="b">072-269-4936</p>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <p class="a">メール</p>
                                            <p class="b" style="word-break:break-all;">kagobasketballschool@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
		    </section>
        </div>

		<!--<section class="error-404 not-found">
			<!-- <header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'kagoaktr' ); ?></h1>
			</header>

			<div class="page-content">
				<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'kagoaktr' ); ?></p>

					<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

					 <div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'kagoaktr' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div>

					<?php
					$kagoaktr_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'kagoaktr' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$kagoaktr_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div>
		</section>

	</main>-->

<?php
get_footer();
