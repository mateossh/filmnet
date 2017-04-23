<?php
require_once("model.php");

class genresModel extends model {
	public function getGenresList() {
		return $this->select("genres_list");
	}
	
	public function getGenresOfMovie($id) {
		return $this->select("genres, genres_list", "genres_list.id, genres_list.name", "genres.genre_id = genres_list.id AND genres.movie_id = $id");
	}

	public function getGenreInfo($id) {
		$genre = $this->select("genres_list", "*", "id = $id");
		$genre = $genre[0];
		return $genre;
	}
}

?>
