<?php
abstract class controller {
	public function redirect($url) {
		header("Location ".$url);
	}

	public function loadView($name) {
		$name = $name."View";
		$file = V_PATH.$name.".php";

		if (!is_file($file)) {
			die("Nie można wczytać widoku ".$name);
		} else {
			require_once($file);
			$object = new $name();
		}

		return $object;
	}

	public function loadModel($name) {
		$name = $name."Model";
		$file = M_PATH.$name.".php";
		if (!is_file($file)) {
			die("Nie można wczytać modelu ".$name);
		} else {
			require_once($file);
			$object = new $name();
		}

		return $object;
	}
}


?>