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
						<a href="./forget_pass.php" class="primary-text">forget password</a>
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



<!-- FOOTER -->
<div class="nb_footer_space"></div>
<div class="nb_footer container-fluid px-5 py-3">
<div class="row d-flex" >

	<div class="col-6 nb_footer_text">© CSS visual color editor by N. Bijamov.</div>


	<div class="col-6">

	<a class="float-right" href="https://www.github.com/" target="_blank">
		<i class="fa-lg pl-3 fab fa-github nb_footer_text"></i>
	</a>

	<a class="float-right" href="https://pinterest.com/" target="_blank">
		<i class="fa-lg pl-3 fab fa-pinterest-p nb_footer_text"></i>
	</a>

	<a class="float-right" href="https://twitter.com/" target="_blank">
		<i class="fa-lg pl-3 fab fa-twitter nb_footer_text"></i>
	</a>
		
	<a class="float-right" href="https://www.facebook.com/" target="_blank">
		<i class="fa-lg pl-3 fab fa-facebook-f nb_footer_text"></i>
	</a>





	</div>



</div>
</div>