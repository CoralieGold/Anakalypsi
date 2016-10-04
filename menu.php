<nav>
	<ul class="mainNav" id="mainNav">
		<li class="logoNav"><a href="index.php">Anakálypsi</a></li>
		<li class='<?php if(!strcmp ($title, "A propos")) echo "active"; ?>'><a href="about.php">A propos</a></li>
		<li class='<?php if(strpos($title, "chapitre")) echo "active"; ?>'><a href="chapters.php">Les chapitres</a></li>	
		<li class='<?php if(!strcmp ($title, "La carte")) echo "active"; ?>'><a href="map.php">La carte</a></li>
	  <li class="icon">
	    <a href="javascript:void(0);" onclick="responsive()">&#9776;</a>
	  </li>
	</ul>
</nav>