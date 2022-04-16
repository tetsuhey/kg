<?php
/*
Template Name: ニューステンプレート
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
                            <h1 class="bold center">お知らせ・ニュース</h1>
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
                        <?php
					    //pagedに値をセットするのを忘れずに！
					    $the_query = new WP_Query( array(
						'paged'       => get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1,
						'post_type'   => 'post',
                        'post_status'=>'publish',
						'showposts' => 12,
						'orderby' => 'date',
						'order' => 'desc',
					    ) );
                        if ( $the_query->have_posts() ) while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			  		    <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 blogcard">
					        <div class="d-flex flex-row">
                                <a class="" href="<?php the_permalink(); ?>">
								    <?php the_post_thumbnail('thumbnail', array('class' => 'thumbs')); ?>
                                </a>
								<div class="">
									<p class="info"><small class="time"><?php echo the_time("Y.n.j g時i分"); ?></small>
                                        <?php 
                                            $cats = get_the_category();
                                            $i = 0;
                                            $cat_name = "";
                                            foreach($cats as $cat):
                                                $cat_name = $cat->cat_name;
                                                if($i > 0):
                                                    $cat_name = " , ".$cat->cat_name;
                                                endif;
                                                $i++;
                                        ?>
                                            <small class="color_blue"><?php echo $cat_name ?></small>
                                        <?php  endforeach; ?>
                                    </p>
                                    <a class="" href="<?php the_permalink(); ?>">
                                	    <h2 class=""><?php echo the_title(); ?></h2>
                                    </a>
							    </div>
                            </div>
					    </div>
			  		    <?php endwhile; /*endforeach*/; ?>
			  		    <div class="col-12 col-md-10 col-lg-8 offset-md-1 offset-lg-2 spacer_top_l">
			  			    <?php
							    $GLOBALS['wp_query']->max_num_pages = $the_query->max_num_pages;
							    the_posts_pagination();
							    wp_reset_postdata();
						    ?>
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
