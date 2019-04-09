$(document).ready(function()
{

	var curLeft = 0;
	$('.arrow').on("click", function(){	
		curLeft = curLeft -468.5;
		$('.contain--infos--recherche').css('left', curLeft + 'px');
	});

	var curLeft = 0;
	$('.arrow--left').on("click", function(){	
		curLeft = curLeft +468.5;
		$('.contain--infos--recherche').css('left', curLeft + 'px');
	});

	$('.list-menu ').hide();
	$('.button-menu').on("click", function(){
		$('.list-menu ').slideToggle();
		$('.button-menu').hide();
	});
});