/* Author: Kevin Mangubat

*/


$(document).ready(function() {

// START --- Dropdown Navitaion	
	$('.mainnav ul').addClass('dropdown');
	
	$('.dropdown').each(function() {
		$(this).parent().hover(function() {
			$('.dropdown',this).slideDown('fast');
		}, function() {
			$('.dropdown',this).slideUp('fast');
		});
		$(this).parent().hover(function() {
			$(this).addClass('over');
		}, function() {
			/*$(this).removeClass('over');*/
			var tarThis = $(this);

			setTimeout (function() {
				tarThis.removeClass('over');
			}, 200);
		});
	});
// END ----- Dropdown Navigation	

// START --- Banner Slider
	$(function() {
		$('#ei-slider').eislideshow({
			animation			: 'center',
			autoplay			: true,
			slideshow_interval	: 10000,
			titlesFactor		: 0
		});
	});	
	
	$('.ei-slider-thumbs li:even').addClass('red');
// END ----- Banner Slider
});