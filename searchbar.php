<?php

require("config.php");
require(C_PATH."pageController.php");

$movies = new pageController;
$movies->search($_POST['val']);

?>
