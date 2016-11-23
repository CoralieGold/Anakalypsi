<nav class="row mainNav valign-wrapper">
	<div class="two twelfth">
		<a href="index.php">
			<img  class="logoNav" src="images/logo_anakalypsi.svg" alt="Logo du site Anakalypsi" />
		</a>
	</div>
	<div class="nine twelfths skip-one valign">
			<li class='<?php if(!strcmp ($title, "A propos")) echo "active"; ?>'><a href="about.php" class="letter-spacing">À propos</a></li>
			<li class='<?php if(strpos($title, "chapitre")) echo "active"; ?>'><a href="chapters.php" class="letter-spacing">Les chapitres</a></li>
			<li class='<?php if(!strcmp ($title, "La carte")) echo "active"; ?>'><a href="map.php" class="letter-spacing">La carte</a></li>
	</div>
</nav>
