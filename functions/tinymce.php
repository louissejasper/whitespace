<?php
// Customize mce editor font sizes
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
	function wpex_mce_text_sizes( $initArray ){
		$initArray['fontsize_formats'] = "12px 14px 16px 18px 20px 30px 32px 36px 40px 72px 80px";
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

// Add custom Fonts to the Fonts list
if ( ! function_exists( 'wpex_mce_google_fonts_array' ) ) {
	function wpex_mce_google_fonts_array( $initArray ) {
		$initArray['font_formats'] = 'Montserrat=Montserrat; OpenSans=Open Sans';
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_google_fonts_array' );

if ( ! function_exists( 'wpex_mce_google_fonts_styles' ) ) {
	function wpex_mce_google_fonts_styles() {
		$fonts = 'https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700|Open+Sans:400,600';
		add_editor_style( str_replace( ',', '%2C', $fonts ) );
	}
}
add_action( 'init', 'wpex_mce_google_fonts_styles' );

function my_mce_before_init_insert_formats( $init_array ) {  
	/* Class name that defined in css file in your 'plugin_mce_css' function */
	$classes = array(
		'thin', 'light', 'regular', 'medium', 'semi-bold', 'bold', 'extra-bold', 'black',
		'montserrat', 'montserrat-thin', 'montserrat-light', 'montserrat-regular', 'montserrat-bold',
		'opensans', 'opensans-regular', 'opensans-semi-bold'
	);
	
	$style_formats = array();

	/* Store the data */
	foreach ( $classes as $class ) {
		$style_formats[] = array(
			'title'   => $class,
			'inline'  => 'span',
			'classes' => $class
		);
	}

	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array; 
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// get your custom style
function plugin_mce_css( $mce_css ) {

  if ( !empty( $mce_css ) )

    $mce_css .= ',';

    $mce_css .= get_bloginfo('template_url').'/assets/css/font.css';

    return $mce_css;

}
add_filter( 'mce_css', 'plugin_mce_css' );