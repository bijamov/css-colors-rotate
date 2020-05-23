<?php
include_once('db_connection.php');
session_start();

if (isset($_SESSION['user_id']))
{
	$id = $_SESSION['user_id'];

	$query = dbs::$conns->query("SELECT db_name, db_username, db_password FROM nb_users WHERE id = '".$id."'");
	$user = mysqli_fetch_assoc($query);

	$servername = 'localhost';
	$username = $user['db_username'];
	$password = $user['db_password'];
	$database = $user['db_name'];

	// Public class
	class db {
	 	public static $conn;
	}
	db::$conn  = new mysqli($servername, $username, $password, $database);
	mysqli_set_charset(db::$conn,"utf8");
}



?>
