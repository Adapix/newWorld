<div class="row text-right header">
	|<a href="#">France</a>
	<?php if (!is_connected()){ ?>
	|<a id="connexion" href="index.php?page=connexion">Connexion / Inscription</a>
	<?php }else{ ?>
	|<a id="profil" href="index.php?page=profil"> <?php echo $_SESSION['nomUser'] ?></a>
	|<a id="profil" href="index.php?page=deconnexion">Me déconnecter</a>
	<?php } ?>
</div>