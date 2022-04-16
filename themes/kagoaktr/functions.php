<?php
/**
 * KAGO_AKTR functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package KAGO_AKTR
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kagoaktr_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kagoaktr_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on KAGO_AKTR, use a find and replace
		 * to change 'kagoaktr' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kagoaktr', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'kagoaktr' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kagoaktr_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'kagoaktr_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kagoaktr_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kagoaktr_content_width', 640 );
}
add_action( 'after_setup_theme', 'kagoaktr_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kagoaktr_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kagoaktr' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kagoaktr' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kagoaktr_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kagoaktr_scripts() {
	wp_enqueue_style( 'kagoaktr-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kagoaktr-style', 'rtl', 'replace' );

	wp_enqueue_script( 'kagoaktr-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kagoaktr_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*
パンくずリスト
*/
function mytheme_breadcrumb() {
	// $sep = '>';
	// echo '<li><a href="'.get_bloginfo('url').'" >HOME</a></li>';
	// echo $sep;
	// echo the_title('<li>','</li>');

	//HOME>と表示
	$sep = '>';
	echo '<li><a href="'.get_bloginfo('url').'" >HOME</a></li>';
	echo $sep;
 
	//投稿記事ページとカテゴリーページでの、カテゴリーの階層を表示
	$cats = '';
	$cat_id = '';
	if ( is_single() ) {
		$cats = get_the_category();
		if( isset($cats[0]->term_id) ) $cat_id = $cats[0]->term_id;
	}
	else if ( is_category() ) {
		$cats = get_queried_object();
		$cat_id = $cats->parent;
	}
	$cat_list = array();
	while ($cat_id != 0){
		$cat = get_category( $cat_id );
		$cat_link = get_category_link( $cat_id );
		array_unshift( $cat_list, '<a href="'.$cat_link.'">'.$cat->name.'</a>' );
		$cat_id = $cat->parent;
	}
	foreach($cat_list as $value){
		echo '<li>'.$value.'</li>';
		echo $sep;
	}
 
	//現在のページ名を表示
	if ( is_singular() ) {
		if ( is_attachment() ) {
			previous_post_link( '<li>%link</li>' );
			echo $sep;
		}
		the_title( '<li>', '</li>' );
	}
	else if( is_archive() ) the_archive_title( '<li>', '</li>' );
	else if( is_search() ) echo '<li>検索 : '.get_search_query().'</li>';
	else if( is_404() ) echo '<li>ページが見つかりません</li>';
}

/* カスタム投稿タイプの「ライブラリ管理」で一覧表示の項目をカスタマイズ */
function manage_target_th($columns) {
	$columns['targets'] = "表示先";
	$columns['thumb'] = "画像";
	return $columns;
}
function manage_thumbs_th($columns) {
	$columns['thumb'] = "画像";
	return $columns;
}
function manage_product_th($columns) {
	$columns['order'] = "並び順";
	$columns['price'] = "通常の価格";
	$columns['sale'] = "セール価格";
	$columns['thumb'] = "画像";
	return $columns;
}
function manage_target_td($column_name, $post_id) {
	if( $column_name == 'targets' ) {
		$category = get_post_meta($post_id,'target',true);
		switch($category){
			case 'school_osaka':
				$category = 'スクール大阪';
				break;
			case 'school_fukuoka':
				$category = 'スクール福岡';
				break;
			case 'school_tokyo':
				$category = 'スクール東京';
				break;
			case 'team_osaka':
				$category = 'チーム大阪';
				break;
			case 'team_fukuoka':
				$category = 'チーム福岡';
				break;
			case 'overseas':
				$category = '海外挑戦';
				break;
			case 'competition':
				$category = '大会';
				break;
			case 'workout':
				$category = 'プロワークアウト';
				break;
			case 'rythm':
				$category = 'リズムトレーニング';
				break;
			case 'clinic':
				$category = 'クリニック';
				break;
		}
		echo $category;
	}elseif($column_name == 'thumb'){
		$image = get_post_meta($post_id,'image',true);
		$attachment_id = get_field('image',$post->ID);
    	echo "<img src=\"" . $attachment_id . "\" style='width:100%; max-width:100px;'>";
		// var_dump($image);
	}elseif($column_name == 'order'){
		$category = get_post_meta($post_id,'custom_order',true);
		echo $category;
	}elseif($column_name == 'price'){
		$category = get_post_meta($post_id,'product_price',true);
		echo $category;
	}elseif($column_name == 'sale'){
		$category = get_post_meta($post_id,'product_price_sale',true);
		echo $category;
	}
}
add_filter( 'manage_edit-library_columns', 'manage_target_th' );	 //ライブラリ
add_action( 'manage_library_posts_custom_column', 'manage_target_td', 10, 2 );//ライブラリ
add_filter( 'manage_edit-main_visual_columns', 'manage_thumbs_th' );	 //メインビジュアル
add_action( 'manage_main_visual_posts_custom_column', 'manage_target_td', 10, 2 );//メインビジュアル
add_filter( 'manage_edit-kago_aktr_mainvisual_columns', 'manage_thumbs_th' );	 //KAGO-AKTRメインビジュアル
add_action( 'manage_kago_aktr_mainvisual_posts_custom_column', 'manage_target_td', 10, 2 );//KAGO-AKTRメインビジュアル
add_filter( 'manage_edit-product_columns', 'manage_product_th' );	 //KAGO-AKTR商品一覧
add_action( 'manage_product_posts_custom_column', 'manage_target_td', 10, 2 );//KAGO-AKTR商品一覧
/* 「ライブラリ管理」表示先のソートをつける */
function library_sort($columns){
	$columns['targets'] = '表示先';
	return $columns;
  }
function library_sort_by_target( $query ) {
	if ( $query->is_main_query() && ( $orderby = $query->get( 'orderby' ) ) ) {
	  switch( $orderby ) {
		case '表示先':
		  $query->set( 'meta_key', 'target' );
		  $query->set( 'orderby', 'meta_value' );
		  break;
	  }
	}
  }
  add_filter( 'manage_edit-library_sortable_columns', 'library_sort');
  add_action( 'pre_get_posts', 'library_sort_by_target', 1 );

/* 「ライブラリ管理」表示先の絞り込みをつける */
function library_filter() {
	global $post_type;
	if ( 'library' == $post_type ) {
		echo "<select name='target'>";
		echo "<option value=''>すべての表示先</option>";

		$targets = acf_get_fields(168);
		foreach ($targets as $target => $data){
			foreach ($data['choices'] as $value => $label ){
				if ( filter_input( INPUT_GET, 'target' ) === $value ) {
					echo '<option value="'.$value.'" selected>'.$label.'</option>';
				}else{
					echo '<option value="'.$value.'">'.$label.'</option>';
				}
			}
		}
		echo '</select>';
	}
}
function pre_get_posts_admin_custom_field( $query ) {
    global $post_type;
	// 管理画面 / 投稿タイプがproduct / メインクエリ、のすべての条件を満たす場合 
    if ( is_admin() && 'library' === $post_type && $query->is_main_query() ) {
    	// カスタムフィールドのキー
        $meta_key = 'target';
        // 選択されている値
        $meta_value = filter_input( INPUT_GET, $meta_key );
        // クエリの検索条件に追加
        if ( strlen( $meta_value ) ) {
            $meta_query = $query->get( 'meta_query' );
            if ( ! is_array( $meta_query ) ) $meta_query = array();
            $meta_query[] = array(
                'key' => $meta_key,
                'value' => $meta_value,
                // 'compare' => 'LIKE' // ★フィールドタイプが"チェックボックス"の場合コメントアウト
            );
            $query->set( 'meta_query', $meta_query );
        }
    }
}
add_action( 'restrict_manage_posts', 'library_filter' );
add_action( 'pre_get_posts', 'pre_get_posts_admin_custom_field' );


//サムネイルカラム追加
function customize_manage_posts_columns($columns) {
    $columns['thumbnail'] = __('Thumbnail');
    return $columns;
}
//サムネイル画像表示
function customize_manage_posts_custom_column($column_name, $post_id) {
    if ( 'thumbnail' == $column_name) {
        $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:100px;height:auto;' ));
		if ( isset($thum) && $thum ) {
        	echo $thum;
    	} else {
        	echo __('【設定されていません】');
    	}
	}
}
add_filter( 'manage_posts_columns', 'customize_manage_posts_columns' );
add_action( 'manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2 );
