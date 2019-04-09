<?php
include('class_inscription.php');

class Recherche
{	
	public function searchByAge() 
	{
		if($_POST['valid_filtre'] && isset($_POST) && empty($_POST['city'])
			&& $_POST['searchgenre'] === "Sexe" && $_POST['age'] 
			!== "Selectionnez âge"){
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root",
				"1234");
		$requetage = "SELECT * FROM infos_membre";
		switch ($_POST['age']){
			case '18/25 ans':
			$requetage .= " WHERE age >= 18 AND age <= 25";
			break;
			case '25/35 ans':
			$requetage .= " WHERE age >= 18 AND age <= 25";
			break;
			case '35/45 ans' : 
			$requetage .= " WHERE age > 35 AND age <= 45";
			break;
			case '45 ans ++' : 
			$requetage .= " WHERE age > 45";
			break;
		}
		$sql = $pdo->prepare($requetage);
		$sql->execute();
		$datage = $sql->fetchAll();
		return $datage;
	}
}

public function searchByGenre()
{
	if(isset($_POST) && isset($_POST['valid_filtre']) && $_POST['age'] === "Selectionnez âge"
		&& empty($_POST['city']) && $_POST['searchgenre'] !== "Sexe")
	{
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
		$genre = $pdo->prepare("SELECT * FROM infos_membre WHERE sexe = :sexe");
		$genre->bindValue(':sexe', $_POST['searchgenre']);
		$genre->execute();
		$allresult = $genre->fetchAll();
		return $allresult;
	}
}

public function searchByCity()
{
	if (isset($_POST['valid_filtre']) && $_POST['age'] === "Selectionnez âge" 
		&& $_POST['searchgenre'] === "Sexe" && !empty($_POST['city'])) 
	{	
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
		$ville = $pdo->prepare("SELECT * FROM infos_membre WHERE ville = :city");
		$ville->bindValue(":city", $_POST['city']);
		$ville->execute();
		$city = $ville->fetchAll();
		return $city;
	}
}

public function citygenre()
{
	if(isset($_POST['valid_filtre']) && $_POST['age'] === "Selectionnez âge" 
		&& $_POST['searchgenre'] !== "Sexe" && !empty($_POST['city']))
	{
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
		$sexcity = $pdo->prepare("SELECT * FROM infos_membre WHERE ville = :city AND sexe = :sexe");
		$sexcity->bindValue(':sexe', $_POST['searchgenre']);
		$sexcity->bindValue(":city", $_POST['city']);
		$sexcity->execute();
		$citygenre = $sexcity->fetchAll();
		return $citygenre;
	}
}

public function genre_age()
{
	if($_POST['valid_filtre'] && isset($_POST) 
		&& empty($_POST['city']) && $_POST['searchgenre'] !== "Sexe")
	{
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root",
			"1234");
		$requetage = "SELECT * FROM infos_membre";
		switch ($_POST['age']){
			case '18/25 ans':
			$requetage .= " WHERE age >= 18 AND age <= 25 AND sexe = :sexe";
			break;
			case '25/35 ans':
			$requetage .= " WHERE age >= 18 AND age <= 25 AND sexe = :sexe";
			break;
			case '35/45 ans' : 
			$requetage .= " WHERE age > 35 AND age <= 45 AND sexe = :sexe";
			break;
			case '45 ans ++' : 
			$requetage .= " WHERE age > 45 AND sexe = :sexe";
			break;
		}
		$sql = $pdo->prepare($requetage);
		$sql->bindValue(':sexe', $_POST['searchgenre']);
		$sql->execute();
		$datage = $sql->fetchAll();
		return $datage;
	}
}

public function age_city()
{
	if($_POST['valid_filtre'] && isset($_POST) 
		&& !empty($_POST['city']) && $_POST['searchgenre'] === "Sexe")
	{
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root",
			"1234");
		$requetage = "SELECT * FROM infos_membre";
		switch ($_POST['age']){
			case '18/25 ans':
			$requetage .= " WHERE age >= 18 AND age <= 25 AND ville = :city";
			break;
			case '25/35 ans':
			$requetage .= " WHERE age >= 25 AND age <= 35 AND ville = :city";
			break;
			case '35/45 ans' : 
			$requetage .= " WHERE age > 35 AND age <= 45 AND ville = :city";
			break;
			case '45 ans ++' : 
			$requetage .= " WHERE age > 45 AND ville = :city";
			break;
		}
		$sql = $pdo->prepare($requetage);
		$sql->bindValue(":city", $_POST['city']);
		$sql->execute();
		$datage = $sql->fetchAll();
		return $datage;
	}
}

public function fusion_filtre()
{
	if($_POST['valid_filtre'] && isset($_POST) 
		&& !empty($_POST['city']) && $_POST['searchgenre'] !== "Sexe")
	{
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root",
			"1234");
		$requetage = "SELECT * FROM infos_membre";
		switch ($_POST['age']){
			case '18/25 ans':
			$requetage .= " WHERE age >= 18 AND age <= 25 AND ville = :city AND sexe = :sexe";
			break;
			case '25/35 ans':
			$requetage .= " WHERE age >= 25 AND age <= 35 AND ville = :city AND sexe = :sexe";
			break;
			case '35/45 ans' : 
			$requetage .= " WHERE age > 35 AND age <= 45 AND ville = :city AND sexe = :sexe";
			break;
			case '45 ans ++' : 
			$requetage .= " WHERE age > 45 AND ville = :city AND sexe = :sexe";
			break;
		}
		$sql = $pdo->prepare($requetage);
		$sql->bindValue(':sexe', $_POST['searchgenre']);
		$sql->bindValue(":city", $_POST['city']);
		$sql->execute();
		$datage = $sql->fetchAll();
		return $datage;
	}
}
}
$rech = new Recherche();
?>