jQuery(document).ready(function($){
	// masonry grid
   $('.masonry-grid').masonry({
       columnWidth: 308,
       itemSelector: '.masonry-item',
       transitionDuration: '0.8s',
   }); 

	// init Isotope
	var $grid = $('.masonry-grid').isotope({
	  // options
	});
	// filter items on button click
	$('.filter-button-group').on( 'click', 'button', function() {
	  var filterValue = $(this).attr('data-filter');
	  $grid.isotope({ filter: filterValue });
	});

	// menu fixed
	var position = jQuery(document).scrollTop();
	var offset = $('#site-navigation').offset().top;

	if ( position > offset + 20 ){
		$('#site-navigation').addClass('fixed');
	}

	/* Scroll to specific section on front page */
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: (target.offset().top - 0)
					}, 1000);
					return false;
				}
			}
		});
	});

});



