<?php

class Fusion
{
	public function fusion_filtre()
	{
		if($_POST['valid_filtre'] && isset($_POST) && $_POST['age'] !== "Selectionnez âge" && !empty($_POST['city']) && $_POST['searchgenre'] !== "Sexe")
		{
			header('location: fusionfiltre.php');
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			if(isset($_POST) && $_POST['age'] === "18/25 ans" && !empty($_POST['city']) && $_POST['searchgenre'] !== "Sexe")
			{
				$reqfusion = $pdo->prepare("SELECT * FROM infos_membre WHERE age >= 18 AND age <= 25 AND ville = :city AND sexe = :sexe");
				$reqfusion->bindValue(':sexe', $_POST['searchgenre']);
				$reqfusion->bindValue(":city", $_POST['city']);
			}
			if(isset($_POST) && $_POST['age'] === "25/35 ans" && !empty($_POST['city']) && $_POST['searchgenre'] !== "Sexe")
			{
				$reqfusion = $pdo->prepare("SELECT * FROM infos_membre WHERE age > 25 AND age <= 35 AND ville = :city AND sexe = :sexe");
				$reqfusion->bindValue(':sexe', $_POST['searchgenre']);
				$reqfusion->bindValue(":city", $_POST['city']);
			}
			if(isset($_POST) && $_POST['age'] === "35/45 ans" && !empty($_POST['city']) && $_POST['searchgenre'] !== "Sexe")
			{
				$reqfusion = $pdo->prepare("SELECT * FROM infos_membre WHERE age > 35 AND age <= 45 AND ville = :city AND sexe = :sexe");
				$reqfusion->bindValue(':sexe', $_POST['searchgenre']);
				$reqfusion->bindValue(":city", $_POST['city']);
			}		
			if(isset($_POST) && $_POST['age'] === "45 ans ++" && !empty($_POST['city']) && $_POST['searchgenre'] !== "Sexe")
			{
				$reqfusion = $pdo->prepare("SELECT * FROM infos_membre WHERE age > 45 AND ville = :city AND sexe = :sexe");
				$reqfusion->bindValue(':sexe', $_POST['searchgenre']);
				$reqfusion->bindValue(":city", $_POST['city']);
			}

			$reqfusion->execute();
			$count->rowcount();
			if($count === 0)
			{
				echo "jojojojojjojojojojojoj";
			}
			$datage = $reqfusion->fetchAll();
			return $datage;
		}
	}
}
$combo = new Fusion();


?>