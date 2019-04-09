<!DOCTYPE html>
<?php include('class_fusion.php'); 
// $fusion = $combo->fusion_filtre();
?>
<html lang="fr">
<head>
	<title>Résultats recherche</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>
	<div class="div--perso p-3 col-md-3">
		<?php if($fusion) {foreach ($fusion as $value): ?>
			<div class="container contain--infos--recherche p-3 mr-3 col-md-12">
				<div class="englob--pict--user pt-5 pb-5">
					<div class="text-center photo--user">
						<img src="Image/user.png">
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
				</div>
			</div>
		<?php endforeach;} ?>
	</div>
	<?php if($datage || $city || $citygenre || $datage){ ?>
		<img class="float-right arrow" src="Image/arrowright.png">			
		<img class="arrow--left" src="Image/arrowleft.png">			
	<?php } ?>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script src="search.js"></script>
</body>
</html>