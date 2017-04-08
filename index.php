<?php
require("config.php");
require(C_PATH."moviesController.php");

$movie = new moviesController;
$action = isset($_GET['action']) ? $_GET['action'] : "index";
$task = isset($_GET['task']) ? $_GET['task'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FILMNET</title>
</head>
<body>
	<?php $movie->$action($task); ?>
</body>
</html>
