<?php
/**
 * Collection of your random function
 **/


/**
 * Global JS variable
 */
if ( ! function_exists( 'global_js_var' ) ) 
{
	function global_js_var() 
	{
	?>
		<script type="text/javascript">
			var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
			var themeurl = '<?php echo get_template_directory_uri(); ?>';
		</script>
	<?php
	}
	add_action('wp_head','global_js_var');
}

/**
 * Include all php inside the folder
 */
if ( ! function_exists( 'include_all_php' ) ) 
{
	function include_all_php( $folder )
	{
		foreach ( glob( dirname(__FILE__)."/{$folder}/*.php" ) as $filename )
		{
			include_once( $filename );
		}
	}
}

/**
 * Remove Rev Slider Metabox
 */
if ( is_admin() && ! function_exists( 'remove_revolution_slider_meta_boxes' ) ) 
{
	function remove_revolution_slider_meta_boxes() 
	{
		remove_meta_box( 'mymetabox_revslider_0', 'page', 'normal' );
		remove_meta_box( 'mymetabox_revslider_0', 'post', 'normal' );
		remove_meta_box( 'mymetabox_revslider_0', 'YOUR_CUSTOM_POST_TYPE', 'normal' );
	}
	// add_action( 'do_meta_boxes', 'remove_revolution_slider_meta_boxes' );
}

/**
 * Rename the function get_template_directory_uri()
 */
define( 'THEME_URL' , get_template_directory_uri() );