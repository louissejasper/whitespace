jQuery.noConflict();

/**
 * Script On Document Ready
 */
jQuery( document ).ready( function( $ ) {
	autoHeight( '.archive-container .details' );
} );

/**
 * Script On Resize
 */
jQuery( window ).resize( function( $ ) {
    autoHeight( '.archive-container .details' );
} );

/**
 * Functions
 */
function autoHeight( resource ) {
	$( resource ).height( 'auto' );
	var maxHeight = Math.max.apply( null, $( resource ).map( function() {
	    return $( this ).height();
	} ).get() );

	$( resource ).height( maxHeight );
}