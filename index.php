<!DOCTYPE html>
<?php require('class_inscription.php');?>
<html lang="fr">
<head>
	<title>My_meetic</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<form action="connexion.php">
		<div class="but--connexion text-right mt-4 mr-5">
			<input type="submit" class="btn btn-success col-md-1" name="connexion" value="Connexion">
		</div>
	</form>
	<div class="img--logo">
		<h1 class="font-weight-bold display-2 text-light titre--site">My_MeeTic</h1>
	<div class="text-center mt-4">
		<button class="btn-success p-3 col-4 create-account" id="formInscript">Vous n'êtes pas inscrit ?</button>
	</div>
	<div>
	</div>
	</div>
	<form action="#" method="POST" id="formulaire">
		<div class="contain--inscription col-md-4">
			<div class="title--sucribe mb-4">
				<h1 class="font-weight-bold text-danger">My_MeeTic</h1>
			</div>
			<div class="row">
				<div class="col">
					<input type="text" class="form-control" id="prenom" placeholder="Prénom*" name="prenom">
				</div>
				<div class="col">
					<input type="text" class="form-control" id="nom" placeholder="Nom*" name="nom">
				</div>
			</div>
			<div class="text-left mt-4 md-0">
				<label for="datenaiss" >Date de naissance</label>
				<input type="date" name="datenaiss" id="datenaiss" class="form-control">
			</div>
			<div class="row">				
				<div class="col">
					<input type="text" class="form-control mt-3" id="ville" placeholder="Ville*" name="ville">
				</div>
				<div class="col">
					<select class="form-control mt-3" name="sexe" id="sexe">
						<option value="Homme">Homme</option>
						<option value="Femme">Femme</option>
						<option value="autre">Autre</option>
					</select>
				</div>	
			</div>
			<div class="row">
				<div class="mt-3 col-md-12">
					<input type="text" name="email" id="email" class="form-control" placeholder="@E-mail*">
				</div>
			</div>
			<div class="mb-5">
				<input type="password" name="password" id="pass" placeholder="Mot de passe*" class="form-control col-md-12 mt-3 ">
				<p class="Err"></p>
			</div>
			<input type="submit" name="create" id='create' class="submit--sibscribe btn-success" value="Créer mon profil">
			<div class="mt-3">
				<a href="connexion.php" class="h4 text-primary font-weight-bold">Connexion</a>
			</div>
		</div>
	</form>
	<script src="jquery-3.3.1.min.js"></script>
	<script src="script.js"></script>
</body>
</html>