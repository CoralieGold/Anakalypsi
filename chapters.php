<?php $title = "Les chapitres" ?>
<?php include_once("header.php") ?>

<div class="main">
	<div class="gold-border center">

	<?php include_once("menu.php") ?>

	<h1>Les chapitres</h1>
	<div id="summary" class="row">

		<div id="line"></div>

		<a href="chapter1.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>01</span>
				</div>
				<div class="chapter_title">St Sulpice</div>
			</div>
			<div class="chapter_point"><img src="images/chap1_summary.jpg"></div>
		</a>

		<a href="chapter2.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>02</span>
				</div>
				<div class="chapter_title">Kolmanskop</div>
			</div>
			<div class="chapter_point"><img src="images/chap2_summary.jpg"></div>
		</a>

		<a href="chapter3.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>03</span>
				</div>
				<div class="chapter_title">Tchernobyl</div>
			</div>
			<div class="chapter_point"><img src="images/chap3_summary.jpg"></div>
		</a>

		<a href="chapter4.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>04</span>
				</div>
				<div class="chapter_title">Green Village</div>
			</div>
			<div class="chapter_point"><img src="images/chap4_summary.jpg"></div>
		</a>

		<a href="chapter5.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>05</span>
				</div>
				<div class="chapter_title">Ankor</div>
			</div>
			<div class="chapter_point"><img src="images/chap5_summary.jpg"></div>
		</a>

		<a href="chapter6.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>06</span>
				</div>
				<div class="chapter_title">Floating Forest</div>
			</div>
			<div class="chapter_point"><img src="images/chap6_summary.jpg"></div>
		</a>

		<a href="chapter7.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>07</span>
				</div>
				<div class="chapter_title">Hôtel Del Salto</div>
			</div>
			<div class="chapter_point"><img src="images/chap7_summary.jpg"></div>
		</a>

		<a href="chapter8.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>08</span>
				</div>
				<div class="chapter_title">Orpheum Theater</div>
			</div>
			<div class="chapter_point"><img src="images/chap8_summary.jpg"></div>
		</a>

		<a href="chapter9.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>09</span>
				</div>
				<div class="chapter_title">Casino</div>
			</div>
			<div class="chapter_point"><img src="images/chap9_summary.jpg"></div>
		</a>

		<a href="chapter10.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>10</span>
				</div>
				<div class="chapter_title">Orient Express</div>
			</div>
			<div class="chapter_point"><img src="images/chap10_summary.jpg"></div>
		</a>

		<a href="chapter11.php" class="chapter one twelfth">
			<div class="chapter_content">
				<div class="chapter_number">
					Chapitre <span>11</span>
				</div>
				<div class="chapter_title">St Sulpice</div>
			</div>
			<div class="chapter_point"><img src="images/chap1_summary.jpg"></div>
		</a>

	</div>
</div>

<?php include_once("footer.php") ?>

<script type="text/javascript">
	$(document).ready(function() {
		$("div.chapter_content").css("visibility", "hidden");


		$(".chapter_point").mouseover(function() {
			$(this).siblings("div.chapter_content").css("visibility", "visible");
		});

		$(".chapter_point").mouseout(function() {
			$(this).siblings("div.chapter_content").css("visibility", "hidden");
		});

	});

</script>
