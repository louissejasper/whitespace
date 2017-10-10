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
// include_once( 'functions/rewrite-rules.php' );
// include_once( 'functions/options.php' ); /* Required ACF Plugin */
// include_once( 'functions/tinymce.php' ); /* Reqyured Advanced TinyMCE Plugin */
// include_once( 'functions/backend.php' );
// include_once( 'functions/page-cat.php' );
// include_once( 'functions/term-settings.php' );

/* Include all the file inside the specify subfolder of functions folder */
include_all_php('posttype');
include_all_php('pregetpost');
include_all_php('shortcode');
include_all_php('taxonomy');

/* AJAX Script */
// include_once( 'ajax/function-name/function-name.php' );

/* Develoer's Custom Script */
// include_once( 'functions/custom-*.php' );