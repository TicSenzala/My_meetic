<?php
session_start();
class Connect
{
	public function get_mail_pass()
	{
		if(isset($_POST['email']) && isset($_POST['password']) && $this->block_des() === 0)
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("SELECT password FROM infos_membre WHERE email = :email");
			$requet->bindValue(':email', $_POST['email']);
			$requet->execute();
			$data = $requet->fetchAll();

			foreach ($data as $value) 
			{
				foreach ($value as $val)
				{
					if($val == md5($_POST['password']))
					{
						echo "success";
						header('Location: mon_compte.php');
					}
					else
					{
						echo "Erreur";
						return;
					}
				}
			}
		}
	}

	public function block_des()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
		$requet = $pdo->prepare("SELECT desactive FROM infos_membre WHERE email = :email");
		$requet->bindValue(':email', $_POST['email']);
		$requet->execute();
		$datades = $requet->fetch();
		if($datades[0] == 1)
		{
			header('location: connexion.php');
			echo "Votre compte est désactiver";
			return 1;
		}
		else
		{
			return 0;
		}
	}

	public function add_value()
	{	
		if(isset($_POST['email']))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$requet = $pdo->prepare("SELECT * FROM infos_membre WHERE email = :email");
			$requet->bindValue(':email', $_POST['email']);
			$requet->execute();
			$data = $requet->fetchAll();

			foreach ($data as $value)
			{
				$_SESSION['prenom'] = $value['prenom'];
				$_SESSION['nom'] = $value['nom'];
				$_SESSION['date_naissance'] = $value['date_naissance'];
				$_SESSION['ville'] = $value['ville'];
				$_SESSION['sexe'] = $value['sexe'];
				$_SESSION['email'] = $value['email'];
				$_SESSION['password'] = $value['password'];		
			}

		}
	}
}

$connect = new Connect();
$connect->get_mail_pass();
?>