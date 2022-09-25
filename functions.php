<?php

	// Custom Except Length
	function st_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'st_excerpt_length' );
	
	// Define Post Thumbnails
	add_theme_support( 'post-thumbnails');
	add_image_size( 'banner', 1600, 900, true );
	add_image_size( 'project', 1000, 600, true );
		    
	// Add Theme Features
	add_post_type_support( 'page', 'excerpt' );
	
	// Add theme support for Gutenberg
	function st_setup() {
		add_theme_support( 'align-wide' );
		add_theme_support( 'editor-color-palette' );
		add_theme_support( 'disable-custom-colors' );
		add_theme_support(' disable-custom-font-sizes' );
		add_theme_support( 'responsive-embeds' );
	}
	add_action( 'after_setup_theme', 'st_setup' );
	
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'White', 'st' ),
			'slug'  => 'white',
			'color'	=> '#FFFFFF',
		),
		array(
			'name'  => __( 'Blue', 'st' ),
			'slug'  => 'blue',
			'color'	=> '#59BACC',
		),
		array(
			'name'  => __( 'Green', 'st' ),
			'slug'  => 'green',
			'color' => '#58AD69',
		),
		array(
			'name'  => __( 'Orange', 'st' ),
			'slug'  => 'orange',
			'color' => '#FFBC49',
		),
		array(
			'name'	=> __( 'Red', 'st' ),
			'slug'	=> 'red',
			'color'	=> '#E2574C',
		),
		array(
			'name'  => __( 'Charcoal', 'st' ),
			'slug'  => 'charcoal',
			'color'	=> '#15352C',
		),
		array(
			'name'  => __( 'Black', 'st' ),
			'slug'  => 'black',
			'color'	=> '#000000',
		),
	) );
	
	// Limit the core blocks
// 	add_filter( 'allowed_block_types', 'st_allowed_block_types' );
	function st_allowed_block_types( $allowed_blocks ) {
		return array(
			'core/image',
			'core/paragraph',
			'core/heading',
			'core/gallery',
			'core/list',
			'core/quote',
			'core/file',
			'core/button',
			'core/video',
			'core-embed/youtube',
			'gravityforms/block',
			'coblocks/gallery-masonry',
		);
	}

	// Edit the editor font sizes
	add_theme_support( 'editor-font-sizes', array(
		array(
			'name'      => __( 'small', 'st' ),
			'shortName' => __( 'S', 'st' ),
			'size'      => 14,
			'slug'      => 'small'
		),
		array(
			'name'      => __( 'regular', 'st' ),
			'shortName' => __( 'M', 'st' ),
			'size'      => 18,
			'slug'      => 'regular'
		),
		array(
			'name'      => __( 'large', 'st' ),
			'shortName' => __( 'L', 'st' ),
			'size'      => 20,
			'slug'      => 'large'
		)
	) );
	
	// -- Disable Gradients
	add_theme_support( 'disable-custom-gradients' );
	add_theme_support( 'editor-gradient-presets', array() );
	
	// -- Disable Custom Colors
	add_theme_support( 'disable-custom-colors' );
		
	// Register Main Menu 
	add_action( 'init', 'register_my_menu' );

	function register_my_menu() {
		register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
		register_nav_menu( 'footer-menu', __( 'Footer Menu' ) );
	}
	
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page('Theme Settings');
	}
	
	function st_scripts() {
		wp_enqueue_style( 'st-style', get_stylesheet_directory_uri() . '/assets/css/site.css', array());
		wp_enqueue_style( 'st-ir-style', get_stylesheet_directory_uri() . '/assets/css/impact-report.min.css', array());
		wp_enqueue_style( 'st-owl-style', get_stylesheet_directory_uri() . '/assets/css/owl.carousel.css', array() );
		wp_enqueue_script( 'st-global', get_stylesheet_directory_uri() . '/assets/js/global-min.js', array( 'jquery' ), true );
		wp_enqueue_script( 'st-owl-js', get_stylesheet_directory_uri() . '/assets/js/owl.carousel.js', array(), false, true );
	}
	add_action( 'wp_enqueue_scripts', 'st_scripts' );
	
	function st_gsap_script() {
		if ( is_page_template( 'impact-report.php' ) ) {
	    	wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js', array(), false, true );
	    	wp_enqueue_script( 'gsap-scroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollToPlugin.min.js', array(), false, true );
	   		wp_enqueue_script( 'gsap-scrolltrigger-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js', array(), false, true );
		}
	}
	add_action( 'wp_enqueue_scripts', 'st_gsap_script' );
?>