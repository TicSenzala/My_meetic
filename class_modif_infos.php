<?php

class Modif_infos
{
	public function modifName()
	{
		if (isset($_POST['nom']) && !preg_match("/^[a-zA-Z ]*$/",$_POST['nom']))
		{
			echo "\nSeul les lettres sont accepter pour les noms comme les prénoms\n"; 
			return false;
		}
		if (isset($_POST['prenom']) && !preg_match("/^[a-zA-Z ]*$/",$_POST['prenom'])) 
		{
			echo "Seul les lettres sont accepter pour les noms comme les prénoms\n"; 
			return false; 
		}
		if(isset($_POST) && !empty($_POST['newnom']) && !empty($_POST['newprenom']) && !empty($_POST['email']))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("UPDATE infos_membre SET nom = :nom, prenom = :prenom WHERE email = :mail");
			$requet->bindValue(':nom', $_POST['newnom']);
			$requet->bindValue(':prenom', $_POST['newprenom']);
			$requet->bindValue(':mail', $_POST['email']);
			$requet->execute();
			header("Refresh:0");
		}
	}

	public function modifDate()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("UPDATE infos_membre SET date_naissance = :datenaiss WHERE email = :mail");
			$requet->bindValue(':datenaiss', $_POST['newdatenaiss']);
			$requet->bindValue(':mail', $_POST['email']);
			$requet->execute();
			header("Refresh:0");
		}
	}

	public function modifVille()
	{
		if (isset($_POST['newville']) && !preg_match("/^[a-zA-Z ]*$/",$_POST['newville']))
		{ 
			return false;
		}
		if(isset($_POST) && !empty($_POST))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("UPDATE infos_membre SET ville = :ville WHERE email = :mail");
			$requet->bindValue(':ville', $_POST['newville']);
			$requet->bindValue(':mail', $_POST['email']);
			$requet->execute();
			header("Refresh:0");

		}
	}

	public function modifSexe()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("UPDATE infos_membre SET sexe = :sexe WHERE email = :mail");
			$requet->bindValue(':sexe', $_POST['newsexe']);
			$requet->bindValue(':mail', $_POST['email']);
			$requet->execute();

		}
	}

	public function modifPass()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("UPDATE infos_membre SET password = :pass WHERE email = :mail");
			$requet->bindValue(':pass', md5($_POST['pass']));
			$requet->bindValue(':mail', $_POST['email']);
			$requet->execute();	
			header("Refresh:0");

		}
	}

	public function modifEmail()
	{
		if (isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
		{
			echo "le mail entré n'en est pas un";
			return false;
		}
		if(isset($_POST) && !empty($_POST))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("UPDATE infos_membre SET email = :newemail WHERE email = :mail");
			$requet->bindValue(':newemail', $_POST['email']);
			$requet->bindValue(':mail', $_POST['firstemail']);
			$requet->execute();	
			header("Refresh:0");	
		}
	}
}

$modif = new Modif_infos();

?>	