<?php
require("view/view.php");

class moviesView extends view {
	public function index() {
		$this->render("mostRecentMovies");
		$this->render("topRatedMovies");
	}
	public function singleMovie() {
		$this->render("singleMovie");
	}
}

?>