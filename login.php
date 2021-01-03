<!DOCTYPE html>
<html>

<?php 
include_once('classes/constants.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['user_type']) AND ($_SESSION['user_type'] == 'user' OR $_SESSION['user_type'] == 'status'))
{
	header('Location: '.$site_url);
}

 ?>

<head>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./lib/sweetalert2/src/sweetalert2.scss">
	<link rel="stylesheet" type="text/css" href="./front/css/style.css">
	<title>Welcome</title>
</head>

<body>

	<?php include('./header.php'); ?>

	<div class="row" style="width: 100%; height: 250px;">
	</div>

	<?php include('./footer.php'); ?>

</body>

<script src="./lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="./lib/popper-1.16.0/popper.min.js"></script>
<script src="./lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./lib/sweetalert2/src/sweetalert2.min.js"></script>
<script src="./front/js/login_page.js"></script>
<script src="./front/js/index_page.js"></script>
<script>

		$('#login_modal').modal();

</script>

</html>

