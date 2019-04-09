$(document).ready(function()
{
	$(".form--filtre").hide();
	$('.list-menu').hide();
	
	$(".valid").on('click', function(){
		$(".title").slideToggle();
	});

	$(".valid").on('click', function(){
		$(".form--filtre").slideToggle();
	});
	$(".button-list-menu").on('click', function(){
		$(".list-menu").slideToggle();
		$(".form--filtre").hide();
	});
});