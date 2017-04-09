<?php
abstract class view {

	public function render($name) {
		$file = T_PATH.$name.".php";
		if (!is_file($file)) {
			die("Nie można wczytać szablonu");
		} else {
			require $file;
		}
	}

	public function set($var, $value) {
		$this->{$var} = $value;
	}

	public function get($var) {
		return $this->{$var};
	}

	public function notFound(){
		$this->render("notFound");
	}
}

?>