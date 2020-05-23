<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="./lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
<title>Ready to start</title>
</head>

<body>

	<?php include('./header.php'); ?>

  <?php

  //USER
  if (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'user')
  {
    print_r($_FILES['css_file']);
  }
  //UNCONFIRMED
  elseif (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'unconfirmed')
  {
    //header('Location: index.php');
  }
  //NOT LOGIN
  else
  {
    //header('Location: index.php');
  }
  ?>



<!--  MODALS  -->
<div id="login_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Log in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form>
      	  <div id="error_label">
      	  </div>
      	  <div class="form-group">
      	    <label for="email_field">Email address</label>
      	    <input type="email" class="form-control" id="email_field" placeholder="Enter email">
      	  </div>
      	  <div class="form-group">
      	    <label for="password_field">Password</label>
      	    <input type="password" class="form-control" id="password_field" placeholder="Password">
      	  </div>
      	  <button id="login" type="button" class="btn btn-primary float-right">Log in</button>
      	</form>

      </div>

    </div>
  </div>
</div>

<!--  MODALS  -->
<div id="registration_modal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form>
      	  <div id="reg_error_label">
      	  </div>
      	  <div class="form-group">
      	    <label for="firstname_reg_field">First name</label>
      	    <input type="text" class="form-control" id="firstname_reg_field" placeholder="First name">
      	  </div>
      	  <div class="form-group">
      	    <label for="lastname_reg_field">Last name</label>
      	    <input type="text" class="form-control" id="lastname_reg_field" placeholder="Last name">
      	  </div>

      	  <div class="form-group">
      	    <label for="email_reg_field">Email address</label>
      	    <input type="email" class="form-control" id="email_reg_field" placeholder="Enter email">
      	  </div>
      	  <div class="form-group">
      	    <label for="password_reg_field">Password</label>
      	    <input type="password" class="form-control" id="password_reg_field" placeholder="Password">
      	  </div>
      	  <div class="form-group">
      	    <label for="password_con_reg_field">Confirm password</label>
      	    <input type="password" class="form-control" id="password_con_reg_field" placeholder="Password confirm">
      	  </div>
      	  <button id="singup" type="button" class="btn btn-primary float-right">Sing up</button>
      	</form>

      </div>

    </div>
  </div>
</div>


</body>

<script src="./lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="./lib/popper-1.16.0/popper.min.js"></script>
<script src="./lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./front/js/login_page.js"></script>

</html>



