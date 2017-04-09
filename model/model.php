<?php
abstract class model {
	protected $db;

	function __construct() {
		$this->db = @new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
		if ($this->db->connect_errno != 0) {
			die("Nie udało się połączyć z bazą danych, błąd ".$this->db->connect_errno);
		}
	}

	public function select($from, $select = "*", $where = NULL, $order = NULL, $limit = NULL) {
		$query="SELECT ".$select.' FROM '.$from;

		if ($where != NULL)
			$query = $query." WHERE " .$where;
		if ($order != NULL)
			$query = $query." ORDER BY ".$order;
		if ($limit != NULL)
			$query = $query." LIMIT ".$limit;

		$select = $this->db->query($query);
		foreach ($select as $row) {
            $data[]=$row;
        }

	    return $data;
	}
}
?>