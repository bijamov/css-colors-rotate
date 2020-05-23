<?php
include_once('db_connection.php');
include_once('class_validation.php');

class nb_users
{
	public $user_id;
	public $email;
	public $password;
	public $firstname;
	public $lastname;
	public $db_name;
	public $db_username;
	public $db_password;
	public $confirm_key;

	function login()
	{

		$query = dbs::$conns->query("SELECT id, password, status FROM nb_users WHERE email = '".$this->email."'");
		$user = mysqli_fetch_assoc($query);

		if (isset($user['password']) AND strtolower($this->password) === strtolower($user['password']))
		{
			if ($user['status'] == 1)
			{
				session_start();
				$_SESSION['user_type'] = 'user';
				$_SESSION['user_id'] = $user['id'];
				return 'login';
			}
			else
			{
				session_start();
				$_SESSION['user_type'] = 'unconfirmed';
				$_SESSION['user_id'] = $user['id'];
				return 'status';
			}
		}
		else
		{
			return 'failed';
		}
	}

	function registration()
	{
		$valid = new nb_validation();

		if($valid->email_check($this->email) === 'ok' AND $valid->password_hash_check($this->password) === 'ok' AND $valid->firstname_check($this->firstname) === 'ok' AND $valid->firstname_check($this->lastname) === 'ok')
		{
			//check if email already existing
			$query = dbs::$conns->query("SELECT email FROM nb_users WHERE email = '".$this->email."'");
			$row = mysqli_fetch_assoc($query);
			if (isset($row['email']) AND $row['email'] == $this->email)
			{
				return 'exist';
			}

			$this->db_name = 'n_'.$valid->generate_random_string(4).date('ymdhi').$valid->generate_random_string(4);
			$this->db_username = 'u_'.$valid->generate_random_string(4).date('ymdhi').$valid->generate_random_string(4);
			$this->db_password = $valid->generate_random_string(24);
			$this->confirm_key = $valid->generate_random_string(10).hash('sha256', $this->email).$valid->generate_random_string(10);

			$query = dbs::$conns->query("INSERT INTO nb_users (email, password, firstname, lastname, status, confirm_key, db_name, db_username, db_password) VALUES(
				'".$this->email."',
				'".$this->password."',
				'".$this->firstname."',
				'".$this->lastname."',
				'0',
				'".$this->confirm_key."',
				'".$this->db_name."',
				'".$this->db_username."',
				'".$this->db_password."'
				)");
			if ($query)
			{
				return 'singup';
			}
			else
			{
				return 'failed';
			}
		}
	}

	function get_user_info()
	{
		$query = dbs::$conns->query("SELECT * FROM nb_users WHERE id = '".$this->user_id."'");
		if($result = mysqli_fetch_assoc($query))
		{
			return $result;
		}
	}


}
?>
