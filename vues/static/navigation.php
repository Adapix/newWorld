<div class="navbar navigation">
	<a href="index.php?page=index"><title id="logo">NW</title></a>
	<a class="bouttonMenu" href="index.php?page=acheter">Acheter</a>
	<a class="bouttonMenu" href="index.php?page=produire">Produire</a>
	<a class="bouttonMenu" href="index.php?page=distribution">Distribuer</a>
	<?php if (is_connected()){ ?> 
	<a class="bouttonMenu" href="index.php?page=newLot">Ajouter un lot</a>
	<?php } ?>
	<form method="get" class="pull-right search_contnair" action="search.php">
		<input class="search_button" type="search" name="search" placeholder="Rechercher">
	</form>
</div>
	