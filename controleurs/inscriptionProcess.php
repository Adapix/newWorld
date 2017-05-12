<?php

include(dirname(__FILE__).'/../modeles/connexion.php');

unset($_SESSION['msg']);

if (isset($_GET['nomUser']) AND singulierCompte())
{
	if ($_GET['password'] == $_GET['passwordConfirm']) {
	$password = $_GET['password'];
	$passwordConfirm = $_GET['passwordConfirm'];
		
	$nomUser = $_GET['nomUser'];
	$email = $_GET['email'];

	$user = new User($nomUser,$password,$email);
	$user -> toDb();
	$_SESSION['connected'] = true;
	$_SESSION['nomUser'] = $_GET['nomUser'];

	header('Location: index.php?page=index');

	}
	else
	{
		$_SESSION['msg'] = "Mot de passe de confirmation erroné";
		header('Location: index.php?page=inscription');
	}
}
else
{
	$_SESSION['msg'] = "Champs erronés ou identifiant/email déjà existant";
	header('Location: index.php?page=inscription');
}

?>