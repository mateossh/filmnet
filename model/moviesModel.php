<?php
require_once("model/model.php");

class moviesModel extends model {
	public function getTopRatedMovies($limit) {
		return $this->select("movies", "*", "id IN (13, 14, 6, 8, 9, 10, 23)", null, $limit);
	}

	public function getMostRecentMovies($limit) {
		return $this->select("movies", "*", null, "release_date DESC", $limit);
	}

	// bierze jeden film o podanym id
	public function getSingleMovieById($id) {
		// pobiera dane
		$movieInfo = $this->select("movies", "*", "id = $id");
		// tablicę z gatunkami dodaje do tej z informacjami o filmie
		$movieInfo = $movieInfo[0];
		return $movieInfo;
	}

	public function getGenresList() {
		return $this->select("genres_list");
	}

	public function getMoviesByGenre($id) {
		$movies = $this->select("genres, genres_list, movies", "movies.*", "genres.genre_id = genres_list.id AND genres.movie_id = movies.id AND genres_list.id = $id");
		$movies[1] = $movies;
		return $movies;
	}

	public function getMoviesByName($name, $limit) {
		$movies = $this->select("movies", "*", "title COLLATE utf8_polish_ci LIKE '%$name%'", null, $limit);
		return $movies;
	}

	public function getMoviesOfActor($id) {
		$movies = $this->select("movies, actors", "movies.*, actors.role", "actors.movie_id = movies.id AND actors.actor_id = $id", "movies.release_date DESC");
		return $movies;
	}
}

?>
