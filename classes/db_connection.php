<?php
include_once('constants.php');

// Public class
class dbs {
 	public static $conns;

}

dbs::$conns  = new mysqli($sys_server, $sys_dbuser, $sys_dbpass, $sys_dbname);
mysqli_set_charset(dbs::$conns,"utf8");
?>
