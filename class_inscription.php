<?php
class Inscription
{
	private $interval;

	public function recup_data()
	{
		if(isset($_POST) && !empty($_POST) && $this->interval >= 18)
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("INSERT INTO infos_membre (prenom, nom, date_naissance, ville, sexe, email, password, desactive, age) VALUES(:prenom, :nom, :datenaiss, :ville, :sexe, :mail, md5(:pass), 0, :interval)");
			$requet->bindValue(':prenom', $_POST['prenom']);
			$requet->bindValue(':nom', $_POST['nom']);
			$requet->bindValue(':datenaiss', $_POST['datenaiss']);
			$requet->bindValue(':ville', $_POST['ville']);
			$requet->bindValue(':sexe', $_POST['sexe']);
			$requet->bindValue(':mail', $_POST['email']);
			$requet->bindValue(':pass', $_POST['password']);
			$requet->bindValue(':interval', $this->interval);
			$requet->execute();	
		}
	}

	public function valid_form()
	{
		if(isset($_POST['email']))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("SELECT email FROM infos_membre");
			$requet->execute();
			$data = $requet->fetchAll();
			foreach ($data as $val)
			{
				foreach ($val as $key => $value) 
				{
					if($value == $_POST['email'])
					{
						echo "Ya un double la nan ?\n";
						return false;
					}
				}
			}
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

			if (isset($_POST['ville']) && !preg_match("/^[a-zA-Z ]*$/",$_POST['ville']))
			{
				echo "\nLes caractères entrés ne sont pas adaptés\n"; 
				return false;
			}

			if (isset($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
			{
				echo "le mail entré n'en est pas un";
				return false;
			}
			
			if(isset($_POST['datenaiss']))
			{
				$somme = date_parse($_POST['datenaiss']);
				$this->interval = date("Y") - $somme["year"];
			}

			if($this->interval < 18)
			{
				echo "Vous n'avez pas 18 ans";
				
			}
			
		}
		$this->recup_data();
	}
}

$bdd = new Inscription();	
$bdd->valid_form();

?>
