( function( $ ) {
	/* Nicescroll */
		var args = {
			cursorwidth: 4,
	        cursorcolor: '#000',
	        zindex: 9999999,
	        horizrailenabled: false,
	        cursorborderradius: 3,
	        cursorborder: "1px solid #000",
	        background: "transparent",
	        autohidemode: true
		};
	/* Nicescroll */

	/**
	 * Script On Document Ready
	 */
	autoHeight( '.archive-container .details' );

	/**
	 * Script On Resize
	 */
	$( window ).resize( function( $ ) {
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
} ( jQuery ) ); 
