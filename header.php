<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<!-- Modernizr -->
	<script src="js/libs/modernizr-2.6.2.min.js"></script>
	<!-- framework css -->
	<!--[if gt IE 9]><!-->
	<link type="text/css" rel="stylesheet" href="css/groundwork/groundwork.css">
	<!--<![endif]-->
	<!--[if lte IE 9]>
	<link type="text/css" rel="stylesheet" href="css/groundwork/groundwork-core.css">
	<link type="text/css" rel="stylesheet" href="css/groundwork/groundwork-type.css">
	<link type="text/css" rel="stylesheet" href="css/groundwork/groundwork-ui.css">
	<link type="text/css" rel="stylesheet" href="css/groundwork/groundwork-anim.css">
	<link type="text/css" rel="stylesheet" href="css/groundwork/groundwork-ie.css">
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/print.css" media="print"> -->
	<?php
		if($title == "Anakálypsi") {
			echo '<link rel="stylesheet" type="text/css" href="css/home.css">';
		}
		if($title == "La carte") {
			echo '<link rel="stylesheet" type="text/css" href="css/map.css">';
		}
		if($title == "Les chapitres") {
			echo '<link rel="stylesheet" type="text/css" href="css/chaptersSummary.css">';
		}
		if(strpos($title, "chapitre")== true) {
			echo '<link rel="stylesheet" type="text/css" href="css/chapter.css">';
		}
	?>
</head>
<body>
