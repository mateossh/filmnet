<?php
require_once("view.php");

class genresView extends view {
	public function genresList() {
		$this->render("genresList");
	}
}

?>