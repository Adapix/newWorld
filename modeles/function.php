<?php

function is_connected()
{
	if (isset($_SESSION['idUser']) AND $_SESSION['idUser']) {
		return true;
		exit();
	}
	return false;
}

?>