<?php
require("view/view.php");

class moviesView extends view {
	public function index() {
		$this->render("mostRecentMovies");
		$this->render("topRatedMovies");
		$this->render("genresList");
	}
	public function singleMovie() {
		$this->render("singleMovie");
	}

	public function listMoviesByGenre() {
		$this->render("moviesOfGenre");
	}

	public function searchList() {
		$this->render("searchList");
	}
}

?>