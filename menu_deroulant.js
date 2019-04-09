$(document).ready(function()
{
	$('#menu').hide();
	$('.icone').on('click', function(){
		$('#menu').slideToggle("slow", function(){

		});
	});
});