jQuery(function($) {
  ResponsiveMenu.init();
  DropdownMenu.init();
  //Expandable.init();
  //ExpandableAccordion.init()

  // $(window).resize(function() {
  //   //Expandable.init();

  //   if ($(window).width() > 999) {
  //     // menu breakpoint
  //     ResponsiveMenu.closeMenu();
  //     //DropdownMenu.closeSubMenus();
  //   }
  // });

  // uncomment if using slick slider carousel on hero
  // $('.hero--slider').slick({
  // 	adaptiveHeight: false,
  // 	infinite: true,
  // 	autoplay: true,
  // 	autoplaySpeed: 2500,
  // 	slidesToShow: 1,
  // 	arrows: false,
  // 	lazyLoad: 'ondemand',
  // });
});

// lazy load blur-up image placeholder stuff for an image from an ACF field

// Cache elements
var featureImage = document.getElementById("lazy-image"),
  placeholderOverlay = document.getElementById("placeholder-overlay");

// Check if the elements exist
if (featureImage && placeholderOverlay) {
  // Create an image with the full size URL
  var img = new Image();
  img.src = featureImage.dataset.imageSrc;

  // When it finishes loading, add it to our hero and fade out the overlay
  img.onload = function() {
    placeholderOverlay.classList.add("fade-out");
    featureImage.style.backgroundImage = "url(" + img.src + ")";
  };
}

// lazy load blur-up image placeholder stuff for hero

// // Cache elements
// var heroImage = document.getElementById('hero__image'),
// 	placeholderOverlay = document.getElementById('placeholder-overlay');

// 	// Check if the elements exist
// if ( heroImage && placeholderOverlay ) {
// 	// Create an image with the full size URL
// 	var img = new Image();
// 	img.src = heroImage.dataset.imageSrc;

// 	// When it finishes loading, add it to our hero and fade out the overlay
// 	img.onload = function () {
// 		placeholderOverlay.classList.add('fade-out');
// 		heroImage.style.backgroundImage = "url(" + img.src + ")";
// 	};
// }
