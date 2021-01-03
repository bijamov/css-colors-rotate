<?php
include_once('db_connection.php');
include_once('class_validation.php');
include_once('class_initializing.php');
include_once('class_mail.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


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

	function mail_to_id()
	{
		$query = dbs::$conns->query("SELECT id FROM nb_users WHERE email = '".$this->email."'");
		if($user = mysqli_fetch_assoc($query))
		{
			return $user['id'];
		}
		else
		{
			return false;
		}
	}	

	function login()
	{

		$query = dbs::$conns->query("SELECT id, password, status FROM nb_users WHERE email = '".$this->email."'");
		$user = mysqli_fetch_assoc($query);

		if (isset($user['password']) AND strtolower($this->password) === strtolower($user['password']))
		{
			if ($user['status'] == 1)
			{
				if (session_status() == PHP_SESSION_NONE) {
				    session_start();
				}
				$_SESSION['user_type'] = 'user';
				$_SESSION['user_id'] = $user['id'];


				$init = new nb_initializing();

				if($init->check_db_status())
				{
					$init->create_user_database();
				}

				return 'login';
			}
			else
			{
				if (session_status() == PHP_SESSION_NONE) {
				    session_start();
				}
				$_SESSION['user_type'] = 'status';
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
		$timestamp = date('Y-m-d H:i:s');
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

			$query = dbs::$conns->query("INSERT INTO nb_users (email, password, firstname, lastname, status, confirm_key, last_mail_sended, db_name, db_username, db_password) VALUES(
				'".$this->email."',
				'".$this->password."',
				'".$this->firstname."',
				'".$this->lastname."',
				'0',
				'".$this->confirm_key."',
				'".$timestamp."',
				'".$this->db_name."',
				'".$this->db_username."',
				'".$this->db_password."'
				)");
			if ($query)
			{
				$this->send_confirmation_mail();
				if (session_status() == PHP_SESSION_NONE) {
				    session_start();
				}
				$query = dbs::$conns->query("SELECT id, status FROM nb_users WHERE email = '".$this->email."'");
				$user = mysqli_fetch_assoc($query);
				$_SESSION['user_type'] = 'status';
				$_SESSION['user_id'] = $user['id'];
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

	function logout()
	{
		$init = new nb_initializing();
		$init->drop_user_and_database();

		if(session_unset())
		{
			return true;
		}
	}

	function last_mail_sended()
	{
		$time = date('Y-m-d H:i:s', strtotime('-1 minutes'));
		$query = dbs::$conns->query("SELECT last_mail_sended FROM nb_users WHERE id = '".$this->user_id."'");
		if($result = mysqli_fetch_assoc($query) AND $result['last_mail_sended'] < $time)
		{
			return true;
		}
		else
		{
			return true;
		}
	}

	function activation()
	{

			$query = dbs::$conns->query("UPDATE nb_users SET status = '1' WHERE confirm_key = '".$this->confirm_key."'");

			$query = dbs::$conns->query("SELECT id, status FROM nb_users WHERE confirm_key = '".$this->confirm_key."'");
			$user = mysqli_fetch_assoc($query);

			if (session_status() == PHP_SESSION_NONE) {
			    session_start();
			}

			if ($user['status'] == '1') {
				$_SESSION['user_type'] = 'user';
				$_SESSION['user_id'] = $user['id'];
			}
	}

	function send_confirmation_mail()
	{
		include('constants.php');


		$my_subj= $site_name.' - Activate Your Account';

		$my_body='
		<style>
			body
			{
			font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
			padding: 0px;
			margin: 0px;
			}
			#login
			{
				padding: 10px;
				background-color: #28a745;
				color: #ffffff;
				text-decoration: none;
				font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
				font-weight: 600;
			}
			.link
			{
				color: #000000;
				text-decoration: none;
				font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
				font-size: 0.8rem;
			}
		</style>


		<div style="text-align: center; background-color: #007bff; color: white; padding-top: 20px; padding-bottom: 20px;">
			<h1>Welcome to '.$site_name.'</h1>
			<h3>Thank you for joining.<br>Please follow the link bellow to complete your registration</h3>
		</div>


		<div style="text-align: center; padding-top: 50px; padding-bottom: 50px;">
			<a id="login" href="https://bijamov.me/cssvce/activation.php?&key='.$this->confirm_key.'">LOG IN TO YOUR ACCOUNT</a>
		</div>

		<div style="text-align: center; padding-top: 20px; padding-bottom: 20px; background-color: #f6f8fa">
			<p>Contact us for more information, consult or report a bug</p>
			<a class="link" href="'.$site_url.'">bijamov.me/cssvce</a>
			-
			<a class="link" href="'.$site_mail.'">cssvce@bijamov.me</a>
		</div>';

		smtp_mail($this->email, $my_subj, $my_body);
	}

	function send_confirmation_mail_again()
	{
		if (isset($SESSION['user_id']))
		{
			$query = dbs::$conns->query("SELECT confirm_key, email FROM nb_users WHERE id = '".$_SESSION['user_id']."'");
			$confirm_key = mysqli_fetch_assoc($query);
			

			if ($this->email == $confirm_key['email'])
			{
				$this->confirm_key = $confirm_key['confirm_key'];
			}
			else
			{
				return false;
			}
		}


		$id = $this->mail_to_id();
		if ($id == false OR $id == '')
		{
			return false;
		}
		else
		{
			include('constants.php');
			$my_subj= $site_name.' - Activate Your Account';

			$my_body='
			<style>
				body
				{
				font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
				padding: 0px;
				margin: 0px;
				}
				#login
				{
					padding: 10px;
					background-color: #28a745;
					color: #ffffff;
					text-decoration: none;
					font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
					font-weight: 600;
				}
				.link
				{
					color: #000000;
					text-decoration: none;
					font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
					font-size: 0.8rem;
				}
			</style>


			<div style="text-align: center; background-color: #007bff; color: white; padding-top: 20px; padding-bottom: 20px;">
				<h1>Welcome to '.$site_name.'</h1>
				<h3>Thank you for joining.<br>Please follow the link bellow to complete your registration</h3>
			</div>


			<div style="text-align: center; padding-top: 50px; padding-bottom: 50px;">
				<a id="login" href="https://bijamov.me/cssvce/activation.php?&key='.$this->confirm_key.'">LOG IN TO YOUR ACCOUNT</a>
			</div>

			<div style="text-align: center; padding-top: 20px; padding-bottom: 20px; background-color: #f6f8fa">
				<p>Contact us for more information, consult or report a bug</p>
				<a class="link" href="'.$site_url.'">bijamov.me/cssvce</a>
				-
				<a class="link" href="'.$site_mail.'">cssvce@bijamov.me</a>
			</div>';

			if ($this->last_mail_sended())
			{
				smtp_mail($this->email, $my_subj, $my_body);
				return true;
			}
			
		}
	}


}

?>
