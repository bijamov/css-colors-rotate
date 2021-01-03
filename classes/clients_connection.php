<?php
include_once('db_connection.php');
include_once('constants.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['user_id']))
{
	$id = $_SESSION['user_id'];

	$query = dbs::$conns->query("SELECT * FROM nb_users WHERE id = '".$id."'");
	$user = mysqli_fetch_assoc($query);

	$servername = $sys_server;
	$username = $sys_dbuser;
	$password = $sys_dbpass;
	$database = $sys_dbname;


	// Public class
	class db {
	 	public static $conn;
	}
	db::$conn  = new mysqli($servername, $username, $password, $database);
	mysqli_set_charset(db::$conn,"utf8");
}


?>
