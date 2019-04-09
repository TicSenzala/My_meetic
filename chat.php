<!DOCTYPE html>
<?php require('class_chatInst.php');
$display = $mess->display_msg();
?>
<html>
<head>
	<title>Conversation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="chat.css">
</head>
<body>
	<div class="container col-md-5 contain--messagerie">
		<!-- !!!! Div contenant le head du formulaire !!!! -->
		<div class="pos-f-t">
			<div class="collapse" id="navbarToggleExternalContent">
				<div class="bg-dark">
					<h5 class="text-white h4">Collapsed content</h5>
					<span class="text-muted">Toggleable via the navbar brand.</span>
				</div>
			</div>

			<!-- Div contenant le footer de la messagerie -->
			<form method="POST">
				<nav class="navbar navbar-dark bg-dark nav--mess">
					<img src="Image/logo.png" width="50px">
					<input type="email" name="email" placeholder="@email" class="form-control col-5">
					<!-- <input type="submit" name="envoyer" class="btn btn-success" value="Ajoutez"> -->
				</nav>
			</div>
			<div class="p-2 container--input mt-5 navbar-dark bg-dark nav--mess form-inline">
				<input type="text" name="message" class="container form-control col-8 p-2 entry--msg">
				<input type="submit" name="envoyer" class="btn btn-dark col-2 text-primary" value="Envoyer">
			</div>
		</form>
		<?php foreach ($display as $value): ?>
			<div class="container">
				<p class="text-success">Moi:</p>
				<p class="message--send col-5 p-3"><?= $value['message_envoyer'] ?></p>
			</div>
		<?php endforeach; ?>
		<?php if(isset($_POST['email']) && $_SESSION['email'] === $_POST['email']){ foreach ($datadisplayrec as $value): ?>
			<div class="container">
				<p class="text-success"><?php $value['email'] ?>:</p>
				<p class="message--send col-5 p-3"><?= $value['message_recu'] ?></p>
			</div>
		<?php endforeach;} ?>
	</div>
</body>
</html>