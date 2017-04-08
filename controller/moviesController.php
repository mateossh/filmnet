<?php
require("controller.php");

class moviesController extends controller {
	// x losowych filmów
	public function index() {
		// wczytuje model movies
		$model = $this->loadModel("movies");

		// zleca modelowi wybranie najlepszych i najnowszych filmów
		$topRated = $model->getTopRatedMovies(10);
		$mostRecent = $model->getMostRecentMovies(5);

		// wczytuje widok movies
		$view = $this->loadView("movies");
		// przekazuje mu dane z modelu
		$view->set("topRated", $topRated);
		$view->set("mostRecent", $mostRecent);
		// wywołuje listę filmów
		$view->index();
	}

	public function singleMovie($id) {
		if (!isset($id)) {
			$view = $this->loadView("movies");
			$view->notFound();
		} else {
			$model = $this->loadModel("movies");
			$data = $model->getSingleMovieById($id);
			$view = $this->loadView("movies");
			$view->set("movies", $data);
			$view->one();
		}
	}
}
?>