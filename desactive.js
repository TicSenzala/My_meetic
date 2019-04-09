$(document).ready(function()
{
	$('.desactiv--contain').hide();
	$('.butt-des').on('click', function(){
		$('.desactiv--contain').slideToggle("slow");
		$('.contain-butt-des').hide();
	});
});