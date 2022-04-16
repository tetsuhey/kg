<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package KAGO_AKTR
 */

get_header();
?>

<main id="primary" class="site-main">
<div id="single">
		<nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
		
		<section id="blog" class="d-lg-flex flex-lg-row">
			<div class="blog_main">
				<div id="" class="container">
					<div class="row">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-12">	
							<div style="padding:0 16px;">
								<p class="category">
									<time datetime="<?php the_time('Y-m-d'); ?>" class="time color_gray"><?php the_time("Y.n.j g時i分"); ?></time>
									<?php the_category(', ' ); ?>
								</p>
								<h1 class="title spacer_top_s"><?php the_title(); ?></h1>
								<div class="post spacer_top_l">
									<?php if(has_post_thumbnail()): ?>
										<div style="width:70%; margin:0 auto;"> 
											<?php	the_post_thumbnail(); ?>
										</div>
									<?php endif; ?>
									<div class="spacer_top_m">
										<?php the_content();?>
									</div>
				 				</div>
						 		<div>
									<?php the_post_navigation();?>
								</div>
							</div>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>
			<div id="bloglist" class="blog_cate">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h2 class="center bold spacer_top_s">関連する記事</h2>
						</div>
						<div class="spacer_top_s">&nbsp;</div>
						<?php 
							$categories = get_the_category($post->ID);
							$category_ID = array();
								foreach($categories as $category):
  									array_push( $category_ID, $category -> cat_ID);
								endforeach ;
							$args_cat = array(
  								'post__not_in' => array($post -> ID), // 今読んでいる記事を除く
  								'posts_per_page'=> 6,
  								'category__in' => $category_ID,//同じカテゴリの記事を指定
  								'no_found_rows' => true,
  								'orderby' => 'date', // 日付で取得
  								'order' => 'desc',
							);
							$query_cat = new WP_Query($args_cat);
							if( $query_cat -> have_posts() ): while ($query_cat -> have_posts()) : $query_cat -> the_post();
						?>
						<div class="col-12 blogcard">
					        <div class="d-flex flex-row">
                                <a class="" href="<?php the_permalink(); ?>">
								    <?php the_post_thumbnail('thumbnail', array('class' => 'thumbs')); ?>
                                </a>
								<div class="">
									<p class="category">
										<time class="color_gray" datetime="<?php the_time('Y-m-d'); ?>" class="time"><?php the_time("Y.n.j g時i分"); ?></time>
                                        <span class=""><?php the_category(', ') ?></span>
                                    </p>
                                    <a class="" href="<?php the_permalink(); ?>">
                                	    <h3 class=""><?php echo the_title(); ?></h3>
                                    </a>
							    </div>
                            </div>
					    </div>
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>
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
