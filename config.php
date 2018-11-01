<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// header('Content-Type: text/html; charset=utf-8');

define("C_PATH", "controller/");
define("M_PATH", "model/");
define("V_PATH", "view/");
define("T_PATH", "templates/");

define("DBHOST", "127.0.0.1");
define("DBPORT", 3306);
define("DBUSER", "");
define("DBPASS", "");
define("DBNAME", "filmnet");
?>
