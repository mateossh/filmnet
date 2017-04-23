<?php
require_once("view.php");

class actorsView extends view {
	public function singleActor() {
		$this->render("singleActor");
	}
}

?>