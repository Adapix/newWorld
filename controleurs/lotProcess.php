<?php

include(dirname(__FILE__).'/../modeles/lotProcess.php');

if (checkAll())
{
	$_SESSION['dataLot'] = "";
	$data['nomLot'] = $_GET['nomArticle'];
	$data['aliment'] = $_GET['aliment'];
	$data['dateRecolte'] = $_GET['dateRecolte'];
	$data['dlc'] = $_GET['dlc'];
	$data['qte'] = $_GET['qte'];
	$data['prixAuKg'] = $_GET['prixAuKg'];
	$data['qteMinParVente'] = $_GET['qteMinParVente'];
	$data['modeDeProduction'] = $_GET['modeDeProduction'];
	$data['nomLieuDeProd'] = $_GET['nomLieuDeProd'];
	$data['nomParcelle'] = $_GET['nomParcelle'];
	$data['nomArticle'] = $_GET['nomArticle'];
	$_SESSION['dataLot'] = $data;

	sendToDb($data);

	header("Location: index.php?page=lotValide");
}
else
{
	header("Location: index.php?page=newLot");

}

$var = checkAll();


?>