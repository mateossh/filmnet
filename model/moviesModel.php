<?php
require("model/model.php");

class moviesModel extends model {
	public function getTopRatedMovies($limit) {
		return $this->select("movies", "*", null, "RAND()", $limit);
	}

	public function getMostRecentMovies($limit) {
		return $this->select("movies", "*", null, "RAND()", $limit);
	}

	// bierze jeden film o podanym id
	public function getSingleMovieById($id) {
		return $this->select("movies", "*", "id = $id", null, null);
	}
}

?>