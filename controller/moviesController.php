<?php
require("controller.php");

class moviesController extends controller {
	// x losowych filmów
	public function index() {
		// wczytuje model movies
		$model = $this->loadModel("movies");

		// zleca modelowi wybranie najlepszych i najnowszych filmów
		$topRated = $model->getTopRatedMovies(9);
		$mostRecent = $model->getMostRecentMovies(9);
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
		try {
			// jeśli nie ma wpisanego id to zwraca wyjątek
			if (is_null($id)) throw new Exception();
			// wczytuje model
			$model = $this->loadModel("movies");
			// pobiera informacje o filmie
			$movieInfo = $model->getSingleMovieById($id);
			// jeśli wynik = null to zwraca wyjątek
			if (is_null($movieInfo)) throw new Exception();
			// wczytuje widok
			$view = $this->loadView("movies");
			// wysyła widokowi dane do wyświetlenia
			$view->set("movie", $movieInfo);
			// wczytuje widok jednego filmu
			$view->singleMovie();			
		} catch(Exception $e) {
			$view = $this->loadView("movies");
			$view->set("message", "Nie znaleziono filmu o tym id :>");
			$view->notFound();
		}
	}

	public function listMoviesByGenre($id) {
		try {
			if (!$id) throw new Exception();
			// wczytuje model
			$model = $this->loadModel("movies");
			// pobiera informacje o filmie
			$movies = $model->getMoviesByGenre($id);
			if (!$movies) throw new Exception();
			// wczytuje widok
			$view = $this->loadView("movies");
			// wysyła widokowi dane do wyświetlenia
			$view->set("movies", $movies);
			// wczytuje widok jednego filmu
			$view->listMoviesByGenre();
		} catch (Exception $e) {
			$view = $this->loadView("movies");
			$view->set("message", "Nie znaleziono filmów o tym gatunku");
			$view->notFound();
		}
	}

	public function search($name) {
		$model = $this->loadModel("movies");
		$data = $model->getMoviesByName($name);

		$view = $this->loadView("movies");
		$view->set("movies", $data);
		$view->searchList();
	}
}
?>