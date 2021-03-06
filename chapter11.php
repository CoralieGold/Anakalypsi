<?php $title = "Le chapitre 11" ?>
<?php include_once("header.php") ?>

<?php
if(!isset($_COOKIE['Anakalypsi']))
{
	header('Location: chapters.php');
	exit();
}

?>


<div class="main chapter eleven">
	<div class="gold-border center"></div>
	<div class="intro">

		<?php include_once("menu.php") ?>

		<div class="row">
			<div class="nine twelfths mobile centered">
				<h1>Chapitre <span class="gold">11</span></h1>
			</div>
		</div>
		<div class="row">
			<div class="seven twelfths tablet centered">
				<h2 class="letter-spacing">Eglise Saint Sulpice</h2>
			</div>
		</div>
		<div class="row">
			<div class="seven twelfths tablet centered">
				<p class="white">
					Vous êtes de retour à votre point de départ. Comment voyez-vous maintenant le monde ? Profitez de la présence des autres. De leur respect du silence. Souriez-leur, ils vous souriront en retour.
				</p>
			</div>
		</div>
	</div>
	<div class="text">
		<div class="row vwdesk">
			<div class="one half tablet">
				<img src="images/chap11/chap11_img1.jpg" alt="Exterieur de l'Église Saint Sulpice" class="chapterImage" />
			</div>
			<div class="one half tablet">
				<p class="valign">
					Je termine mon inexorable voyage. Je retourne à l’origine de mes maux. Les ombres ne l’habitent plus. Seules des créatures faites de chair et de tissu. De couleur et d’odeur.
				</p>
				<p class="valign">
					Après être retourné à cette pierre m’ayant offert la vue, je me balade de plein jour. Je marche dans cette mare lumineuse, profite du courant, visite ces lieux avec un nouvel oeil. Je ne me déplace plus vers le sol, je m’élève vers les cieux.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="one centered half tablet">
				<p>
					Je marche maintenant sur ses toits, voyant la ville telle qu’elle est. Une ville. Un carrefour où la vie fleurit. Certains appellent cela cité, d’autres capitale. Mais ils ne voit pas tout cela de mes yeux. Cette ville n’est rien. Toutes ces lumières ne sont que des lucioles tentant d’éclairer un soleil. Ce soleil fait de petites touches. Ce soleil incomplet. Certains endroits n’y sont pas éclairés, et heureusement. Tout a besoin de sa part d’ombre, mais nous avons besoin de sa part de lumière.<br>
					Leur ville, leur pays, leur continent, je les aime tous. Car tout ça n’est qu’un tout. Et ce tout, c’est chez moi.
				</p>
			</div>
		</div>
		<div class="row vwdesk">
			<div class="one half tablet">
				<p class="valign">
					J’aime ces créatures. J’aime ce lieu. J’aime ce bruit. Aujourd’hui, je me décide enfin. Je vais moi aussi faire du bruit.<br>
					Voilà plus haut ma tentative. Je partage mon histoire afin de permettre aux lieux de faire à nouveau du bruit pour d’autres créatures. Et pour que celles-ci les découvrent, et les apprécient.
				</p>
			</div>
			<div class="one half tablet">
				<img src="images/chap11/chap11_img2.jpg" alt="Intérieur de l'Église Saint Sulpice" class="chapterImage" />
			</div>
		</div>
		<div class="row">
			<div class="one centered half tablet">
				<p>
					Je retourne bientôt à la terre, et j’y retourne avec un sourire. Vous êtes des lumières, et je deviendrai ombre.
				</p>
			</div>
		</div>
	</div>
	<div class="en-bref">
		<div class="row">
			<div class="eight twelfths tablet centered">
				<h2 class="letter-spacing white bold">En Bref</h2>
			</div>
		</div>
		<div class="row">
			<div class="eight twelfths tablet centered">
				<p class="white">
					L’Eglise Saint Sulpice se trouve au centre de Paris. La première et dernière étape de votre voyage.<br>
					Le lieu est situé 2 rue Garancière, dans le 6eme arrondissement de Paris en France.
				</p>
			</div>
		</div>
	</div>
	<div class="map-chapter">
		<img src="images/chap11/chap11_map.png" alt="" />
	</div>
	<div class="next-chapter valign-wrapper">
		<div class="valign" style="height: 80px;">
			<a href="chapter10.php" class="left valign-wrapper">
				<div class="line valign"></div>
				<div class="dot valign"></div>
				<p class="link valign uppercase">Chapitre 10</p>
			</a>
		</div>
	</div>
</div>

<?php include_once("footer.php") ?>
