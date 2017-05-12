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

		<?php
		if(!empty($_SESSION['msg']) and isset($_SESSION['msg'])){			
		?>

		<h2 class="alert alert-danger alert-dimissable close"><?php echo $_SESSION['msg']; $_SESSION['msg'] = ""; ?></h2>

		<?php }  ?>

		<div class="thumbnail text-center col-md-offset-5 col-md-2">

			<h1>Se connecter</h1>	
			<form class="form" method="get" action="">
				<input type="hidden" name="page" value="connectProcess">			
				<div class="form-group col-md-8 col-md-offset-2">
					<label>Identifiant</label>
					<input class="form-control" type="text" name="nomUser" placeholder="Nom d'utilisateur">
				</div>
				<div class="form-group col-md-8 col-md-offset-2">
					<label>Mot de passe</label>
					<input class="form-control" type="password" name="password" placeholder="******">	
				</div>
				<div class="form-group">
					<input class="btn btn-success" type="submit" name="valider" value="Connexion">
					<a class="btn btn-default" href="index.php?page=connexion">Retour</a>
				</div>
				<p>Vous n'avez pas de compte ? <a href="index.php?page=inscription">S'enregistrer</a></p>
			</form>
		</div>		
		<?php } ?>
	</div>
	<?php include 'static/footer.php';?>
</body>
</html>