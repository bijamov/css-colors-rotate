<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<title>Password reset</title>
</head>

<body>

	<?php include('./header.php'); ?>

	<div class="row justify-content-center pt-5" style="width: 100%; height: 250px;">
		<div class="col-12 col-sm-11 col-md-7 col-lg-5 col-xl-4">
			<form>
				<div class="form-group">
					<p class="alert alert-primary"><a href="./index.php">back to home</a><br/ >To recovery your password enter your email address</p>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="forget_mail_field" aria-describedby="emailHelp" placeholder="Your e-mail address">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Submit</button>
			</form>
		</div>
	</div>

	<?php include('./footer.php'); ?>
</body>

<script src="./lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="./lib/popper-1.16.0/popper.min.js"></script>
<script src="./lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./front/js/login_page.js"></script>
<script src="./front/js/index_page.js"></script>

</html>

<?php



?>
