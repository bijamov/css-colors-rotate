<?php
session_start();
include_once('./classes/class_users.php');
//USER
if (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'user')
{
  $user = new nb_users();
  $user->user_id = $_SESSION['user_id'];
  $user_info = $user->get_user_info();
  ?>
  <div class="row nb_header">
    <div class="container-fluid d-flex bg-dark p-2">

      <div class="col-12 d-flex">
        <div class="ml-auto">
          <span class="mr-3 text-white"><?=$user_info['email']?></span>
          <button type="button" class="btn btn-primary mr-3" id="logout_modal_button">Log out</button>
        </div>
      </div>

    </div>
  </div>
  <?php
}
//UNCONFIRMED
elseif (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'unconfirmed')
{
  ?>
    <div class="row nb_header">
      <div class="container-fluid d-flex bg-dark p-2">

        <div class="col-12 d-flex">
          <div class="ml-auto">
            <span class="mr-3 text-white"><?=$user_info['email']?></span>
            <button type="button" class="btn btn-primary mr-3" id="logout_modal_button">Log out</button>
          </div>
        </div>

      </div>
    </div>
  <?php
}
else
{
  ?>

    <div class="row nb_header">
      <div class="container-fluid d-flex bg-dark p-2">

        <div class="col-12 d-flex">
          <div class="ml-auto">
            <button type="button" class="btn btn-primary mr-3" id="registration_modal_button">Register</button>
            <button type="button" class="btn btn-primary mr-3" id="login_modal_button">Login</button>
          </div>
        </div>
      </div>

    </div>
<?php
}
?>



