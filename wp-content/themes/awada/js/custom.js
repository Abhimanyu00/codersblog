(function($) {
 "use strict"
	$("body").fitVids();
	
	$("#services").owlCarousel({
		items : 3,
		lazyLoad : true,
		navigation : false,
		pagination : true,
		autoPlay: true
    });
	
	// WOW
	new WOW(
		{ offset: 300 }
	).init();
			
	// DM Top
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() > 1) {
			jQuery('.awadatop').css({bottom:"25px"});
		} else {
			jQuery('.awadatop').css({bottom:"-100px"});
		}
	});
	jQuery('.awadatop').click(function(){
		jQuery('html, body').animate({scrollTop: '0px'}, 800);
		return false;
	});

// Pretty Photo for blog
$('a[data-gal]').each(function() {
	$(this).attr('rel', $(this).data('gal'));
});  	
$("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
	$("#awada-header").affix({
	offset: {
	  top: 50
	, bottom: function () {
		return (this.bottom = $('#copyrights').outerHeight(true))
	  }
	}
});
$(document).ready(function(){
	$('form input, form textarea, form select:not(#billing_country)').addClass('form-control');
});

/* Slider */
var Page = (function() {

	var $navArrows = $( '#nav-arrows' ),
		$nav = $( '#nav-dots > span' ),
		slitslider = $( '#slider' ).slitslider( {
			autoplay : true,
			speed : 1500,
			onBeforeChange : function( slide, pos ) {

				$nav.removeClass( 'nav-dot-current' );
				$nav.eq( pos ).addClass( 'nav-dot-current' );

			}
		} ),

		init = function() {

			initEvents();
			
		},
		initEvents = function() {

			// add navigation events
			$navArrows.children( ':last' ).on( 'click', function() {

				slitslider.next();
				return false;

			} );

			$navArrows.children( ':first' ).on( 'click', function() {
				
				slitslider.previous();
				return false;

			} );

			$nav.each( function( i ) {
			
				$( this ).on( 'click', function( event ) {
					
					var $dot = jQuery( this );
					
					if( !slitslider.isActive() ) {

						$nav.removeClass( 'nav-dot-current' );
						$dot.addClass( 'nav-dot-current' );
					
					}
					
					slitslider.jump( i + 1 );
					return false;
				
				} );
				
			} );

		};

		return { init : init };

})();

Page.init();

})(jQuery);