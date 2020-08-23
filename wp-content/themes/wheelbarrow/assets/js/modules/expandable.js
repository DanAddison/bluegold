/*
*  Module: Expandable
*
*  Simple hide/show for content blocks
*
*	Code Example:
*	
<div class="item__entry expandable">
	<?php the_content(); ?>
</div>
*
*/

var Expandable = (function($) {
			
  var options = {
    elmClass: '.expandable', // Class applied to container to be effected 
		activeHeight: 250
  };
  var $container, $toggle;

	var _hideShow = function( ) {
		
		console.log();
		
		if ( $container.attr('data-state') == "open" || $container.attr('data-state') == undefined ) {
			$container.attr('data-state', 'closed');
			$toggle.text('expand');
		}	else {
			$container.attr('data-state', 'open');
			$toggle.text('close');
		};	
	
	};	
		
	var _runTest = function() {
		
		var height = $container.height();

	 	if ( height < options.activeHeight ||  $container.hasClass('initialised') == true ) {
		 	return false;
	 	};

	};
		
  var _bindEvents = function(  ) {

	  $('body').on('click', '.expandable__toggle', function() {
	  	_hideShow();
		});
		
  };  
  
  var destroy = function() {
	 
	  $('.expandable__bar').remove();
	  $container.removeClass('initialised').attr('data-state', '');
	  
  };
  
  var init = function( settings ) {
		
		var userOptions = {};
		
	  $.each(settings, function( key, value ) {
		  userOptions[key] = value;
	  });
	  	  
		$.extend(options, userOptions);	
		
		$container = $( options.elmClass );
		
		if ( _runTest() == false ) { 
			return;	 
		};
	  	  	  	 	
	 	$container.append('<div class="expandable__bar"><button class="expandable__toggle" type="button">expand</button></div>');

		$toggle = $container.find('.expandable__toggle');		

	 	_bindEvents( );
	 	_hideShow( );
	 	
	 	$container.addClass('initialised');
	 	
  };
  
  return {
	  init: init
	};

})(jQuery);
