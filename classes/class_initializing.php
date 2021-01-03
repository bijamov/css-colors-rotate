<?php
include_once('db_connection.php');
class nb_initializing
{

	public function check_db_status()
	{
		$query = dbs::$conns->query("SELECT db_status FROM nb_users WHERE id = '".$_SESSION['user_id']."'");
		$status = mysqli_fetch_assoc($query);
		if ($status = 'Y')
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function get_user_dbname()
	{
		if (isset($_SESSION['user_id']) AND $_SESSION['user_id'] != '')
		{
			$query = dbs::$conns->query("SELECT * FROM nb_users WHERE id = '".$_SESSION['user_id']."'");
			$user = mysqli_fetch_assoc($query);

			if (isset($user['db_name']) AND $user['db_name'] != '' AND $user['db_username'] != '' AND $user['db_password'] != '')
			{

				return $user;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public function create_user_database()
	{
		// $user = $this->get_user_dbname();

		
		// if ($user)
		// {
		// 	$db_name = $user['db_name'];
		// 	$db_username = $user['db_username'];
		// 	$db_password = $user['db_password'];
		// }
		// else
		// {
		// 	return false;
		// }

		//CREATE USER, DATABASE AND GRANT PRIVILEGES
		// $query = dbs::$conns->query("CREATE DATABASE ".$db_name."");
		// $query = dbs::$conns->query("CREATE USER '".$db_username."'@'%' IDENTIFIED BY '".$db_password."'");
		// $query = dbs::$conns->query("CREATE USER '".$db_username."'@'localhost' IDENTIFIED BY '".$db_password."'");

		// $query = dbs::$conns->query("GRANT USAGE ON *.* TO '".$db_username."'@localhost IDENTIFIED BY '".$db_password."'");
		// $query = dbs::$conns->query("GRANT ALL privileges ON `".$db_name."`.* TO '".$db_username."'@localhost");
		// $query = dbs::$conns->query("FLUSH PRIVILEGES");

		// if ($query)
		// {
		// 	$query = dbs::$conns->query("UPDATE nb_users SET db_status = 'Y' WHERE id = '".$_SESSION['user_id']."'");
		// }
		// else
		// {
		// 	return false;
		// }


		// $conn_tmp  = new mysqli('localhost', $db_username, $db_password, $db_name);

		// //CREATE DEFAULT TABLES
		// $query = $conn_tmp->query("CREATE TABLE `nb_colors_original` ( `id` int(255) NOT NULL, `repetition` int(255) DEFAULT NULL, `hex` varchar(6) DEFAULT NULL, `new_hex` varchar(6) NOT NULL, `rgb_r` int(3) DEFAULT NULL, `rgb_g` int(3) DEFAULT NULL, `rgb_b` int(3) DEFAULT NULL, `hsl_h` int(3) DEFAULT NULL, `hsl_s` int(3) DEFAULT NULL, `hsl_l` int(3) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		// $query = $conn_tmp->query("CREATE TABLE `nb_colors_position` ( `id` int(255) NOT NULL, `string` varchar(50) DEFAULT NULL, `file` text NOT NULL, `position` int(7) UNSIGNED ZEROFILL DEFAULT NULL, `model` int(1) DEFAULT NULL COMMENT '1=HEX | 2=RGB | 3=RGBA | 4=HSL | 5=HSLA', `hex` varchar(6) DEFAULT NULL, `alpha` int(3) DEFAULT NULL, `new_hex` varchar(6) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		// $query = $conn_tmp->query("CREATE TABLE `nb_colors_work_tbl` ( `id` int(255) NOT NULL, `repetition` int(255) DEFAULT NULL, `hex` varchar(6) DEFAULT NULL, `new_hex` varchar(6) NOT NULL, `rgb_r` int(3) DEFAULT NULL, `rgb_g` int(3) DEFAULT NULL, `rgb_b` int(3) DEFAULT NULL, `hsl_h` int(3) DEFAULT NULL, `hsl_s` int(3) DEFAULT NULL, `hsl_l` int(3) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		// $query = $conn_tmp->query("CREATE TABLE `nb_selected_colors` ( `id` int(255) NOT NULL, `id_work_color` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		// $query = $conn_tmp->query("ALTER TABLE `nb_colors_original` ADD PRIMARY KEY (`id`);");

		// $query = $conn_tmp->query("ALTER TABLE `nb_colors_position` ADD PRIMARY KEY (`id`);");

		// $query = $conn_tmp->query("ALTER TABLE `nb_colors_work_tbl` ADD PRIMARY KEY (`id`);");

		// $query = $conn_tmp->query("ALTER TABLE `nb_selected_colors` ADD PRIMARY KEY (`id`);");

		// $query = $conn_tmp->query("ALTER TABLE `nb_colors_original` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;");

		// $query = $conn_tmp->query("ALTER TABLE `nb_colors_position` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;");

		// $query = $conn_tmp->query("ALTER TABLE `nb_colors_work_tbl` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;");

		// $query = $conn_tmp->query("ALTER TABLE `nb_selected_colors` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;");

		// $query = $conn_tmp->query("COMMIT;");
	}

	public function drop_user_and_database()
	{
		$user = $this->get_user_dbname();
		if ($user)
		{
			$db_name = $user['db_name'];
			$db_username = $user['db_username'];
			$db_password = $user['db_password'];
			$db_user = $user['id'];
		}
		else
		{
			return false;
		}

		$query = dbs::$conns->query("DELETE FROM nb_colors_original WHERE user = ".$db_user);
		$query = dbs::$conns->query("DELETE FROM nb_colors_position WHERE user = ".$db_user);
		$query = dbs::$conns->query("DELETE FROM nb_colors_work_tbl WHERE user = ".$db_user);
		$query = dbs::$conns->query("DELETE FROM nb_selected_colors WHERE user = ".$db_user);
		// $query = dbs::$conns->query("DROP DATABASE ".$db_name."");
		// $query = dbs::$conns->query("DROP USER '".$db_username."'@'%'");
		// $query = dbs::$conns->query("DROP USER '".$db_username."'@'localhost'");
	}

}

?>
