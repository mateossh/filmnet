// LOAD SLIDERS

$(document).ready(function() {
	// $('.Carousel').owlCarousel({
	// 	'items': 3
	// });

	$('.Carousel').slick({
		arrows: false,
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		adaptiveHeight: true,
		mobileFirst: true,
		// useCSS: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 5
				}
			},
			{
				breakpoint: 900,
				settings: {
					slidesToShow: 4
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 479,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 199,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
		]
	});

});
