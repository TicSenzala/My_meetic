<!DOCTYPE html>
<?php include('class_connexion.php');
include('class_modif_infos.php');
$modif->modifEmail();
$connect->add_value();
?>
<html lang="fr">
<head>
	<title>Modif email</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="compte.css">

</head>
<body>
	<header>
		<div class="text-right">
			<button class="icone btn btn-success col-1">Menu</button>	
		</div>
		<div class="col-md-2 float-right p-4 mt-5 mr-5 list--menu" id="menu">
			<img src="Image/settings.png" alt="settings" class="mb-3">
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
		<form action="mon_compte.php" method="POST">
			<div class="container ">
				<input type="submit" name="retour" class="btn btn-primary mt-1 float-right m-2" value="Retour vers infos générale">
			</div>
		</form>
	</header>
	<div class="container mt-4 head--profile">
		<img src="Image/user.png" alt="logo user">
		<h1 class="mt-2"><?php echo $_SESSION['prenom'] .' '. $_SESSION['nom']?></h1>
	</div>
	<form action="#" method="POST">
		<div class="container">
			<h2 class="mt-5">Nouvel email : </h2>
			<input type="email" name="email" placeholder="Nouvel email..." class="form-control mt-3 col-8">	
			<input type="email" name="firstemail" placeholder="@email actuel..." class="form-control mt-3 col-8">	
			<input type="submit" name="envoyer" class="btn btn-success mt-1 col-md-2 float-right mt-2">	
		</div>
	</form>
	<script src="jquery-3.3.1.min.js"></script>
	<script src="menu_deroulant.js"></script>
</body>
</html>