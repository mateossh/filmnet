<?php
require_once("model.php");

class actorsModel extends model {
	public function getActorsList() {
		return $this->select("genres_list");
	}
	
	public function getActorsOfMovie($id) {
		return $this->select("actors, actors_list", "actors_list.*, actors.role", "actors.actor_id = actors_list.id AND actors.movie_id = $id");
	}

	public function getSingleActor($id) {
		$actor = $this->select("actors_list", "*", "id = $id");
		$actor = $actor[0];
		return $actor;
	}
}

?>
