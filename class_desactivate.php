<?php

class Desactive
{
	
	public function delete()
	{
		if(isset($_POST) && !empty($_POST))
		{
			$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
			$recupbool = $pdo->prepare("SELECT desactive FROM infos_membre WHERE email = :email");
			$recupbool->bindValue(':email', $_POST['email']);
			$data = $recupbool->fetch();
			
			if(isset($_POST['desactivate']))
			{
				if($data === false)
				{
					$data = true;
				}
				var_dump($data);
				if($data === true)
				{
					$boolchange = $pdo->prepare("UPDATE infos_membre SET desactive = 1 WHERE email = :email");
					$boolchange->bindValue(':email', $_POST['email']);
					$boolchange->execute();
					header('Location: connexion.php');
				}
			}
		}
	}
}

$des = new Desactive();
$des->delete();
?>