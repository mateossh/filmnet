<?php
require("model/model.php");

class moviesModel extends model {
	public function getTopRatedMovies($limit) {
		return $this->select("movies", "*", null, "RAND()", $limit);
	}

	public function getMostRecentMovies($limit) {
		return $this->select("movies", "*", null, "release_date DESC", $limit);
	}

	// bierze jeden film o podanym id
	public function getSingleMovieById($id) {
		// pobiera dane
		$genres = $this->select("genres, genres_list", "genres_list.id, genres_list.name", "genres.genre_id = genres_list.id AND genres.movie_id = $id");
		$movieInfo = $this->select("movies", "*", "id = $id");
		// tablicę z gatunkami dodaje do tej z informacjami o filmie
		$movieInfo = $movieInfo[0];
		$movieInfo["genres"] = $genres;
	
		return $movieInfo;
	}

	public function getGenresList() {
		return $this->select("genres_list");
	}

	public function getMoviesByGenre($id) {
		$genre = $this->select("genres_list", "*", "genres_list.id = $id");
		$movies = $this->select("genres, genres_list, movies", "movies.*", "genres.genre_id = genres_list.id AND genres.movie_id = movies.id AND genres_list.id = $id");
		$info = $genre;
		$info[1] = $movies;
		return $info;
	}
}

?>