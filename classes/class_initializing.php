<?php
include_once('clients_connection.php');
class nb_initializing
{
	function create_user_database($dbname)
	{
		$query = dbs::$conns->query("CREATE DATABASE '".$dbname."'");

		$query = dbs::$conns->query("CREATE TABLE `nb_colors_original` ( `id` int(255) NOT NULL, `repetition` int(255) DEFAULT NULL, `hex` varchar(6) DEFAULT NULL, `new_hex` varchar(6) NOT NULL, `rgb_r` int(3) DEFAULT NULL, `rgb_g` int(3) DEFAULT NULL, `rgb_b` int(3) DEFAULT NULL, `hsl_h` int(3) DEFAULT NULL, `hsl_s` int(3) DEFAULT NULL, `hsl_l` int(3) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		$query = dbs::$conns->query("CREATE TABLE `nb_colors_position` ( `id` int(255) NOT NULL, `string` varchar(50) DEFAULT NULL, `file` text NOT NULL, `position` int(7) UNSIGNED ZEROFILL DEFAULT NULL, `model` int(1) DEFAULT NULL COMMENT '1=HEX | 2=RGB | 3=RGBA | 4=HSL | 5=HSLA', `hex` varchar(6) DEFAULT NULL, `alpha` int(3) DEFAULT NULL, `new_hex` varchar(6) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		$query = dbs::$conns->query("CREATE TABLE `nb_colors_work_tbl` ( `id` int(255) NOT NULL, `repetition` int(255) DEFAULT NULL, `hex` varchar(6) DEFAULT NULL, `new_hex` varchar(6) NOT NULL, `rgb_r` int(3) DEFAULT NULL, `rgb_g` int(3) DEFAULT NULL, `rgb_b` int(3) DEFAULT NULL, `hsl_h` int(3) DEFAULT NULL, `hsl_s` int(3) DEFAULT NULL, `hsl_l` int(3) DEFAULT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		$query = dbs::$conns->query("CREATE TABLE `nb_selected_colors` ( `id` int(255) NOT NULL, `id_work_color` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

		$query = dbs::$conns->query("ALTER TABLE `nb_colors_original` ADD PRIMARY KEY (`id`);");

		$query = dbs::$conns->query("ALTER TABLE `nb_colors_position` ADD PRIMARY KEY (`id`);");

		$query = dbs::$conns->query("ALTER TABLE `nb_colors_work_tbl` ADD PRIMARY KEY (`id`);");

		$query = dbs::$conns->query("ALTER TABLE `nb_selected_colors` ADD PRIMARY KEY (`id`);");

		$query = dbs::$conns->query("ALTER TABLE `nb_colors_original` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;");

		$query = dbs::$conns->query("ALTER TABLE `nb_colors_position` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;");

		$query = dbs::$conns->query("ALTER TABLE `nb_colors_work_tbl` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;");

		$query = dbs::$conns->query("ALTER TABLE `nb_selected_colors` MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;COMMIT;");

	}
}


?>
