<?php
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
 * Include all the php files inside the given folder
 * @param  [string] $folder_name [name of the folder that you want to include all the files inside of it]
 * @return [void]				 [include all the php files inside the given folder]
 */
if ( ! function_exists( 'include_all_php' ) ) 
{
	function include_all_php( $folder_name )
	{
		foreach ( glob( dirname(__FILE__)."/{$folder_name}/*.php" ) as $filename ) 
		{
			include_once( $filename );
		}
	}
}

/**
 * Global checker
 * @param  [string/array] $var  [the function will check this variable]
 * @return [boolean]      	 	[true if not empty, not null, is set, and not equal to '']
 */
if ( ! function_exists( 'checker' ) ) 
{
	function checker( $var )
	{
		return ( $var && $var != '' && ! empty( $var ) && ! is_null( $var ) );
	}
}

/**
 * Rename the function get_template_directory_uri()
 */
define( 'THEME_URL' , get_template_directory_uri() );