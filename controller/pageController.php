<?php
require_once("controller.php");

class pageController extends controller {
	// x losowych filmów
	public function index() {
		// wczytuje model movies
		$model = $this->loadModel("movies");
		// zleca modelowi wybranie najlepszych i najnowszych filmów
		$topRated = $model->getTopRatedMovies(9);
		$mostRecent = $model->getMostRecentMovies(9);

		// zleca modelowi gatunków wybranie wszystkich gatunków
		$genresModel = $this->loadModel("genres");
		$genres = $genresModel->getGenresList();

		// wczytuje widok movies
		$moviesView = $this->loadView("movies");
		$genresView = $this->loadView("genres");
		// przekazuje mu dane z modelu
		$moviesView->set("topRated", $topRated);
		$moviesView->set("mostRecent", $mostRecent);
		$genresView->set("genres", $genres);
		// wywołuje listę filmów
		$moviesView->index();
		$genresView->genresList();
	}

	public function singleMovie($id) {
		try {
			// jeśli nie ma wpisanego id to zwraca wyjątek
			if (is_null($id)) throw new Exception();
			// wczytuje model
			$moviesModel = $this->loadModel("movies");
			$movieInfo = $moviesModel->getSingleMovieById($id);
			$genresModel = $this->loadModel("genres");
			$genresInfo = $genresModel->getGenresOfMovie($id);
			$actorsModel = $this->loadModel("actors");
			$actorsInfo = $actorsModel->getActorsOfMovie($id);
			// jeśli wynik = null to zwraca wyjątek
			if (is_null($movieInfo)) throw new Exception();
			// wczytuje widok
			$view = $this->loadView("movies");
			// wysyła widokowi dane do wyświetlenia
			$view->set("movie", $movieInfo);
			$view->set("genres", $genresInfo);
			$view->set("actors", $actorsInfo);
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
			$moviesModel = $this->loadModel("movies");
			$movies = $moviesModel->getMoviesByGenre($id);
			if (!$movies) throw new Exception();

			$genresModel = $this->loadModel("genres");
			$genre = $genresModel->getGenreInfo($id);
			// wczytuje widok
			$view = $this->loadView("movies");
			// wysyła widokowi dane do wyświetlenia
			$view->set("movies", $movies);
			$view->set("genre", $genre);
			// wczytuje widok jednego filmu
			$view->listMoviesByGenre();
		} catch (Exception $e) {
			$view = $this->loadView("movies");
			$view->set("message", "Nie znaleziono filmów w tej kategorii :>");
			$view->notFound();
		}
	}

	public function search($name) {
		$model = $this->loadModel("movies");
		$data = $model->getMoviesByName($name, 5);

		$view = $this->loadView("movies");
		$view->set("movies", $data);
		$view->searchList();
	}

	public function searchList($name) {
		$model = $this->loadModel("movies");
		$data = $model->getMoviesByName($name, null);

		$view = $this->loadView("movies");
		$view->set("movies", $data);
		$view->searchListPage();
	}

	public function singleActor($id) {
		try {
			// jeśli nie ma wpisanego id to zwraca wyjątek
			if (is_null($id)) throw new Exception();
			// wczytuje model
			$actorsModel = $this->loadModel("actors");
			$actorInfo = $actorsModel->getSingleActor($id);
			$moviesModel = $this->loadModel("movies");
			$moviesInfo = $moviesModel->getMoviesOfActor($id);
			// jeśli wynik = null to zwraca wyjątek
			if (is_null($actorInfo)) throw new Exception();
			// wczytuje widok
			$view = $this->loadView("actors");
			// wysyła widokowi dane do wyświetlenia
			$view->set("movies", $moviesInfo);
			$view->set("actor", $actorInfo);
			// wczytuje widok jednego filmu
			$view->singleActor();			
		} catch(Exception $e) {
			$view = $this->loadView("actors");
			$view->set("message", "Nie znaleziono aktora o tym id :>");
			$view->notFound();
		}
	}
}
?>