<!DOCTYPE html>
<html>
<head>
	<title>Lot créé</title>
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
		<div class=" container overflow well">
			<div class="row">
				<div class="col-md-6">
					<h3>Lot enregistré avec succès </h3>
					<div class="thumbnail">
						<table class="table table-bordered">
							<tr class="">
								<td>Nom du lot : </td>
								<td><?php echo $data['nomLot'] ?></td>
							</tr>
							<tr>
								<td>Fruits/Légumes : </td>
								<td><?php echo $data['aliment'] ?></td>
							</tr>
							<tr>
								<td>Date de récolte : </td>
								<td><?php echo $data['dateRecolte'] ?></td>
							</tr>
							<tr>
								<td>DLC : </td>
								<td><?php echo $data['dlc'] ?></td>
							</tr>
							<tr>
								<td>Quantité : </td>
								<td><?php echo $data['qte'] ?></td>
							</tr>
							<tr>
								<td>Prix : </td>
								<td><?php echo $data['prixAuKg'] ?></td>
							</tr>
							<tr>
								<td> Quantité minimale de vente : </td>
								<td><?php echo $data['qteMinParVente'] ?></td>
							</tr>
							<tr>
								<td> Mode de production : </td>
								<td><?php echo $data['modeDeProduction'] ?></td>
							</tr>
							<tr>
								<td>Lieu de récolte : </td>
								<td><?php echo $data['nomLieuDeProd'] ?></td>
							</tr>
							<tr>
								<td>Parcelle : </td>
								<td><?php echo $data['nomParcelle'] ?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-md-6">
					<h3>Options : </h3>
					<div class="thumbnail">
						<a class="btn btn-danger" href="#">Annuler le lot</a>
						<a class="btn btn-success" href="index.php?page=newLot">Ajouter un autre lot</a>						
					</div>
				</div>		
			</div>			
		</div>	
	</section>
	 
	

	<!-- Chargement du pied de page -->
	<?php include 'static/footer.php'; ?>

	

	
</body>
</html>