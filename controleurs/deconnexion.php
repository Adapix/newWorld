<?php

include(dirname(__FILE__).'/../modeles/connexion.php');
deconnexion();
header('Location: index.php?page=index');

?>