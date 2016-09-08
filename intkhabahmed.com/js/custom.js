$(function(){
	$(window).scroll(function(){
		var wscroll = $(this).scrollTop();
		if(wscroll > $('.image_container').offset().top){
			$('.navbar-brand').css({'height' : '63px'});
		}
		else{
			$('.navbar-brand').css({'height' : '90px'});
		}
	});
	$('#panel1, #panel2').css({
		'transform': 'translate(0px, 0px)'
	});
	$('nav').css('transform', 'translate(0,20px)');
	setTimeout(function(){
		$('nav').css('transform', 'translate(0,0px)');
	}, 600);
});