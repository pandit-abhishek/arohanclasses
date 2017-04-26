$(document).ready(function(){
	$('.main-slider').bxSlider({ 
		infiniteLoop: true,
		auto: true,
	});
	var h=$(window).height();
	$('.home-slider .bx-viewport').css('height',h);
	$('.home-slider .bx-viewport ul li img').css('height',h);
	$('.login-form').css('height',h);
	$('.study-material-content').css('height',h);
	$(window).resize(function(){
		var h=$(window).height();
		$('.home-slider .bx-viewport').css('height',h);
		$('.home-slider .bx-viewport ul li img').css('height',h);
		$('.login-form').css('height',h);
		$('.study-material-content').css('height',h);
	});
});


