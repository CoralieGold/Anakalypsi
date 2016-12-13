<?php $title = "Les chapitres" ?>
<?php include_once("header.php");
include_once("secret_access.php");
?>

<?php
if(!isset($_COOKIE['Anakalypsi']))
{
	if(isset($_POST['password'])) {
		if($_POST['password'] == $password_secret_chapter) {

			setcookie("Anakalypsi", "Anakalypsi", time()+60);
			header('Location: chapter11.php');
			exit();
		}
	}

}
?>



<div class="main bg-img">
	<div class="gold-border center"></div>

	<?php include_once("menu.php") ?>
	<div class="content">

		<div class="row">
			<div class="nine twelfths mobile centered">
				<h1>Les chapitres</h1>
			</div>
		</div>
		<div id="summary" class="row">

			<div id="line"></div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content" style="padding-left: 10px;">
					<div class="chapters_number">
						Chapitre <span>01</span>
					</div>
					<div class="chapters_title">St Sulpice</div>
				</div>
				<div class="hover_point_space"><a href="chapter1.php" class="chapters_point"><img src="images/chap1/chap1_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>02</span>
					</div>
					<div class="chapters_title">Kolmanskop</div>
				</div>
				<div class="hover_point_space"><a href="chapter2.php" class="chapters_point"><img src="images/chap2/chap2_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>03</span>
					</div>
					<div class="chapters_title">Tchernobyl</div>
				</div>
				<div class="hover_point_space"><a href="chapter3.php" class="chapters_point"><img src="images/chap3/chap3_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>04</span>
					</div>
					<div class="chapters_title">Green Village</div>
				</div>
				<div class="hover_point_space"><a href="chapter4.php" class="chapters_point"><img src="images/chap4/chap4_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>05</span>
					</div>
					<div class="chapters_title">Ankor</div>
				</div>
				<div class="hover_point_space"><a href="chapter5.php" class="chapters_point"><img src="images/chap5/chap5_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>06</span>
					</div>
					<div class="chapters_title">Floating Forest</div>
				</div>
				<div class="hover_point_space"><a href="chapter6.php" class="chapters_point"><img src="images/chap6/chap6_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>07</span>
					</div>
					<div class="chapters_title">Hôtel Del Salto</div>
				</div>
				<div class="hover_point_space"><a href="chapter7.php" class="chapters_point"><img src="images/chap7/chap7_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>08</span>
					</div>
					<div class="chapters_title">Orpheum Theater</div>
				</div>
				<div class="hover_point_space"><a href="chapter8.php" class="chapters_point"><img src="images/chap8/chap8_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>09</span>
					</div>
					<div class="chapters_title">Casino</div>
				</div>
				<div class="hover_point_space"><a href="chapter9.php" class="chapters_point"><img src="images/chap9/chap9_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content">
					<div class="chapters_number">
						Chapitre <span>10</span>
					</div>
					<div class="chapters_title">Orient Express</div>
				</div>
				<div class="hover_point_space"><a href="chapter10.php" class="chapters_point"><img src="images/chap10/chap10_small.jpg"></a></div>
			</div>

			<div class="chapters one eleventh one-up-mobile">
				<div class="chapters_content"></div>
				<div class="hover_point_space"><a <?php if(!isset($_COOKIE['Anakalypsi'])) echo 'href="#"'; else echo 'href="chapter11.php"' ?>href="#" class="chapters_secret" <?php if(!isset($_COOKIE['Anakalypsi'])) echo 'onclick="$(this).popup();"' ?>></a></div>
			</div>
		</div>

		<?php if(!isset($_COOKIE['Anakalypsi'])): ?>

			<div id="overlay"></div>

			<div class="box center">
				<h2>Accès au chapitre</h2>
				<div class="row gap-bottom">
					<div class="one">
						<form method="POST" action="chapters.php">
							<label for="password">Mot de passe</label>
							<input type="password" name="password" id="password">
							<input type="submit" value="Accéder">
						</form>
					</div>
				</div>
			</div>


		<?php endif; ?>
	</div>
</div>

<?php include_once("footer.php") ?>

<script type="text/javascript">
$(document).ready(function() {
	if (matchMedia) {
		var mq1 = window.matchMedia("(max-width: 1024px)");
		mq1.addListener(WidthChange);
		WidthChange(mq1);
	}

	$('.chapters_secret').on('click', function() {

	});

	$(document).mouseup(function(e) {
		if (!$(".box").is(e.target)
		&& $(".box").has(e.target).length === 0)
		{
			$(".box").css("display", "none");
			$("#overlay").css("display", "none");
		}
	});

	// media query change
	function WidthChange(mq1) {
		if (mq1.matches) {
			$("div.chapters_content").css("opacity", "1");
			//$(this).siblings("div.chapters_content").css("margin", "0px");
			$(this).siblings("div.chapters_point").css("margin-top", "0px");

			$("div.chapters_content").on('click', function() {
				window.location.href = $(this).siblings("div.hover_point_space").children(".chapters_point").attr("href");
			});

		}
		else {
			$("div.chapters_content").css("opacity", "0");
			//$("div.chapters_content").css("margin", "0px");
			$("div.chapters_point").css("margin-top", "0px");


			$(".hover_point_space").mouseover(function() {
				$(this).siblings("div.chapters_content").css("opacity", "1");
				//$(this).siblings("div.chapters_content").css("margin", "0");
			});

			$(".hover_point_space").mouseout(function() {
				$(this).siblings("div.chapters_content").css("opacity", "0");
				//$(this).siblings("div.chapters_content").css("margin", "0");
			});
		}
	}

	$.fn.popup = function() {
		$(".box").css("display", "block");
		$("#overlay").css("display", "block");
	};

});

</script>
