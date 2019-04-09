<?php

class Modif_infos
{
	public function modifName()
	{
		$pdo = new PDO("mysql:host=localhost;dbname=my_meetic", "root", "1234");
		$requet = $pdo->prepare("UPDATE ");
	}
}

?>	