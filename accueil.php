<!DOCTYPE html>
<?php 
include('class_selectgenre.php');
include('deco.php');
?>
<html lang="fr">
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>
	<div class="container contain--recherche">
		<p class="title">Recherche</p>
		<button class="btn btn-success button-list-menu">Menu</button>
		<nav class="text-center list-menu mt-5">
			<ul class="p-0">
				<li class="mt-3 p-4"><a href="accueil.php">Accueil</a></li>
				<li class="p-4"><a href="mon_compte.php">Mon compte</a></li>
				<li class="p-4"><a href="desac.php">Désactivation</a></li>	
			</ul>
		</nav>
		<input type="submit" name="Recherche" value="Clique ici !"  class="btn btn-success valid col-5">
	</div>
	<div class="container form--filtre">
		<form action="filtre.php" method="POST">
			<div class="form-control-label">
				<label for="genrederecherche">Que cherchez vous ?</label>
				<select id="genrederecherche" class="form-control col-md-6 moove--input" name="searchgenre">
					<option>Sexe</option>
					<option>Homme</option>
					<option>Femme</option>
				</select>
			</div>
			<div class="form-control-label mt-4">
				<label for="recherche">Tranche d'age : </label>
				<select id="recherche" class="form-control col-md-6 moove--input" name="age">
					<option>Selectionnez âge</option>
					<option>18/25 ans</option>
					<option>25/35 ans</option>
					<option>35/45 ans</option>
					<option>45 ans ++</option>
				</select>
			</div>
			<div class="col-form-label mt-4 ">
				<label for="city">Localisation : </label>
				<input type="text" name="city" id="city" placeholder="Ville" class=" form-control col-md-6 moove--input">
			</div>
			<div>
				<input type="submit" name="valid_filtre" value="Envoyer" class="btn btn-success mt-3 filtre">
			</div>
		</form>
	</div>
	<script src="jquery-3.3.1.min.js"></script>
	<script src="search.js"></script>
</body>
</html>