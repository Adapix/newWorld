<?php

function deconnexion(){
	$_SESSION['connected'] = false;
}

function req($request)
{
	global $bdd;
	$return = $bdd->query($request);
	return $return;
}


function is_admin()
{
	if (is_connected() AND $_SESSION['admin'])
	{
		return true;
	}
	return false;
}

function test($var){
	echo "<pre>";
	print_r($var);
	echo "<pre>";
}

function connexion()
{
	if (isset($_GET['nomUser']) AND isset($_GET['password']))
	{
		$userDb = listeByReq("SELECT nomUser,password FROM users WHERE nomUser = \"".$_GET['nomUser']."\" AND password = \"".$_GET['password']."\"");
		

		if ($userDb == $_GET['nomUser'])
		{
			$_SESSION['connected'] = true;
			$_SESSION['nomUser'] = $userDb;
			// $req = listeByReq("SELECT admin FROM users WHERE nomUser = \"".$_GET['nomUser']."\" ");
			
			// test($req);
			header('Location: index.php?page=index');
		}
		else
		{
			$_SESSION['msg'] = "Combinaison Identifiant/Mot de passe incorect";
			header('Location: index.php?page=connexion');
		}
	}
	else
	{
		$_SESSION['msg'] = "Veuillez saisir les deux champs";
		header('Location: index.php?page=connexion');
	}
}

function singulierCompte()
{
	$userDb = listeByReq("SELECT nomUser,password FROM users WHERE nomUser = \"".$_GET['nomUser']."\" OR email = \"".$_GET['email']."\"");

	if (!isset($userDb))
	{
		return true;
	}
}

function listeByReq($req)
{
	$user =  req($req);
		$user->data_seek(0);
		$key = 0;

		while ($data = $user->fetch_array() ) {
			$userDb = $data['nomUser'];
			$key++;
		}
	return $userDb;
}


?>
