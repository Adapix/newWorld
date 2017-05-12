<!DOCTYPE html>
<html>
<head>
	<title>New World</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!-- Chargement du header et du menu -->
	<?php
		include 'static/header.php';
		include 'static/navigation.php';
	?>
	<section class="no-maring-bottom container-fluid well">
		<?php if(is_connected()){
			if (msgErr()){	?>
			<div class="alert alert-danger alert-dismissable">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Erreur !</strong> <?php afficherMsgErr(); ?>
			</div>
		<?php } ?>
		<div class="container overflow">

			<!-- Message d'erreur -->

			<div class="row">
				<div class="bg-default col-md-6">
					<h3>Créer un lot : </h3>
					<form action="" method="get">
						<input type="hidden" name="page" value="lotProcess">						
						<div class="form-group">
							<label class="sel1">Fruits/Légumes</label>
							<select name="aliment" class="form-control">
								<?php afficherOptions($listeSelectionAliment) ?>
							</select>
						</div>
						<div class="form-group">
							<label class="sel1">Variété</label>
							<input class="form-control" type="text" name="nomArticle" placeholder="ex : Les pommes Rambo">
						</div>
						<div class="form-group">
							<label class="sel1">Date de récolte</label>	
							<div class="input-group">
								<input class="form-control" type="date" name="dateRecolte" placeholder="jj/mm/aaaa">		
							</div>							
						</div>
						<div class="form-group">
							<label class="sel1">DLC</label>	
							<div class="input-group">
								<input class="form-control" type="date" name="dlc" placeholder="jj/mm/aaaa">
							</div>
						</div>						
						<div class="form-group">
							<label class="sel1">Quantité</label>	
							<div class="input-group">
								<input class="form-control text-right" type="float" name="qte" placeholder="1">
								<span class="input-group-addon">Kg</span>
							</div>
						</div>
						<div class="form-group">
							<label class="sel1">Prix</label>	
							<div class="input-group">
								<input class="form-control text-right" type="float" name="prixAuKg">
								<span class="input-group-addon">€/Kg</span>
							</div>
						</div>
						<div class="form-group">
							<label class="sel1">Quantité minimale de vente</label>	
							<div class="input-group">
								<input class="form-control text-right" type="float" name="qteMinParVente" value="0.5">
								<span class="input-group-addon">Kg</span>
							</div>
						</div>

						<div class="form-group">
							<label class="sel1">Mode de production</label>
							<select class="form-control" name="modeDeProduction">
								<?php afficherOptions($listeSelectionProduction) ?>
							</select>
						</div>
						<div class="form-group">
							<label class="sel1">Lieu de récolte</label>
							<input class="form-control" type="text" name="nomLieuDeProd">
						</div>
						<div class="form-group">
							<label class="sel1">Parcelle</label>
							<input class="form-control" type="float" name="nomParcelle">
						</div>
						<div class="form-group">
							<input class="btn btn-success form-group" type="submit" name="form" value="Valider">
						</div>							
					</form>
				</div>
			</div>

		</div>
		<?php }else{ ?>	
			<div class="alert alert-danger alert-dismissable">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			  <strong>Erreur !</strong> Vous devez être connecté et producteur pour saisir un Lot
			</div>
		<?php } ?>
	</section>

	<!-- Chargement du pied de page -->
	<?php include 'static/footer.php'; ?>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	
</body>
</html>