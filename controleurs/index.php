<?php
// Nom de la page :

$nomPage = "Accueil";

// Les fonctions globales : 

include(dirname(__FILE__).'/../modeles/function.php');

// Chargement des fonctions spécifiques

include(dirname(__FILE__).'/../modeles/index.php');

// Chargement du HEAD

include(dirname(__FILE__).'/../vues/static/head.php');

// Chargement du HEADER

include(dirname(__FILE__).'/../vues/static/header.php');

// Chargement du MENU DE NAVIGATION

include(dirname(__FILE__).'/../vues/static/navigation.php');

// Chargement du CONTENU

include(dirname(__FILE__).'/../vues/index.php');

// Chargement du FOOTER

include(dirname(__FILE__).'/../vues/static/footer.php');

	
echo "</body>";
echo "</html>";

?>