<?php
// // Creating the widget 
// class FooterWidget extends WP_Widget {

// 	function __construct() {
// 		parent::__construct(
// 		// Base ID of your widget
// 		'footer_widget', 

// 		// Widget name will appear in UI
// 		__('Footer Widget', 'wpb_widget_domain'), 

// 		// Widget description
// 		array( 'description' => __( 'Customize contents of the footer', 'wpb_widget_domain' ), ) 
// 		);
// 	}

// 	// Creating widget front-end
// 	// This is where the action happens
// 	public function widget( $args, $instance ) {
// 		$title = apply_filters( 'widget_title', $instance['title'] );
// 		$args['before_widget'] = "";
// 		$args['after_widget'] = "";
// 	}
			
// 	// Widget Backend 
// 	public function form( $instance ) {
		
// 	}
		
// 	// Updating widget replacing old instances with new
// 	public function update( $new_instance, $old_instance ) {
// 		return $instance;
// 	}
// } // Class wpb_widget ends here