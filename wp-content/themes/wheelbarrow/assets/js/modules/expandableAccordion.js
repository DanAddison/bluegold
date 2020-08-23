/*
*  Module: Expandable Accordion
*
*  Simple hide/show for content blocks
*
*  Code Example:

<div class="content-block content-block--expandable">

	<h3 class="section-label">Expandable title</h3>
	
	<div class="content-block__content">
	
		<?php echo $content; ?>
	
	</div>				

</div>

*
*/

var ExpandableAccordion = (function($) {
		
	// simple open - does not close sections that are already open
	// var _hideShow = function( elm ) {		
	// 	elm.closest(".content-block--expandable").toggleClass('expanded');
	// }	
		
  // var _bindEvents = function() {
	  
	//   $('.content-block .section-label').on('click', function() {
	//   	_hideShow( $(this) );
	// 	});
		
	// };  
	
	var _hideShow = function( elm, event ) {
		event.preventDefault();

		if (elm.closest(".content-block--expandable").hasClass('expanded')) {
				$(".content-block--expandable").removeClass('expanded');
		} else {
			$(".content-block--expandable").removeClass('expanded');
			elm.closest(".content-block--expandable").addClass('expanded');
		}
	}	
		
  var _bindEvents = function() {
	  
	  $('.content-block .section-label').on('click', function(event) {
	  	_hideShow( $(this), event );
		});
		
  }; 

  
  var init = function() {
	 	_bindEvents();
  };
  
  return {
	  init: init
  }

})(jQuery);