<?php
/**
 * Include default scripts and css
 * Include in wp_header()
 **/
if ( ! function_exists( 'enqueue_style_script' ) ) {

	function enqueue_style_script() 
	{
		/* 
		 * Register/Hook Fonts
		 */	
		//wp_enqueue_style( 'font-roboto-css','//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' );

		/* 
		 * Register/Hook Styles
		 */	
		wp_enqueue_style('font_awesome', THEME_URL .'/vendor/font-awesome/css/font-awesome.min.css');
		wp_enqueue_style('bootstrap_css', THEME_URL .'/vendor/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style('sweetalert2_css', THEME_URL .'/vendor/sweetalert2/sweetalert2.min.css');

		wp_enqueue_style('stylesheet',get_stylesheet_uri());
		wp_enqueue_style('header', THEME_URL .'/assets/css/header.css');
		wp_enqueue_style('footer', THEME_URL .'/assets/css/footer.css');
		wp_enqueue_style('tinymce', THEME_URL .'/assets/css/tinymce.css');
		wp_enqueue_style('custom', THEME_URL .'/assets/css/custom.css');
		
		/* 
		 * Register/Hook Scripts
		 */
		wp_register_script( 'bootstrap_js', THEME_URL  .'/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'bootstrap_js' );

		wp_register_script( 'sweetalert2_js', THEME_URL  .'/vendor/sweetalert2/sweetalert2.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'sweetalert2_js' );

		wp_register_script( 'seetalert2_support_js', '//cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'seetalert2_support_js' );

		wp_register_script( 'custom_js', THEME_URL  .'/assets/js/custom.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'custom_js' );

	}
	add_action('wp_enqueue_scripts','enqueue_style_script');
}

if ( ! function_exists( 'enqueue_admin_style_script' ) ) {

	function enqueue_admin_style_script() 
	{
		/* 
		 * Register/Hook Styles for backend
		 */
		wp_enqueue_style( 'backend', THEME_URL .'/assets/css/backend.css' );

		/* 
		 * Register/Hook Scripts for backend
		 */
		wp_register_script( 'backend', THEME_URL .'/assets/js/backend.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'backend' );
	}

	add_action( 'admin_enqueue_scripts', 'enqueue_admin_style_script' );
}