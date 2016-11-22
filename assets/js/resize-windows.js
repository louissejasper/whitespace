( function( $ ) {
	$( document ).ready( function() {
		$( '.resize' ).fadeOut( 1500 );

		$( '#window-resize' ).on( 'click', function( e ) {
			e.preventDefault();
			resize();
		} );

		$( document ).keypress( function( e ) {
			// Enter and check if the resize form is visible
			if( e.which == 13 && $( '.resize' ).is(':visible') == true ) {
				resize();
			}
			// Shift + E
			if( e.shiftKey == true && e.ctrlKey == false && e.which == 69 ) {
				$( '.resize' ).fadeIn();
			}
			// Shift + Ctrl + E
			if( e.shiftKey == true && e.ctrlKey == true && e.which == 5 ) {
				$( '.resize' ).fadeOut();
			}
		} );
	} );
	
	function resize() {
		var url = window.location.href;
		var width = $( 'input[name="window-width"]' ).val();
		var height = $( 'input[name="window-height"]' ).val();
		if( width == '' && height == '' ) {
			alert( "Please input width and height of the new browser." );
			return;
		}
		if( width == '' ) { 
			width = $( window ).width(); 
		}
		if( height == '' ) { 
			height = $( window ).height(); 
		}
		window.open( url, "", "width="+width+", height="+height );
	}
} ( jQuery ) );