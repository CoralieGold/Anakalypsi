<nav class="row mainNav">
	<div class="two twelfth">
		<li><a href="index.php" class="logoNav">Anakálypsi</a></li>
	</div>
	<div class="five twelfths skip-five">
		<div class="one third">
			<li class='<?php if(!strcmp ($title, "La carte")) echo "active"; ?>'><a href="map.php" class="letter-spacing">La carte</a></li>
		</div>
		<div class="one third">
			<li class='<?php if(strpos($title, "chapitre")) echo "active"; ?>'><a href="chapters.php" class="letter-spacing">Les chapitres</a></li>
		</div>
		<div class="one third">
			<li class='<?php if(!strcmp ($title, "A propos")) echo "active"; ?>'><a href="about.php" class="letter-spacing">A propos</a></li>
		</div>
	</div>
</nav>
