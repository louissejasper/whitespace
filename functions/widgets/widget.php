<?php
// /** 
//  * Register template_name widget areas
//  **/
// if ( ! function_exists( 'addWidgets' ) ) {
	
// 	function addWidgets() {
// 		/* require get_template_directory() . '/functions/widgets/WidgetClassName.php';
// 		register_widget( 'WidgetClassName' ); */

// 		register_sidebar( array(
// 			'name'          => __( 'Main Sidebar', 'template_name' ),
// 			'id'            => 'sidebar-1',
// 			'description'   => __( '', 'template_name' ),
// 			'class'			=> '',
// 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<h1 class="widget-title">',
// 			'after_title'   => '</h1>',
// 		) );
// 		register_sidebar( array(
// 			'name'          => __( 'Content Sidebar', 'template_name' ),
// 			'id'            => 'sidebar-2',
// 			'description'   => __( 'Additional sidebar that appears on the right.', 'template_name' ),
// 			'class'			=> '',
// 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<h1 class="widget-title">',
// 			'after_title'   => '</h1>',
// 		) );
// 		register_sidebar( array(
// 			'name'          => __( 'Footer Widget Area', 'template_name' ),
// 			'id'            => 'sidebar-3',
// 			'description'   => __( 'Appears in the footer section of the site.', 'template_name' ),
// 			'class'			=> '',
// 			'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 			'after_widget'  => '</div>',
// 			'before_title'  => '<h1 class="widget-title">',
// 			'after_title'   => '</h1>',
// 		) );
// 	}
// 	add_action( 'widgets_init', 'addWidgets' );
// }