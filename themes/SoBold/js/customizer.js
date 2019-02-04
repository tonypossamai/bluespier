/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	$('#toggle').click(function() {
		$(this).toggleClass('active');
		$('#overlay').toggleClass('open');
	   });

} )( jQuery );



