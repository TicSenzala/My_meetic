<!DOCTYPE html>
<?php include('class_selectgenre.php');
$sexe = $rech->searchByGenre();
$city = $rech->searchByCity();
$citygenre = $rech->citygenre();
$datage = $rech->searchByAge();
$fusion = $rech->fusion_filtre();
$genreage = $rech->genre_age();
$agecity = $rech->age_city();
?>
<html lang="fr">
<head>
	<title>Résultats recherche</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>
	<div class="text-center mt-5">
		<button class="button-menu btn btn-success col-1">Menu</button>	
	</div>
	<nav class="text-center list-menu mt-5">
		<ul class="p-0">
			<li class="mt-3 p-4"><a href="accueil.php">Accueil</a></li>
			<li class="p-4"><a href="mon_compte.php">Mon compte</a></li>
			<li class="p-4"><a href="desac.php">Désactivation</a></li>	
		</ul>
	</nav>
	<div class="div--perso p-3 col-md-3">
		<?php if($sexe){foreach ($sexe as $value): ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/user.png" alt="logo user">
					</div>
				</div>
				<div class="mt-4 text-center">
					<a href="#">
						<span><?= $value['prenom'] ?></span>
						<span><?= $value['nom'] ?></span>
					</a>
					<p>Né le <?= $value['date_naissance']?></p>
					<p>Age : <?= $value['age'] ?></p>
					<p><?= $value['ville'] ?></p>
					<button class="btn btn-success mt-3">Je suis interessé</button>
					<form action="accueil.php">
						<button class="btn btn-primary p-1 mt-2 col-4">Retour</button>
					</form>
				</div>
			</div>			
		<?php endforeach;} ?>
		<?php if($city) {foreach ($city as $value): ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/user.png" alt="logo user">
					</div>
				</div>
				<div class="mt-4 text-center">
					<a href="#">
						<span><?= $value['prenom'] ?></span>
						<span><?= $value['nom'] ?></span>
					</a>
					<p>Né le <?= $value['date_naissance']?></p>
					<p>Age : <?= $value['age'] ?></p>
					<p><?= $value['ville'] ?></p>
					<button class="btn btn-success mt-3">Je suis interessé</button>
					<form action="accueil.php">
						<button class="btn btn-primary p-1 mt-2 col-4">Retour</button>
					</form>
				</div>
			</div>
		<?php endforeach;} ?>
		<?php if($datage) {foreach ($datage as $value): ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/user.png" alt="logo user">
					</div>
				</div>
				<div class="mt-4 text-center">
					<a href="#">
						<span><?= $value['prenom'] ?></span>
						<span><?= $value['nom'] ?></span>
					</a>
					<p>Né le <?= $value['date_naissance']?></p>
					<p>Age : <?= $value['age'] ?></p>
					<p><?= $value['ville'] ?></p>
					<button class="btn btn-success mt-3">Je suis interessé</button>
					<form action="accueil.php">
						<button class="btn btn-primary p-1 mt-2 col-4">Retour</button>
					</form>
				</div>
			</div>
		<?php endforeach;} ?>
		<?php if($citygenre) {foreach ($citygenre as $value): ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/user.png" alt="logo user">
					</div>
				</div>
				<div class="mt-4 text-center">
					<a href="#">
						<span><?= $value['prenom'] ?></span>
						<span><?= $value['nom'] ?></span>
					</a>
					<p>Né le <?= $value['date_naissance']?></p>
					<p>Age : <?= $value['age'] ?></p>
					<p><?= $value['ville'] ?></p>
					<button class="btn btn-success mt-3">Je suis interessé</button>
					<form action="accueil.php">
						<button class="btn btn-primary p-1 mt-2 col-4">Retour</button>
					</form>
				</div>
			</div>
		<?php endforeach;} ?>
		<?php if($fusion) { foreach ($fusion as $value): ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/user.png" alt="logo user">
					</div>
				</div>
				<div class="mt-4 text-center">
					<a href="#">
						<span><?= $value['prenom'] ?></span>
						<span><?= $value['nom'] ?></span>
					</a>
					<p>Né le <?= $value['date_naissance']?></p>
					<p>Age : <?= $value['age'] ?></p>
					<p><?= $value['ville'] ?></p>
					<button class="btn btn-success mt-3">Je suis interessé</button>
					<form action="accueil.php">
						<button class="btn btn-primary p-1 mt-2 col-4">Retour</button>
					</form>
				</div>
			</div>
		<?php endforeach;} ?>
		<?php if($agecity) { foreach ($agecity as $value): ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/user.png" alt="logo user">
					</div>
				</div>
				<div class="mt-4 text-center">
					<a href="#">
						<span><?= $value['prenom'] ?></span>
						<span><?= $value['nom'] ?></span>
					</a>
					<p>Né le <?= $value['date_naissance']?></p>
					<p>Age : <?= $value['age'] ?></p>
					<p><?= $value['ville'] ?></p>
					<button class="btn btn-success mt-3">Je suis interessé</button>
					<form action="accueil.php">
						<button class="btn btn-primary p-1 mt-2 col-4">Retour</button>
					</form>
				</div>
			</div>
		<?php endforeach;} ?>
		<?php if($genreage) {foreach ($genreage as $value): ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/user.png" alt="logo user">
					</div>
				</div>
				<div class="mt-4 text-center">
					<a href="#">
						<span><?= $value['prenom'] ?></span>
						<span><?= $value['nom'] ?></span>
					</a>
					<p>Né le <?= $value['date_naissance']?></p>
					<p>Age : <?= $value['age'] ?></p>
					<p><?= $value['ville'] ?></p>
					<button class="btn btn-success mt-3">Je suis interessé</button>
					<form action="accueil.php">
						<button class="btn btn-primary p-1 mt-2 col-4">Retour</button>
					</form>
				</div>
			</div>
		<?php endforeach;} else{ ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/exclamation-sign.png" alt="logo error">
					</div>
				</div>
				<div class="mt-4 text-center">
					<button class="btn btn-success mt-3 p-2">Aucun résultats</button>
					<form action="accueil.php">
						<button class="btn btn-primary p-1 mt-2">Retour</button>
					</form>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php if($datage || $city || $citygenre || $sexe || $fusion || $genreage || $agecity){ ?>
		<img class="float-right arrow" src="Image/arrowright.png" alt="Boutton qui permet de changer de membre (pre)">			
		<img class="arrow--left" src="Image/arrowleft.png" alt="Boutton qui permet de changer de membre (next)">			
	<?php } ?>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script src="carroussel.js"></script>
</body>
</html>