<?php
include(dirname(__FILE__).'/../modeles/newLot.php');

$connected = is_connected();
$msgConnexion = afficherConnexion($connected);
$enum="aliment";
$listeSelectionAliment = genererListeMenuDeroulant($enum);
$listeSelectionProduction = genererListeMenuDeroulant("modeDeProduction");

include(dirname(__FILE__).'/../vues/newLot.php');

?>	