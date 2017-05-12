<?php

function dataLot()
{
	if (isset($_SESSION['dataLot']))
	{
		return true;
	}
	else
	{
		return false;
	}
}


?>