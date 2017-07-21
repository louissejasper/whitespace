<?php
include_once( 'functions/initialization.php' );

include_once( 'functions/enqueue.php' );
include_once( 'functions/include-assets.php' );
include_once( 'functions/image-size.php' );
include_once( 'functions/views.php' );
include_once( 'functions/theme-support.php' );
include_once( 'functions/menus.php' );
include_once( 'functions/body-class.php' );
include_once( 'functions/wp-title.php' );
// include_once( 'functions/options.php' );
// include_once( 'functions/tinymce.php' );
// include_once( 'functions/backend.php' );
// include_once( 'functions/page-cat.php' );
// include_once( 'functions/term-settings.php' );

/* Include all the file inside the specify subfolder of functions folder */
include_all_php('posttype');
include_all_php('taxonomy');
include_all_php('options');
include_all_php('hook');
include_all_php('pregetpost');
include_all_php('shortcode');
include_all_php('widget');

/* For the developer's custom functions */

/* Developer's Script */
// include_once( 'functions/[custom-*].php' );