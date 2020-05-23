<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "zemfira_system";

// Public class
class dbs {
 	public static $conns;

}
dbs::$conns  = new mysqli($servername, $username, $password, $database);
mysqli_set_charset(dbs::$conns,"utf8");
?>
