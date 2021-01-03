<?php
include_once('classes/class_users.php');
include_once('classes/constants.php');
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./lib/sweetalert2/src/sweetalert2.scss">
	<title>Welcome</title>
</head>

<body>
	<?php include('./header.php'); ?>

	
	<?php 
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	}
		if (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'user')
		{
			header('Location: '.$site_url);
		}
		elseif (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'status')
		{ 
			if (isset($_GET['key']) AND $_GET['key'] != '')
				{
					$login = new nb_users();
					$login->confirm_key = $_GET['key'];
					$login->activation();
					unset ($_SESSION["user_type"]);
					unset ($_SESSION["user_id"]);
					header('Location: login.php');
				}
			?>
			<div class="d-flex justify-content-center px-5">
				<div class="col-12 col-md-8 col-xl-6 pt-5">
					<h2 class="text-primary">Confirmation message has been sent.</h2>
					<h4 class="text-secondary">Please check your email to activate your account</h4>

					<form class="pt-3">
						<a class="btn btn-secondary" data-toggle="collapse" href="#resend_mail" role="button" aria-expanded="false" aria-controls="resend_mail">Resend email</a>


						<div class="collapse" id="resend_mail">
						  <div class="card card-body">
						    <div class="form-group">
						    	<input type="email" class="form-control" id="comf_email_field" placeholder="Enter email">
						    </div>
						    <button id="comfirm_mail_btn" type="button" class="btn btn-primary float-right">Resend confirmation E-mail</button>
						  </div>
						</div>




					</form>
				</div>
			</div>
			<?php
		}

		elseif (isset($_GET['key']) AND $_GET['key'] != '')
		{
				// $login = new nb_users();
				// $login->confirm_key = $_GET['key'];
				// $login->activation();
				// unset ($_SESSION["user_type"]);
				// unset ($_SESSION["user_id"]);
				header('Location: login.php');
		}
		else
		{
			header('Location: login.php');
		}
	?>




	<?php include('./footer.php'); ?>
</body>

<script src="./lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="./lib/popper-1.16.0/popper.min.js"></script>
<script src="./lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./lib/sweetalert2/src/sweetalert2.min.js"></script>
<script src="./front/js/login_page.js"></script>
<script src="./front/js/index_page.js"></script>


</html>