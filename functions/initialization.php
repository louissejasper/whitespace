<?php
/**
 * Collection of your random function
 **/
add_action('wp_head','pluginname_ajaxurl');
function pluginname_ajaxurl() {
?>
	<script type="text/javascript">
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
	</script>
<?php
}

if ( ! function_exists( 'include_all_php' ) ) {
	function include_all_php($folder){
		foreach (glob(dirname(__FILE__)."/{$folder}/*.php") as $filename)
		{
			include_once( $filename );
		}
	}
}

define( 'THEME_URL' , get_template_directory_uri() );
define( 'THEME_URL' , get_template_directory() 	);