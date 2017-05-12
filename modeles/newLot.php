<?php

function msgErr()
{
	if (!empty($_SESSION['msgErr'])){
		return true;
	}
	else
	{
		return false;
	}
}

function afficherMsgErr()
{
	if (msgErr())
	{
		echo $_SESSION['msgErr'];
		$_SESSION['msgErr'] = "";
	}
}

function afficherConnexion($connected)
{
	if($connected)
	{
		return "Bonjour ".$_SESSION['nomUser']." ! ";
	}
	{
		return "Attention ! Vous n'êtes pas connecté";
	}
}

function genererListeMenuDeroulant($enum)
{
	global $bdd;

	$req = $bdd->query("show columns from lot like '$enum'");
	$req->data_seek(0);
	$row = $req->fetch_assoc();
	$var = $row['Type'];
	$var = utf8_encode($var);
	$var1 = str_replace("enum('","",$var);
	$var2 = str_replace(")","",$var1);
	$var3 = str_replace("'","",$var2);
	$liste = explode(",",$var3);
	asort($liste);
	return $liste;
}

function afficherOptions($liste)
{		
	foreach ($liste as $key => $value) {
		echo "<option name=\"$value\">".$value."</option>";
	}
}



?>