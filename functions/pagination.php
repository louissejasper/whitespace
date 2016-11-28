<?php
/* view( 'pagination', array( 'post_type' => [post_type], 'limit' => [limit] ) ) */
echo paginate_links( array(
	'base' 		=> str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
	'format' 	=> '?paged=%#%',
	'current' 	=> ( get_query_var('paged') ) ? get_query_var('paged') : 1,
	'total' 	=> ceil( wp_count_posts( $post_type )->publish / $limit ),
	'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
	'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
	'type'		=> 'list',
) );