<div id="loader" class="nb_loader_hide">
  <div class="nb_loader"></div>
</div>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once('./classes/class_users.php');
//USER
if (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'user')
{
  $user = new nb_users();
  $user->user_id = $_SESSION['user_id'];
  $user_info = $user->get_user_info();
  ?>
  <div class="container-fluid nb_header">
    <div class="row d-flex bg-dark p-2">
<!--       <div class="col-5">
        <h2 class="text-light nb_logo_text">CSS COLORS ROTATE</h2>
      </div> -->

      <div class="col-12 d-flex">
        <div class="ml-auto">
          <span class="mr-3 text-white"><?=$user_info['email']?></span>
          <button type="button" class="btn-sm btn-primary mr-3" id="logout_modal_button">Log out</button>
        </div>
      </div>

    </div>
  </div>
  <?php
}
//UNCONFIRMED
elseif (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'status')
{
  $user = new nb_users();
  $user->user_id = $_SESSION['user_id'];
  $user_info = $user->get_user_info();
  ?>
    <div class="container-fluid nb_header">
      <div class="row d-flex bg-dark p-2">
<!--         <div class="col-5">
          <h2 class="text-light nb_logo_text">CSS COLORS ROTATE</h2>
        </div> -->

        <div class="col-12 d-flex">
          <div class="ml-auto">
            <span class="mr-3 text-white"><?=$user_info['email']?></span>
            <button type="button" class="btn-sm btn-primary mr-3" id="logout_modal_button">Log out</button>
          </div>
        </div>

      </div>
    </div>
  <?php
}
else
{
  ?>

    <div class="container-fluid nb_header">
      <div class="row d-flex bg-dark p-2">
<!--         <div class="col-5">
          <h2 class="text-light nb_logo_text">CSS COLORS ROTATE</h2>
        </div> -->
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



