<nav class="row mainNav Ndesktop valign-wrapper">
	<div class="two twelfth">
		<a href="index.php">
			<img  class="logoNav" src="images/logo_anakalypsi.svg" alt="Logo du site Anakalypsi" />
		</a>
	</div>
	<div class="nine twelfths skip-one valign">
			<li class='<?php if(!strcmp ($title, "A propos")) echo "active"; ?>'><a href="about.php">À propos</a></li>
			<li class='<?php if(strpos($title, "chapitre")) echo "active"; ?>'><a href="chapters.php">Les chapitres</a></li>
			<li class='<?php if(!strcmp ($title, "La carte")) echo "active"; ?>'><a href="map.php">La carte</a></li>
	</div>
</nav>


<div class="mainNav Nmobile">
	<nav class="row center">
			<img  class="logoNav" src="images/logo_anakalypsi.svg" alt="Logo du site Anakalypsi" />
			<li class='<?php if(!strcmp ($title, "Anakálypsi")) echo "active"; ?>'><a href="index.php">Accueil</a></li>
			<li class='<?php if(strpos($title, "chapitre")) echo "active"; ?>'><a href="chapters.php">Les chapitres</a></li>
			<li class='<?php if(!strcmp ($title, "A propos")) echo "active"; ?>'><a href="about.php">À propos</a></li>
	</nav>
</div>
<div class="navButton open">Menu</div>
<div class="navButton close">Fermer</div>
