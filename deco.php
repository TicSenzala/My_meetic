<?php

class deconnexion 
{
	public function dec() 
	{
		if(isset($_POST['deco']))
		{
			session_destroy(); 
			header("Location: connexion.php");
		}
	}

	public function reco()
	{
		if(isset($_SESSION) && empty($_SESSION))
		{
			header('Location: connexion.php');
		}
	}
}
$dec = new deconnexion();
$dec->dec();
$dec->reco();
?>