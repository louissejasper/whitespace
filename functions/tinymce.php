<?php
// Customize mce editor font sizes
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
	function wpex_mce_text_sizes( $initArray ){
		$initArray['fontsize_formats'] = "12px 15px 17px 19px 25px";
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

// Add custom Fonts to the Fonts list
if ( ! function_exists( 'wpex_mce_google_fonts_array' ) ) {
	function wpex_mce_google_fonts_array( $initArray ) {
		$initArray['font_formats'] = 'Raleway=Raleway; Oswald=Oswald; OpenSans=Open Sans; Montserrat=Montserrat; PTSans=PT Sans; PTSansCaption=PT Sans Caption';
		return $initArray;
	}
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_google_fonts_array' );

if ( ! function_exists( 'wpex_mce_google_fonts_styles' ) ) {
	function wpex_mce_google_fonts_styles() {
		$font1 = 'https://fonts.googleapis.com/css?family=Raleway:400,500,700';
		$font2 = 'https://fonts.googleapis.com/css?family=Oswald:400,700,300';
		$font3 = 'https://fonts.googleapis.com/css?family=Open+Sans:400,600,700';
		$font4 = 'https://fonts.googleapis.com/css?family=Montserrat:400,700';
		$font5 = 'https://fonts.googleapis.com/css?family=PT+Sans:400,700';
		$font6 = 'https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700';
		add_editor_style( str_replace( ',', '%2C', $font1 ) );
		add_editor_style( str_replace( ',', '%2C', $font2 ) );
		add_editor_style( str_replace( ',', '%2C', $font3 ) );
		add_editor_style( str_replace( ',', '%2C', $font4 ) );
		add_editor_style( str_replace( ',', '%2C', $font5 ) );
		add_editor_style( str_replace( ',', '%2C', $font6 ) );
	}
}
add_action( 'init', 'wpex_mce_google_fonts_styles' );

function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
						// Each array child is a format with it's own settings
						array(  
							'title' => 'SourceSansPro Normal',  
							'inline' => 'span',  
							'classes' => 'sourcesanspro-regular',	
							),
						array(  
							'title' => 'SourceSansPro Semibold',  
							'inline' => 'span',  
							'classes' => 'sourcesanspro-semibold',	
							), 
						array(  
							'title' => 'Opensans Normal',  
							'inline' => 'span',  
							'classes' => 'opensans-regular',	
							),  
						array(  
							'title' => 'Abel Normal',  
							'inline' => 'span',  
							'classes' => 'abel-regular',	
							),  
					);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// get your custom style
function plugin_mce_css( $mce_css ) {

  if ( !empty( $mce_css ) ) {

    $mce_css .= ',';

    $mce_css .= get_bloginfo('template_url').'/assets/css/tinymce.css';

    return $mce_css;

  }

add_filter( 'mce_css', 'plugin_mce_css' );