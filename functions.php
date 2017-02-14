<?php
include_once( 'functions/initialization.php' );

include_once( 'functions/view.php' );
include_once( 'functions/theme-support.php' );
include_once( 'functions/image-size.php' );
include_once( 'functions/menus.php' );
include_once( 'functions/enqueue.php' );
include_once( 'functions/include-assets.php' );
include_once( 'functions/body-class.php' );
include_once( 'functions/wp-title.php' );
// include_once( 'functions/backend.php' );
// include_once( 'functions/page-cat.php' );
// include_once( 'functions/options.php' );
// include_once( 'functions/term-settings.php' );
// include_once( 'functions/tinymce.php' );

/* Include all the file inside the specify subfolder of functions folder */
include_all_php('posttype');
include_all_php('taxonomy');
include_all_php('ajax');
include_all_php('hook');
include_all_php('pregetpost');
include_all_php('shortcode');
include_all_php('widget');

/* For the developer's custom functions */

/* --> More than one developer? Use this */
include_once( 'functions/custom1.php' );
include_once( 'functions/custom2.php' );
include_once( 'functions/custom3.php' );
include_once( 'functions/custom4.php' );

/* --> Else, use this */
include_once( 'functions/main.php' );