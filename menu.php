<nav>
	<div class="row mainNav">
		<div class="one thirds">
			<li><a href="index.php" class="logoNav">Anakálypsi</a></li>
		</div>
		<div class="one third skip-one">
			<div class="one third">
				<li class='<?php if(!strcmp ($title, "A propos")) echo "active"; ?>'><a href="about.php">A propos</a></li>
			</div>
			<div class="one third">
				<li class='<?php if(strpos($title, "chapitre")) echo "active"; ?>'><a href="chapters.php">Les chapitres</a></li>
			</div>
			<div class="one third">
				<li class='<?php if(!strcmp ($title, "La carte")) echo "active"; ?>'><a href="map.php">La carte</a></li>
			</div>
		</div>
	</div>
</nav>
