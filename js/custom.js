AOS.init();

$(document).ready(function() {
	
	doVideoSlides();


	

	
})


function doVideoSlides() {
	const maxSlides = $('.video-slide-container .video-slide').length || 0;
	
	if (!maxSlides) {
		return;
	}
	
	let currentSlide = 0;
	$('.video-slide-container .video-slide').eq(currentSlide).addClass('active');

	$('.video-click-arrow #prev').click(function() {
		$('.video-slide-container .video-slide').eq(currentSlide).removeClass('active');
		if (currentSlide == 0) {
			currentSlide = maxSlides - 1;
		} else {
			currentSlide--;
		}
		$('.video-slide-container .video-slide').eq(currentSlide).addClass('active');
	})

	$('.video-click-arrow #next').click(function() {
		$('.video-slide-container .video-slide').eq(currentSlide).removeClass('active');
		if (currentSlide == maxSlides - 1) {
			currentSlide = 0;
		} else {
			currentSlide++;
		}
		$('.video-slide-container .video-slide').eq(currentSlide).addClass('active');
	})
}
