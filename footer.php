	<script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/groundwork.all.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<?php 
		if($title == "La carte") {
			echo '<script src="//cdnjs.cloudflare.com/ajax/libs/d3/3.5.3/d3.min.js"></script>';
			echo '<script src="//cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>';
			echo '<script type="text/javascript" src="js/datamaps.js"></script>';
			echo '<script type="text/javascript" src="js/map.js"></script>';
		}
	?>
</body>
</html>