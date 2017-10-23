<?php
/**
 * Include default scripts and css in frontend
 **/
if ( ! function_exists( 'enqueue_style_script' ) )
{
	function enqueue_style_script() 
	{
		/* 
		 * Register/Hook Fonts
		 */	
		wp_enqueue_style( 'font-roboto-css','//fonts.googleapis.com/css?family=Montserrat:100,300,400,700|Open+Sans:400,600' );

		/* 
		 * Register/Hook Styles
		 */	
		
		/* Third Party Styles */
		wp_enqueue_style('font_awesome', THEME_URL .'/node_modules/font-awesome/css/font-awesome.min.css');
		wp_enqueue_style('bootstrap_css', THEME_URL .'/node_modules/bootstrap/dist/css/bootstrap.min.css');
		wp_enqueue_style('sweetalert2_css', THEME_URL .'/node_modules/sweetalert2/dist/sweetalert2.min.css');
		
		/* 
		 * Register/Hook Scripts
		 */
		
		/* Third Party Script */
		wp_register_script( 'nicescroll', THEME_URL  .'/node_modules/nicescroll/jquery.nicescroll.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'nicescroll' );
		
		wp_register_script( 'popper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'popper_js' );
		
		wp_register_script( 'bootstrap_js', THEME_URL  .'/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'bootstrap_js' );

		wp_register_script( 'sweetalert2_js', THEME_URL  .'/node_modules/sweetalert2/dist/sweetalert2.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'sweetalert2_js' );

		wp_register_script( 'sweetalert2_support_js', '//cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'sweetalert2_support_js' );

		/* AJAX Script */
		// wp_register_script( 'function-name', THEME_URL . '/ajax/function-name/function-name.js', array( 'jquery' ), NULL, true );
		// wp_enqueue_script( 'function-name' );
		
		/* Develoer's Custom Script */
		// wp_register_script( 'custom-*', THEME_URL . '/assets/js/custom-*.js', array( 'jquery' ), NULL, true );
		// wp_enqueue_script( 'custom-*' );
		
		wp_register_script( 'custom-js', THEME_URL  .'/assets/js/custom.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'custom-js' );


		/**
		 * Browser Compatibility
		 */
		$u_agent = $_SERVER['HTTP_USER_AGENT'];
        if( preg_match( '/trident/i', $u_agent ) ) 
        {
            /**
             * Enqueue your style/script only @ IE
             */
        } 
        elseif( preg_match( '/firefox/i', $u_agent ) ) 
        {
            /**
             * Enqueue your style/script only @ Mozilla Firefox
             */
        } 
        elseif( preg_match( '/mac/i', $u_agent ) ) 
        {
            /**
             * Enqueue your style/script only @ Safari
             */
        } 
        elseif( preg_match( '/chrome/i', $u_agent ) ) 
        {
            /**
             * Enqueue your style/script only @ Google Chrome
             */
        } 
        elseif( preg_match( '/Opera/i',$u_agent ) || preg_match( '/OPR/i',$u_agent ) ) 
        {
            /**
             * Enqueue your style/script only @ Opera
             */
        }

	}
	add_action('wp_enqueue_scripts','enqueue_style_script');
}

/**
 * Include default scripts and css in backend
 **/
if ( ! function_exists( 'enqueue_admin_style_script' ) ) 
{
	function enqueue_admin_style_script() 
	{
		/* 
		 * Register/Hook Scripts for backend
		 */
		wp_register_script( 'backend', THEME_URL .'/assets/js/backend.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'backend' );
	}
	add_action( 'admin_enqueue_scripts', 'enqueue_admin_style_script' );
}