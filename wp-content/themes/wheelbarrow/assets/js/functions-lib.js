function debounce(func, wait, immediate) {
	var timeout;
	return function() {
		var context = this, args = arguments;
		var later = function() {
			timeout = null;
			if (!immediate) func.apply(context, args);
		};
		var callNow = immediate && !timeout;
		clearTimeout(timeout);
		timeout = setTimeout(later, wait);
		if (callNow) func.apply(context, args);
	}; 
};

function debounceUnique(callback, ms, uniqueId) {
  var timers = {};
  return function() {
    if (!uniqueId) {
      uniqueId = "Don't call this twice without a uniqueId";
    }
    if (timers[uniqueId]) {
      clearTimeout (timers[uniqueId]);
    }
    timers[uniqueId] = setTimeout(callback, ms);
  }();
};


// bp is optional. It turns the function on or off below the width you pass into the function.
function equalizer($elm, bp) {
	if ( bp !== undefined && jQuery(window).width() < bp  ) {
		$elm.height('');
		return
	}
	var maxHeight = 0;
				
	$elm.each(function(){
		jQuery(this).css('height', '');
	  if ( jQuery(this).outerHeight() > maxHeight ) { 
	   	maxHeight = jQuery(this).outerHeight();
	  }
	});
		
	$elm.css('height', maxHeight);	
};

;(function( $ ) {
	// extend jquery with menu function
	$.fn.shiftResponsiveMenu = function( options ) {
	  var settings = $.extend({
	      $menuContainer: $('.site-header .row'),
	      $siblingElm: false,
	      $siteHeader: $('.site-header')
	  }, options );
	  
		var width =	Math.floor( settings.$menuContainer.width() );
				if (settings.$siblingElm) {
					var titleWidth = Math.ceil( settings.$siblingElm.innerWidth() );
				};
				var navWidth = Math.ceil( this.outerWidth(true) );
				var availableSpace;
				settings.$siblingElm ? ( availableSpace = width - titleWidth ) : availableSpace = width;
				
		// set a class to turn the menu on and off 	
		if ( navWidth >= availableSpace ) {
			$('body').addClass('is-active-menu');
			
		} else {
			$('body').removeClass('is-active-menu');
		}
		
		return this;
			    
	};
	
	$('#menu-close').on('click', function() {
		$('body').removeClass('is-visible-menu');
	})
	
	$(document).on('keyup', function(e) {
	
		if (e.keyCode == 27) {
			$('body').removeClass('is-visible-menu');
		}
		
	})
	
})( jQuery );