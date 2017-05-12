<?php
global $bdd;


// Les fonctions :

	//  Les checks :


	function nomLot()
	{
		if (isset($_GET['nomArticle']) AND !empty($_GET['nomArticle'])){
			return true;		
		}
		else{
			return false;
		}
	}

	function nomAliment()
	{
		if (isset($_GET['aliment']) AND !empty($_GET['aliment'])){
			return true;
		}
		else{
			return false;
		}
	}

	function dateRecolte()
	{
		if (isset($_GET['dateRecolte']) AND !empty($_GET['dateRecolte'])){
			return true;
		}
		else{
			return false;
		}
	}

	function dlc()
	{
		if (isset($_GET['dlc']) AND !empty($_GET['dlc'])){
			return true;
		}
		else{
			return false;
		}
	}

	function qte()
	{
		if (isset($_GET['qte']) AND !empty($_GET['qte'])){
			return true;
		}
		else{
			return false;
		}
	}

	function prixAuKg()
	{
		if (isset($_GET['prixAuKg']) AND !empty($_GET['prixAuKg'])){
			return true;
		}
		else{
			return false;
		}
	}

	function qteMinParVente()
	{
		if (isset($_GET['qteMinParVente']) AND !empty($_GET['qteMinParVente'])){
			return true;
		}
		else{
			return false;
		}
	}

	function modeDeProduction()
	{
		if (isset($_GET['modeDeProduction']) AND !empty($_GET['modeDeProduction'])){
			return true;
		}
		else{
			return false;
		}
	}

	function nomLieuDeProd()
	{
		if (isset($_GET['nomLieuDeProd']) AND !empty($_GET['nomLieuDeProd'])){
			return true;
		}
		else{
			return false;
		}
	}

	function nomParcelle()
	{
		if (isset($_GET['nomParcelle']) AND !empty($_GET['nomParcelle'])){
			return true;
		}
		else{
			return false;
		}
	}


	function checkAll()
	{
	$_SESSION['msgErr'] = "";
		if (nomLot())
		{ 
			if (nomAliment())
			{
				if (dateRecolte())
				{
					if (dlc())
					{
					 	if (qte())
					 	{
					 		if (prixAuKg())
					 		{
					 			if (qteMinParVente())
					 			{
					 				if (modeDeProduction())
					 				{
					 					if (nomLieuDeProd())
					 					{
					 						if (nomParcelle())
					 						{			 							
					 							return true;
					 						}
					 						else
											{
												$_SESSION['msgErr'] = "Numéro de parcelle invalide";			
												return false;
											}
					 					}
					 					else
										{
											$_SESSION['msgErr'] = "Lieu de récolte invalide";			
											return false;

										}
					 				}
					 				else
									{
										$_SESSION['msgErr'] = "Mode de porduction invalide";			
										return false;

									}
					 			}
					 			else
								{
									$_SESSION['msgErr'] = "Quantité mnimum par vente invalide";			
									return false;

								}
					 		}
					 		else
							{
								$_SESSION['msgErr'] = "Prix au Kilo invalide";			
								return false;

							}
					 	}
					 	else
						{
							$_SESSION['msgErr'] = "Quantité invalide";			
							return false;

						}					
					}
					else
					{
						$_SESSION['msgErr'] = "Date limite de consomation invalide";			
						return false;

					}				
				}
				else
				{
					$_SESSION['msgErr'] = "Date de récolte invalide";			
					return false;

				}
			}
			else
			{
				$_SESSION['msgErr'] = "Choix d'aliment invalide";			
				return false;

			}
		}
		else
		{
			$_SESSION['msgErr'] = "Nom de lot invalide";			
			return false;

		}
	}

	

// Fin des checks

function req($var)
{
	global $bdd;
	return $bdd->query($var);
}

function sendToDb($data)
{
	$nomLot = $data['nomLot'];
	$aliment = $data['aliment'];
	$dateRecolte = $data['dateRecolte'];
	$dlc = $data['dlc'];
	$qte = $data['qte'];
	$prixAuKg = $data['prixAuKg'];
	$qteMinParVente = $data['qteMinParVente'];
	$modeDeProduction = $data['modeDeProduction'];
	$nomLieuDeProd = $data['nomLieuDeProd'];
	$nomParcelle = $data['nomParcelle'];
	$nomArticle = $data['nomArticle'];

	req("INSERT INTO 
	lot (aliment,modeDeProduction,dateRecolte,dlc,qte,prixAuKg,qteMinParVente,nomArticle)
	VALUES (\"$aliment\",\"$modeDeProduction\",\"$dateRecolte\",\"$dlc\",$qte,$prixAuKg,$qteMinParVente,\"$nomArticle\")");

}



?>