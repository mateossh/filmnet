<?php

require_once("config.php");
require_once(C_PATH."pageController.php");

$movies = new pageController;
$movies->search($_POST['val']);

?>
