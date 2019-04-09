<!DOCTYPE html>
<?php require('class_connexion.php');
$connect->add_value();
?>
<html lang="fr">
<head>
	<title>Connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="connec.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<form action="index.php" method="POST">
		<div class="text-right">
			<button class="btn btn-success col-1 p-2 pr-3 pl-3 mr-5 mt-3">S'inscrire</button>
		</div>
	</form>
	<div class="img--logo">
		<img src="Image/logo.png" alt="logo du site">
	</div>
	<form action="#" method="POST">
		<div class="container--form">
			<h1>Connexion</h1>
			<div class="input--connex mt-3">
				<input type="email" name="email" class="form-control" placeholder="E-mail">
			</div>
			<div class="input--connex mt-3">
				<input type="password" name="password" class="form-control" placeholder="Mot de passe">
			</div>
			<div>
				<input type="submit" name="valid" class="btn btn-success mt-5" value="Connexion" >
			</div>
		</div>
	</form>
</body>
</html>