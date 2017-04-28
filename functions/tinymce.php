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
		$initArray['font_formats'] = 'Montserrat=Montserrat; SourceSansPro=Source Sans Pro';
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_google_fonts_array' );

if ( ! function_exists( 'wpex_mce_google_fonts_styles' ) ) {
	function wpex_mce_google_fonts_styles() {
		$fonts = 'https://fonts.googleapis.com/css?family=Montserrat:100,300,400,700|Source+Sans+Pro:400,600';
		add_editor_style( str_replace( ',', '%2C', $fonts ) );
	}
}
add_action( 'init', 'wpex_mce_google_fonts_styles' );

function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
						// Each array child is a format with it's own settings
						array(  
							'title' => 'bold',  
							'inline' => 'span',  
							'classes' => 'bold',	
							),
						array(  
							'title' => 'semibold',  
							'inline' => 'span',  
							'classes' => 'semibold',	
							), 
						array(  
							'title' => 'regular',  
							'inline' => 'span',  
							'classes' => 'regular',	
							),  
						array(  
							'title' => 'light',  
							'inline' => 'span',  
							'classes' => 'light',	
							),    
						array(  
							'title' => 'thin',  
							'inline' => 'span',  
							'classes' => 'thin',	
							),  
					);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// get your custom style
function plugin_mce_css( $mce_css ) {

  if ( !empty( $mce_css ) )

    $mce_css .= ',';

    $mce_css .= get_bloginfo('template_url').'/assets/css/tinymce.css';

    return $mce_css;

}
add_filter( 'mce_css', 'plugin_mce_css' );