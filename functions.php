<?php
/*
 * Requires
 */
require_once get_template_directory() . "/inc/customizer-classes.php";
require_once get_template_directory() . "/inc/sanitize.php";
require_once get_template_directory() . "/inc/customizer.php";
require_once get_template_directory() . "/inc/customizer/template-tag.php";
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
if(class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/wc-modifications.php';
}

/*
 * Load all css and js scripts
 */
function loadScripts() {
	/*
	 * Custom theme colors
	 */
	
	if(get_theme_mod( 'set_theme_color') == 'dark') {
		wp_enqueue_style( 'theme-dark', get_template_directory_uri(). '/assets/theme-dark.css',
			array(), '1.0.0', 'all' );
	}
	
	if(get_theme_mod( 'set_theme_color') == 'light') {
		wp_enqueue_style( 'theme-light', get_template_directory_uri(). '/assets/theme-light.css',
			array(), '1.0.0', 'all' );
	}
	
	wp_enqueue_style( 'template-blog', get_template_directory_uri(). '/assets/template-blog.css',
		array(), '1.0.0', 'all' );
	
	wp_enqueue_style( 'style', get_template_directory_uri(). '/style.css',
		array(), '1.0.0', 'all' );
	
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap.css',
		array(), '4.5.0', 'all' );
	
	wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap-grid.css',
		array(), '4.5.0', 'all' );
	
	wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri(). '/assets/vendor/bootstrap/css/bootstrap-reboot.css',
		array(), '4.5.0', 'all' );
	
	wp_enqueue_style( 'all', get_template_directory_uri(). '/assets/vendor/fontawesome-free/css/all.min.css',
		array(), '5.13.1', 'all' );
	
	wp_enqueue_style( 'simple-line-icons', get_template_directory_uri(). '/assets/vendor/simple-line-icons/css/simple-line-icons.css',
		array(), '2.4.1', 'all' );
	
	wp_enqueue_style( 'landing-page', get_template_directory_uri(). '/assets/css/landing-page.min.css',
		array(), '5.0.8', 'all' );
	
	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );
	
	// Javascript
	wp_enqueue_script( 'bootstrap.bundle.min.js', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
		array( 'jquery' ), '4.5.0', true );
}
add_action( 'wp_enqueue_scripts', 'loadScripts' );

function anero_config()
{
	//Navbar menu
	register_nav_menus(
		array(
			'anero_main_menu'	=> __('Main Menu'),
			'anero_footer_menu'	=> __('Footer Menu')
		)
	);
	
	//Custom logo support
	add_theme_support('custom-logo', [
		'height' => '46',
		'width' => '220'
	]);
	
	//Woocommerce support
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width'		=> 255,
		'single_image_width'		=> 255,
		'product_grid'				=> array(
			'default_rows'    => 10,
			'min_rows'        => 5,
			'max_rows'        => 10,
			'default_columns' => 1,
			'min_columns'     => 1,
			'max_columns'     => 1,
		)
	) );
	
	add_theme_support('title-tag');
	
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'anero-blog', 250, 250, array( 'center', 'center' ) );
	add_image_size( 'anero-blog-single', 960, 600, array( 'center', 'center' ) );
	if ( ! isset( $content_width ) ) {
		$content_width = 600;
	}
}
add_action( 'after_setup_theme', 'anero_config', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
add_action( 'widgets_init', 'anero_sidebars' );
function anero_sidebars() {
	register_sidebar(
		array(
			'name'			=> esc_html__( 'Footer Sidebar 1', 'anero' ),
			'id'			=> 'anero-sidebar-footer-1',
			'description'	=> esc_html__( 'Drag and drop your widgets here', 'anero' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		));
	
	register_sidebar(
		array(
			'name'			=> esc_html__( 'Footer Sidebar 2', 'anero' ),
			'id'			=> 'anero-sidebar-footer-2',
			'description'	=> esc_html__( 'Drag and drop your widgets here', 'anero' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		));
	
	register_sidebar(
		array(
			'name'			=> esc_html__( 'Footer Sidebar 3', 'anero' ),
			'id'			=> 'anero-sidebar-footer-3',
			'description'	=> esc_html__( 'Drag and drop your widgets here', 'anero' ),
			'before_widget'	=> '<div id="%1$s" class="widget %2$s widget-wrapper">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h4 class="widget-title">',
			'after_title'	=> '</h4>',
		));
	
	register_sidebar([
		'name' => 'Post Sidebar',
		'id' => 'sidebar-post',
		'description' => esc_html__( 'Drag and drop your widgets here', 'anero' ),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2 style="display: none;">',
		'after_title' => '</h2>'
	]);
}

function templateBlogGetPosts($category, $count): array {
	return [
		'post_type' 		=> 'post',
		'post_status'	 	=> 'publish',
		'category__in' 		=> absint( $category ),
		'posts_per_page' 	=> absint( $count )
	];
}