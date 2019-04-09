$(document).ready(function()
{
	$('.contain--inscription').hide();
	$('#formInscript').on('click', function(){
		$('.contain--inscription').slideToggle();
		$('#formInscript').hide();
		$('.img').hide();
		$('.titre--site').hide();
	});


	$('#create').on('click', function(e){
		e.preventDefault();

		var prenom = $('#prenom').val();
		var nom = $('#nom').val();
		var datenaiss = $('#datenaiss').val();
		var email = $('#email').val();
		var pass = $('#pass').val();
		var ville = $('#ville').val();
		var sexe = $('#sexe').val();

		if($('#prenom').val() == '')
		{
			$('#prenom').css('border', '2px solid red');
			return false;
		}
		else
		{
			$('#prenom').css('border', '2px solid green');
		}

		if($('#nom').val() == '')
		{
			$('#nom').css('border', '2px solid red');
			return false;
		}
		else
		{
			$('#nom').css('border', '2px solid green');
		}

		if($('#datenaiss').val() == '')
		{
			$('#datenaiss').css('border', '2px solid red');
			return false;
		}
		else
		{
			$('#datenaiss').css('border', '2px solid green');
		}

		if($('#ville').val() == '')
		{
			$('#ville').css('border', '2px solid red');
			return false;
		}
		else
		{
			$('#ville').css('border', '2px solid green');	
		}

		if ($('#email').val() == '') 
		{
			$('#email').css('border', '2px solid red');
			return false;
		}
		else
		{
			$('#email').css('border', '2px solid green');
		}

		if ($('#pass').val() == '') 
		{
			$('#pass').css('border', '2px solid red');
			return false;
		}
		else
		{
			$('#pass').css('border', '2px solid green');			
		}

		$.post("class_inscription.php", {datenaiss: datenaiss, email:
			email, prenom: prenom, nom: nom, password: pass, sexe: sexe, ville: 
			ville}, function(reponse){
				$(".Err").html(reponse);
				$(".Err").css('color', 'red');
			});
	});
});