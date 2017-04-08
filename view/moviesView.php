<?php
require("view/view.php");

class moviesView extends view {
	public function index() {
		$this->render("mostRecentMovies");
		$this->render("topRatedMovies");
	}
	public function one() {
		$this->render("singleMovie");
	}
}

?>