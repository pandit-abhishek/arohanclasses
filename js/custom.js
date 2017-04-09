$(document).ready(function(){
	$('.main-slider').bxSlider({ 
		infiniteLoop: true,
		auto: true,
	});
	var h=$(window).height();
	$('.home-slider .bx-viewport').css('height',h);
	$('.home-slider .bx-viewport ul li img').css('height',h);
});