<?php
/*
Template Name: カテゴリテンプレート
*/

get_header();
?>

	<main id="primary" class="site-main">
        <nav>
            <ol class="pankuzu head d-flex flex-row flex-wrap">
                <?php mytheme_breadcrumb() ?>
            </ol>
        </nav>
        
        <div id="news">		
        <section id="bloglist">
			    <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                            <h1 class="bold center"><small>#</small><?php single_cat_title(); ?>の記事一覧</h1>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-column flex-lg-row justify-content-lg-center">
                <div class="blog_cate order-lg-2 spacer_top_l">
                    <div class="">
                    <ul class="parent spacer_top_m">
                        <?php wp_list_categories('orderby=ID&title_li='); ?>
                    </ul>
                    </div>
                </div>
                <div class="blog-main order-lg-1 spacer_top_l">
                    <div class="container">
                        <div class="row">
                            <?php if(have_posts()): while(have_posts()):the_post(); ?>

			  		        <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 blogcard">
					            <div class="d-flex flex-row">
                                    <a class="" href="<?php the_permalink(); ?>">
								        <?php the_post_thumbnail('thumbnail', array('class' => 'thumbs')); ?>
                                    </a>
								    <div class="">
									    <p class="category">
                                            <time datetime="<?php the_time('Y-m-d'); ?>" class="time"><?php the_time("Y.n.j g時i分"); ?></time>
                                            <span class=""><?php the_category(', ') ?></span>
                                        </p>
                                        <a class="" href="<?php the_permalink(); ?>">
                                	        <h2 class=""><?php echo the_title(); ?></h2>
                                        </a>
							        </div>
                                </div>
					        </div>
			  		        <?php endwhile; endif; /*endforeach*/; ?>
			  		        <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 spacer_top_l">
			  			        <?php the_posts_pagination();?>
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
