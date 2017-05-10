<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Chargement du header et du menu -->
	<?php
		include 'static/header.php';
		include 'static/navigation.php';
	?>
	<div class="no-maring-bottom container-fluid well">
		<?php if(is_connected()){ ?>
			<h1 class="alert alert-danger">Vous êtes déjà connecté</h1>
			<a class="btn btn-default" href="index.php?page=index">Retourner à l'accueil</a>
			<?php }else{ ?>

			<?php if(isset($_SESSION['msg'])){ ?>
				<h2 class="alert alert-danger alert-dimissable close"><?php echo $_SESSION['msg'] ?></h2>
			<?php } ?>
		<div class="thumbnail text-center col-md-offset-3 col-md-6">
			<h1>Inscription : </h1>
			<form class="form" method="get" action="">
				<input type="hidden" name="page" value="inscriptionProcess">
				<div class="form-group">
					<label>Identifiant</label>
					<input class="form-control" type="text" name="nomUser" placeholder="Nom d'utilisateur" required>
				</div>
				<div class="form-group">
					<label>Mot de passe</label>
					<input class="form-control" type="password" name="password" required>	
				</div>
				<div class="form-group">
					<label>Confirmer mot de passe</label>
					<input class="form-control" type="password" name="passwordConfirm" required>	
				</div>
				<div class="form-group">
					<label>Adresse mail</label>
					<input class="form-control" type="email" name="email" placeholder="ex : didier@gmail.com" required>	
				</div>
				<div class="form-group">
					<input class="btn btn-warning" type="submit" name="valider" value="S'inscrire">
					<a class="btn btn-default" href="index.php?page=connexion">Retour</a>
					<p></p>
					<p>Vous avez déjà un compte ? <a href="index.php?page=connexion">Se connecter</a></p>
				</div>	
			</form>
		</div>
		<?php } ?>
	</div>
	<?php include 'static/footer.php';?>
</body>
</html>