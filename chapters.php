<?php $title = "Les chapitres" ?>
<?php include_once("header.php") ?>

<div class="main">
	<div class="gold-border center">

	<?php include_once("menu.php") ?>

	<h1>Les chapitres</h1>
	<div id="summary" class="row">

		<div id="line"></div>

		<a href="chapter1.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>01</span>
				</div>
				<div class="chapters_title">St Sulpice</div>
			</div>
			<div class="chapters_point"><img src="images/chap1_summary.jpg"></div>
		</a>

		<a href="chapter2.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>02</span>
				</div>
				<div class="chapters_title">Kolmanskop</div>
			</div>
			<div class="chapters_point"><img src="images/chap2_summary.jpg"></div>
		</a>

		<a href="chapter3.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>03</span>
				</div>
				<div class="chapters_title">Tchernobyl</div>
			</div>
			<div class="chapters_point"><img src="images/chap3_summary.jpg"></div>
		</a>

		<a href="chapter4.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>04</span>
				</div>
				<div class="chapters_title">Green Village</div>
			</div>
			<div class="chapters_point"><img src="images/chap4_summary.jpg"></div>
		</a>

		<a href="chapter5.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>05</span>
				</div>
				<div class="chapters_title">Ankor</div>
			</div>
			<div class="chapters_point"><img src="images/chap5_summary.jpg"></div>
		</a>

		<a href="chapter6.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>06</span>
				</div>
				<div class="chapters_title">Floating Forest</div>
			</div>
			<div class="chapters_point"><img src="images/chap6_summary.jpg"></div>
		</a>

		<a href="chapter7.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>07</span>
				</div>
				<div class="chapters_title">Hôtel Del Salto</div>
			</div>
			<div class="chapters_point"><img src="images/chap7_summary.jpg"></div>
		</a>

		<a href="chapter8.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>08</span>
				</div>
				<div class="chapters_title">Orpheum Theater</div>
			</div>
			<div class="chapters_point"><img src="images/chap8_summary.jpg"></div>
		</a>

		<a href="chapter9.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>09</span>
				</div>
				<div class="chapters_title">Casino</div>
			</div>
			<div class="chapters_point"><img src="images/chap9_summary.jpg"></div>
		</a>

		<a href="chapter10.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>10</span>
				</div>
				<div class="chapters_title">Orient Express</div>
			</div>
			<div class="chapters_point"><img src="images/chap10_summary.jpg"></div>
		</a>

		<a href="chapter11.php" class="chapters one twelfth">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>11</span>
				</div>
				<div class="chapters_title">St Sulpice</div>
			</div>
			<div class="chapters_point"><img src="images/chap1_summary.jpg"></div>
		</a>

	</div>
</div>

<?php include_once("footer.php") ?>

<script type="text/javascript">
	$(document).ready(function() {
		$("div.chapters_content").css("opacity", "0");
		$(this).siblings("div.chapters_content").css("margin-top", "0px");


		$(".chapters_point").mouseover(function() {
			$(this).siblings("div.chapters_content").css("opacity", "1");
			$(this).siblings("div.chapters_content").css("margin-top", "-10px");
		});

		$(".chapters_point").mouseout(function() {
			$(this).siblings("div.chapters_content").css("opacity", "0");
			$(this).siblings("div.chapters_content").css("margin-top", "0px");
		});

	});

</script>
