<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./lib/sweetalert2/src/sweetalert2.scss">
	<link rel="stylesheet" type="text/css" href="./front/css/style.css">
	<title>Welcome</title>
</head>

<body>

	<?php include('./header.php'); ?>

	<div class="container-fluid">
		<div class="row d-flex">
			
			<div class="col-12 px-0">
				<div id="nb_bg_svg"></div>




				<!-- FORM ABSOLUTE POSITION -->
				<form id="css_file_form" class="nb_up_file" method="post" enctype="multipart/form-data" action="./initializing.php">
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="css_file" name="css_file">
						<label class="custom-file-label" for="css_file">Choose file</label>
					</div>
				</form>
			</div>

		</div>
	</div>


	<?php include('./footer.php'); ?>

</body>

<script src="./lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="./lib/popper-1.16.0/popper.min.js"></script>
<script src="./lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./lib/sweetalert2/src/sweetalert2.min.js"></script>
<script src="./front/js/login_page.js"></script>
<script src="./front/js/index_page.js"></script>

</html>

