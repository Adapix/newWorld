<?php

function is_connected()
{
	if (isset($_SESSION['connected']) AND $_SESSION['connected'])
		return true;
	return false;
}

?>