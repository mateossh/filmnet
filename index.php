<?php
require("config.php");
require(C_PATH."moviesController.php");

$movie = new moviesController;
$action = isset($_GET['action']) ? $_GET['action'] : "index";
$task = isset($_GET['task']) ? $_GET['task'] : null;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900&amp;subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="stylesheets/style.css" />
	<link rel="stylesheet" href="stylesheets/slick.css"  />
	<!-- <link rel="stylesheet" href="stylesheets/owl.carousel.min.css"  /> -->
	<!-- <link rel="stylesheet" href="stylesheets/owl.theme.default.min.css"  /> -->

	<title>FilmNet</title>
</head>
<body>
	<header class="Header">
		<h1 class="Header__Logo"><a href="#">FilmNet</a></h1>
		<nav class="Header__Menu Menu">
			<div class="Searchbar">
				<input class="Searchbar__Input" type="text" placeholder="Szukaj..." />
				<span class="Searchbar__Icon"></span>
				<div class="Searchbar__Results Results"></div>
				<div class="Clearfix"></div>
			</div>
		</nav>
	</header>


	<main class="Content">
		<?php $movie->$action($task); ?>
	</main>

	<footer class="Footer">
		&copy; Copyright 2017 - FilmNet
	</footer>

	<script src="scripts/jquery-3.2.0.min.js"></script>
	<script src="scripts/slick.min.js"></script>
	<!-- <script src="scripts/owl.carousel.min.js"></script> -->
	<script src="scripts/main.js"></script>
</body>
</html>
