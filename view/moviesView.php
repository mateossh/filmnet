<?php
require_once("view.php");

class moviesView extends view {
	public function index() {
		$this->render("mostRecentMovies");
		$this->render("topRatedMovies");
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

	public function searchListPage() {
		$this->render("searchListPage");
	}
}

?>