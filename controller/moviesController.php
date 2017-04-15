<?php
require("controller.php");

class moviesController extends controller {
	// x losowych filmów
	public function index() {
		// wczytuje model movies
		$model = $this->loadModel("movies");

		// zleca modelowi wybranie najlepszych i najnowszych filmów
		$topRated = $model->getTopRatedMovies(3);
		$mostRecent = $model->getMostRecentMovies(5);
		$genres = $model->getGenresList();

		// wczytuje widok movies
		$view = $this->loadView("movies");
		// przekazuje mu dane z modelu
		$view->set("topRated", $topRated);
		$view->set("mostRecent", $mostRecent);
		$view->set("genres", $genres);
		// wywołuje listę filmów
		$view->index();
	}

	public function singleMovie($id) {
		if (!isset($id)) {
			// jeśli nie ma id to wyświetla stronę notFound.php
			$view = $this->loadView("movies");
			$view->notFound();
		} else {
			$model = $this->loadModel("movies");
			// pobiera informacje o filmie
			$movieInfo = $model->getSingleMovieById($id);
			// wczytuje widok
			$view = $this->loadView("movies");
			// wysyła widokowi dane do wyświetlenia
			$view->set("movie", $movieInfo);
			// wczytuje widok jednego filmu
			$view->singleMovie();
		}
	}

	public function listMoviesByGenre($id) {
		if (!isset($id)) {
			// jeśli nie ma id to wyświetla stronę notFound.php
			$view = $this->loadView("movies");
			$view->notFound();
		} else {
			$model = $this->loadModel("movies");
			// pobiera informacje o filmie
			$movies = $model->getMoviesByGenre($id);
			// wczytuje widok
			$view = $this->loadView("movies");
			// wysyła widokowi dane do wyświetlenia
			$view->set("movies", $movies);
			// wczytuje widok jednego filmu
			$view->listMoviesByGenre();
		}
	}
}
?>