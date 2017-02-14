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
		
		/* Third Party Styles */
		wp_enqueue_style('normalize', THEME_URL .'/vendor/normalize/normalize.css');
		wp_enqueue_style('bootstrap_css', THEME_URL .'/vendor/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style('font_awesome', THEME_URL .'/vendor/font-awesome/css/font-awesome.min.css');
		wp_enqueue_style('hover_master', THEME_URL .'/vendor/hover-master/hover-min.css');

		/* Styles for the given part */
		wp_enqueue_style('stylesheet',get_stylesheet_uri());
		wp_enqueue_style('header', THEME_URL .'/assets/css/header.css');
		wp_enqueue_style('footer', THEME_URL .'/assets/css/footer.css');
		wp_enqueue_style('tinymce', THEME_URL .'/assets/css/tinymce.css');

		/* For Develoer's Custom Style */
		wp_enqueue_style('custom1', THEME_URL .'/assets/css/custom1.css');
		wp_enqueue_style('custom2', THEME_URL .'/assets/css/custom2.css');
		wp_enqueue_style('custom3', THEME_URL .'/assets/css/custom3.css');
		wp_enqueue_style('custom4', THEME_URL .'/assets/css/custom4.css');
		wp_enqueue_style('main', THEME_URL .'/assets/css/main.css');
		
		/* 
		 * Register/Hook Scripts
		 */
		
		/* Third Party Script */
		wp_register_script( 'bootstrap_js', THEME_URL  .'/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'bootstrap_js' );

		wp_register_script( 'smoothscroll', THEME_URL .'/vendor/smoothscroll/smoothscroll.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'smoothscroll' );

		/* Customize Script */
		wp_register_script( 'custom1', THEME_URL . '/assets/js/custom1.js', array( 'jquery' ), NULL, true );
	    wp_enqueue_script( 'custom1' );

		wp_register_script( 'custom2', THEME_URL . '/assets/js/custom2.js', array( 'jquery' ), NULL, true );
	    wp_enqueue_script( 'custom2' );

		wp_register_script( 'custom3', THEME_URL . '/assets/js/custom3.js', array( 'jquery' ), NULL, true );
	    wp_enqueue_script( 'custom3' );

		wp_register_script( 'custom4', THEME_URL . '/assets/js/custom4.js', array( 'jquery' ), NULL, true );
	    wp_enqueue_script( 'custom4' );

	    wp_register_script( 'main', THEME_URL . '/assets/js/main.js', array( 'jquery' ), NULL, true );
	    wp_enqueue_script( 'main' );

	    wp_register_script( 'resize', THEME_URL . '/assets/js/resize.js', array( 'jquery' ), NULL, true );
	    wp_enqueue_script( 'resize' );

		/* AJAX */
		// wp_register_script( '[filename]', THEME_URL .'/assets/js/ajax/[filename].js',array('jquery'),NULL,true);
		// wp_enqueue_script( '[filename] );
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

// if ( ! function_exists( 'include_js' ) ) {
// 	function include_js( $name = null )
// 	{
// 		if ( $name != null ) {
// 			$path = THEME_URL .'/assets/js/'. $name .'.js';
// 			wp_register_script( $name, $path, array( 'jquery' ), NULL, true );
// 		    wp_enqueue_script( $name );
// 		}
// 	}
// 	add_action( 'wp_enqueue_scripts', 'include_js', 10, 1 );
// }

// if ( ! function_exists( 'include_css' ) ) {
// 	function include_css( $name = null )
// 	{
// 		if ( $name != null ) {
// 			$path = THEME_URL .'/assets/css/'. $name .'.css';
// 			wp_enqueue_style( $name, $path );
// 		}
// 	}
// 	add_action( 'wp_enqueue_scripts', 'include_css', 10, 1 );
// }