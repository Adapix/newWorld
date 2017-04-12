<?php
session_start();

$bdd = new mysqli("localhost","root","","newWorld");

if (!empty($_GET['page']) AND is_file('controleurs/'.$_GET['page'].'.php'))
{
	include('controleurs/'.$_GET['page'].'.php');
}
else
{
	if(!isset($_GET['page']))
		include('controleurs/index.php');
	else
	include('controleurs/erreur404.php');
}

?>