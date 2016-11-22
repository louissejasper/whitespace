<?php
/**
 * Add acf option page in every sidebar menu in wordpress backend.
 * Note: You must have ACF first with Opition
 **/
if( function_exists('acf_add_options_page') ) {
 
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title' 	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability' 	=> 'manage_options',
		'position' 		=> 59,
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Homepage Slider Settings',
	// 	'menu_title' 	=> 'Homepage Slider',
	// 	'menu_slug' 	=> 'homepage-slider-settings',
	// 	'capability' 	=> 'manage_options',
	// 	'parent_slug' 	=> 'edit.php?post_type=ypur-posttype',
	// ));
 
}