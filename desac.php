<!DOCTYPE html>
<?php 
include('class_desactivate.php');
?>
<html lang="fr">
<head>
	<title>Settings</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="desactivate.css">
	<link rel="stylesheet" type="text/css" href="compte.css">
</head>
<body>

	<form method="POST" action="mon_compte.php">
		<div>
			<input type="submit" name="annul" value="Annuler" class="mr-5 btn btn-success float-right">
		</div>
	</form>
	<div class="text-right">
		<button class="icone btn btn-success col-1 mr-3">Menu</button>	
	</div>
	<div class="col-md-2 float-right p-4 mt-3 mr-5 list--menu" id="menu">
		<img src="Image/settings.png" class="mb-3" alt="logo settings">
		<nav class="text-center ">
			<ul class="p-0">
				<li class="mt-3 mb-4"><a href="accueil.php">Accueil</a></li>
				<li class="mb-4"><a href="mon_compte.php">Mon compte</a></li>
				<li class="mb-4"><a href="chat.php">Messagerie</a></li>
			</ul>
			<form method="POST" class="pb-3">
				<input type="submit" name="deco" value="Déconnexion" class="btn btn-success col-10">
			</form>
		</nav>
	</div>

	<div class="container mt-5 contain-butt-des">
		<h2>Désactivate</h2>
		<button class="btn btn-danger butt-des col-5">Désactiver votre compte</button>
	</div>
	<div class="desactiv--contain">
		<div class="container head--sett mt-5 text-center">
			<div>
				<h1>Pourquoi souhaitez-vous désactiver votre compte ?</h1>
			</div>
		</div>
		<div class="container mt-5 contain--radio">
			<form method="POST">
				<h2 class="text-center titre--check">Cocher la cause : </h2>
				<div class="ml-5 mt-5">
					<div class="radio">
						<label><input type="radio" name="optradio">Parce que c'est une perte de temps.</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio">Je ne trouve personne de bien</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio" >On me harcele constament</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio">J'ai déja trouver quelqu'un</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio">Je me suis fait pirater</label>
					</div>
					<div class="radio">
						<label><input type="radio" name="optradio">Je n'aime pas votre site</label>
					</div>
				</div>
				<div>
					<div class="form-group mt-3 ml-3 col-8">
						<label for="comment" class="label--autre">Autre:</label>
						<textarea class="form-control" rows="5" id="comment"></textarea>
					</div>
				</div>
			</form>
			<form method="POST">
				<div class="row mt-5 ml-5 float-right">
					<input type="email" name="email" class="form-control col-7" placeholder="Confirm with Email">
					<input type="submit" name="desactivate" class="btn btn-danger" value="Desactivation">
				</div>
			</form>
		</div>
	</div>
	<script src="jquery-3.3.1.min.js"></script>
	<script src="desactive.js"></script>
	<script src="menu_deroulant.js"></script>
</body>
</html>