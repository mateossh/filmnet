<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//header('Content-Type: text/html; charset=utf-8');

define("C_PATH", "controller/");
define("M_PATH", "model/");
define("V_PATH", "view/");
define("T_PATH", "templates/");

define("DBHOST", "localhost");
define("DBPORT", 3306);
define("DBUSER", "filmnet");
define("DBPASS", "ENTER-YOUR-PASSWORD-HERE");
define("DBNAME", "filmnet");
?>
