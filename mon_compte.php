<!DOCTYPE html>
<?php include('class_connexion.php');
include('deco.php');
$connect->add_value();
?>
<html lang="fr">
<head>
	<title>Espace membre</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="compte.css">
</head>
<body>
	<div class="col-md-2 float-right p-4 mt-5 mr-5 list--menu" id="menu">
		<img src="Image/settings.png" alt="logo paramètre" class="mb-3">
		<nav class="text-center ">
			<ul class="p-0">
				<li class="mt-3 mb-4"><a href="accueil.php">Accueil</a></li>
				<li class="mb-4"><a href="mon_compte.php">Mon compte</a></li>
				<li class="mb-4"><a href="desac.php">Désactivation</a></li>
				<li class="mb-4"><a href="chat.php">Messagerie</a></li>
			</ul>
				<form method="POST" class="pb-3">
					<input type="submit" name="deco" value="Déconnexion" class="btn btn-success col-10">
				</form>
		</nav>
	</div>
	<div class="container mt-4 mb-4 head--profile">
		<div class="text-right">
			<button class="icone btn btn-success col-1">Menu</button>	
		</div>
		<img src="Image/user.png" alt="user logo">
		<h1 class="mt-2"><?php echo $_SESSION['prenom'] .' '. $_SESSION['nom']?></h1>
	</div>
	<div class="container infos--contain">
		<div class="container ">
			<p>Nom : <?= $_SESSION['nom'] ?></p>
			<a href="modif_name.php" >Modifier</a>
		</div>
		<hr>
		<div class="container">
			<p>Prenom : <?= $_SESSION['prenom'] ?></p>
			<a href="modif_name.php" >Modifier</a>
		</div>
		<hr>
		<div class="container">
			<p>Date de naissance : <?= $_SESSION['date_naissance'] ?></p>
			<a href="modif_datenaiss.php" >Modifier</a>
		</div>
		<hr>
		<div class="container">
			<p>Ville : <?= $_SESSION['ville'] ?></p>
			<a href="modif_ville.php" >Modifier</a>
		</div>
		<hr>
		<div class="container">
			<p>Email : <?= $_SESSION['email'] ?></p>
			<a href="modif_email.php">Modifier</a>
		</div>
		<hr>
		<div class="container">
			<p>Sexe : <?= $_SESSION['sexe'] ?></p>
			<a href="modif_sexe.php">Modifier</a>
		</div>
		<hr>
		<div class="container">
			<p>Mot de passe : <?= $_SESSION['password']; ?></p>
			<a href="modif_pass.php">Modifier</a>
		</div>
	</div>
	<script src="jquery-3.3.1.min.js"></script>
	<script src="menu_deroulant.js"></script>
</body>
</html>