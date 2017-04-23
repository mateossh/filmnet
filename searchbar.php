<?php

require("config.php");
require(C_PATH."moviesController.php");

$movies = new moviesController;
$movies->search($_POST['val']);

?>
