<?php $title = "Les chapitres" ?>
<?php include_once("header.php") ?>

<div class="main bg-img">
	<div class="gold-border center">

	<?php include_once("menu.php") ?>

	<div class="row">
		<div class="eleven eleventh one-up-ipads skip-one">
			<h1>Les chapitres</h1>
		</div>
	</div>
	<div id="summary" class="row">

		<div id="line"></div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>01</span>
				</div>
				<div class="chapters_title">St Sulpice</div>
			</div>
			<div class="hover_point_space"><a href="chapter1.php" class="chapters_point"><img src="images/chap1/chap1_small.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>02</span>
				</div>
				<div class="chapters_title">Kolmanskop</div>
			</div>
			<div class="hover_point_space"><a href="chapter2.php" class="chapters_point"><img src="images/chap2/chap2_small.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>03</span>
				</div>
				<div class="chapters_title">Tchernobyl</div>
			</div>
			<div class="hover_point_space"><a href="chapter3.php" class="chapters_point"><img src="images/chap3_summary.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>04</span>
				</div>
				<div class="chapters_title">Green Village</div>
			</div>
			<div class="hover_point_space"><a href="chapter4.php" class="chapters_point"><img src="images/chap4_summary.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>05</span>
				</div>
				<div class="chapters_title">Ankor</div>
			</div>
			<div class="hover_point_space"><a href="chapter5.php" class="chapters_point"><img src="images/chap5_summary.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>06</span>
				</div>
				<div class="chapters_title">Floating Forest</div>
			</div>
			<div class="hover_point_space"><a href="chapter6.php" class="chapters_point"><img src="images/chap6_summary.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>07</span>
				</div>
				<div class="chapters_title">Hôtel Del Salto</div>
			</div>
			<div class="hover_point_space"><a href="chapter7.php" class="chapters_point"><img src="images/chap7_summary.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>08</span>
				</div>
				<div class="chapters_title">Orpheum Theater</div>
			</div>
			<div class="hover_point_space"><a href="chapter8.php" class="chapters_point"><img src="images/chap8_summary.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>09</span>
				</div>
				<div class="chapters_title">Casino</div>
			</div>
			<div class="hover_point_space"><a href="chapter9.php" class="chapters_point"><img src="images/chap9_summary.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content">
				<div class="chapters_number">
					Chapitre <span>10</span>
				</div>
				<div class="chapters_title">Orient Express</div>
			</div>
			<div class="hover_point_space"><a href="chapter10.php" class="chapters_point"><img src="images/chap10_summary.jpg"></a></div>
		</div>

		<div class="chapters one eleventh one-up-ipad">
			<div class="chapters_content"></div>
			<div class="hover_point_space"><a href="#" class="chapters_secret"></a></div>
		</div>

	</div>
</div>

<?php include_once("footer.php") ?>

<script type="text/javascript">
	$(document).ready(function() {

		if (matchMedia) {
		  var mq = window.matchMedia("(max-width: 1024px)");
		  mq.addListener(WidthChange);
		  WidthChange(mq);
		}

		// media query change
		function WidthChange(mq) {
		  if (mq.matches) {
		   	$("div.chapters_content").css("opacity", "1");
				$(this).siblings("div.chapters_content").css("margin", "0px");
				$(this).siblings("div.chapters_point").css("margin-top", "0px");
		  }
		  else {
		   	$("div.chapters_content").css("opacity", "0");
				$(this).siblings("div.chapters_content").css("margin", "0px");
				$(this).siblings("div.chapters_point").css("margin-top", "0px");


				$(".hover_point_space").mouseover(function() {
					$(this).siblings("div.chapters_content").css("opacity", "1");
					$(this).siblings("div.chapters_content").css("margin", "0");
				});

				$(".hover_point_space").mouseout(function() {
					$(this).siblings("div.chapters_content").css("opacity", "0");
					$(this).siblings("div.chapters_content").css("margin", "0");
				});

				$('.chapters_secret').on('click', function() {
					window.location.href = "chapter_secret.php";
				});
		  }

		}

	});

</script>
