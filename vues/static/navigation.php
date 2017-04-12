<nav class="navbar navbar-inverse navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php?page=index"><title id="logo">NW</title></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="menu-onglet"><a href="index.php?page=acheter">Acheter</a></li>
		<li class="menu-onglet"><a href="index.php?page=produire">Produire</a></li>
		<li class="menu-onglet"><a href="index.php?page=distribution">Distribuer</a></li>
		<?php if (is_connected()){ ?> 
		<li><a href="index.php?page=newLot">Ajouter un lot</a></li>
		<?php } ?>					
      </ul>
      <form method="get" class="pull-right search_contnair" action="search.php">
							<input class="search_button" type="search" name="search" placeholder="Rechercher">
					</form>
    </div>	    
  </div>
</nav>