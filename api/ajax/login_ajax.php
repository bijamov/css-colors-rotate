<?php
include_once('../../classes/db_connection.php');
include_once('../../classes/class_validation.php');
include_once('../../classes/class_users.php');


switch ($_POST['m']) {
	case '1':
		check_login_fields();
		break;
	case '2':
		login();
		break;
	case '3':
		check_registration_fields();
		break;
	case '4':
		registration();
		break;
	case '5':
		logout();
		break;
	case '6':
		send_comf_mail();
		break;

}

function check_login_fields() //m = 1
{
	$error = 0;
	$html = '';
	$validation = new nb_validation();

	if ($validation->email_check($_POST['email']) != 'ok')
	{
		$error = 1;
		$html .= '<div class="alert alert-danger" role="alert">Your email address is invalid</div>';
	}

	if ($validation->password_check($_POST['password']) != 'ok')
	{
		$error = 1;
		$html .= '<div class="alert alert-danger" role="alert">Your password is invalid</div>';
	}

	if ($error != 0)
	{
		echo $html;
	}
	else
	{
		echo 'ok';
	}
}

function login() //m = 2
{
	$login = new nb_users();

	$login->email = $_POST['email'];
	$login->password = hash('sha256', $_POST['password']);

	$log_status = $login->login();
	if ($log_status == 'login')
	{
		echo('ok');
	}
	else if($log_status == 'status')
	{
		echo('status');
	}
	else if($log_status == 'failed')
	{
		echo('<div class="alert alert-danger" role="alert">Your email or password is invalid</div>');
	}

}


function check_registration_fields() //m = 3
{
	$error = 0;
	$html = '';
	$validation = new nb_validation();


	if ($validation->firstname_check($_POST['firstname']) != 'ok')
	{
		$error = 1;
		$html .= '<div class="alert alert-danger" role="alert">Your First name is invalid</div>';
	}
	if ($validation->firstname_check($_POST['lastname']) != 'ok')
	{
		$error = 1;
		$html .= '<div class="alert alert-danger" role="alert">Your Last name is invalid</div>';
	}
	if ($validation->password_check($_POST['password']) != 'ok')
	{
		if ($_POST['password'] != $_POST['password_con'])
		{
			$error = 1;
			$html .= '<div class="alert alert-danger" role="alert">Password doesn\'t match</div>';
		}
		else
		{
			$error = 1;
			$html .= '<div class="alert alert-danger" role="alert">your password must be at least 8 characters and include number and character</div>';
		}

	}
	if ($validation->email_check($_POST['email']) != 'ok')
	{
		$error = 1;
		$html .= '<div class="alert alert-danger" role="alert">Your email address is invalid</div>';
	}

	if ($error != 0)
	{
		echo $html;
	}
	else
	{
		echo 'ok';
	}
}

function registration() //m = 4
{
	$registration = new nb_users();

	$registration->email = $_POST['email'];
	$registration->password = hash('sha256', $_POST['password']);
	$registration->firstname = $_POST['firstname'];
	$registration->lastname = $_POST['lastname'];


	$log_status = $registration->registration();
	if ($log_status == 'singup')
	{
		echo('ok');
	}
	else if($log_status == 'exist')
	{
		echo('<div class="alert alert-danger" role="alert">User already exist</div>');
	}
	else
	{
		echo('<div class="alert alert-danger" role="alert">Something\'s going wrong please try later</div>');
	}
}

function logout() //m = 5
{
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	$login = new nb_users();
	
	if($login->logout())
	{
		echo "ok";
	}
}

function send_comf_mail() //m = 6
{
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}

	$login = new nb_users();
	$login->email = $_POST['email'];
	
	if($login->send_confirmation_mail_again())
	{
		echo "ok";
	}

}






?>
