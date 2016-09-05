$(function(){
	$(window).scroll(function(){
		var wscroll = $(this).scrollTop();
		var h = parseInt($('.navbar-brand').css('height'), 10);
		console.log(h);
		if(h>63){
			h = h-wscroll/100;
			$('.navbar-brand').css({'height' : h+'px'});
		}
		else if(wscroll<=20){
			$('.navbar-brand').css({'height' : '90px'});
		}
	});
});