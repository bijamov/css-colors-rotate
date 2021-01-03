
$(document).ready(function () {

	function loader_on(){
		$('#page-content').css('opacity', '50%');
		$('#page-content').css('pointer-events', 'none');
		$('#loader').removeClass('nb_loader_hide');
		$('#loader').addClass('nb_loader_show');
	}

	function loader_off(){
		$('#page-content').css('opacity', '100%');
		$('#page-content').css('pointer-events', 'auto');
		$('#loader').removeClass('nb_loader_show');
		$('#loader').addClass('nb_loader_hide');
	}



$(document).on('click', '#login', function () {
	$('#error_label').html('');

	var email = $('#email_field').val();
	var password = $('#password_field').val();

	email = email.trim();
	password = password.trim();

	$.ajax({
		type: 'post',
		data: {
			'email': email,
			'password': password,
			'm': '1'
		},
		url: "./api/ajax/login_ajax.php",
		success: function (res) {
			if (res != 'ok') {
				$('#error_label').html(res);
			} else {
				$.ajax({
					type: 'post',
					data: {
						'email': email,
						'password': password,
						'm': '2'
					},
					url: "./api/ajax/login_ajax.php",
					success: function (res) {
						if (res == 'ok') {
							Swal.fire({
							  title: 'Login Successful',
							  text: "You have successfully logged in!",
							  icon: 'success',
							  confirmButtonColor: '#3085d6',
							  confirmButtonText: 'OK'
							}).then((result) => {
								location.reload();
							})
							
						} else if(res == 'status') {

							Swal.fire({
							  title: 'Login Successful',
							  text: "Please check your email. We have sent a confirmation message",
							  icon: 'info',
							  confirmButtonColor: '#3085d6',
							  confirmButtonText: 'OK'
							}).then((result) => {
								window.location.href = "./activation.php";
								// location.reload();
							})

						}
						else
						{
							$('#error_label').html(res);
						}
					}
				})
			}
		}

	})
})

$(document).on('click', '#singup', function () {
	$('#reg_error_label').html('');
	loader_on();
	

	var firstname = $('#firstname_reg_field').val();
	var lastname = $('#lastname_reg_field').val();
	var password = $('#password_reg_field').val();
	var password_con = $('#password_con_reg_field').val();
	var email = $('#email_reg_field').val();


	firstname = firstname.trim();
	lastname = lastname.trim();
	password = password.trim();
	password_con = password_con.trim();
	email = email.trim();

	$.ajax({
		type: 'post',
		data: {
			'firstname': firstname,
			'lastname': lastname,
			'password': password,
			'password_con': password_con,
			'email': email,
			'm': '3'
		},
		url: "./api/ajax/login_ajax.php",
		success: function (res) {
			if (res != 'ok') {
				loader_off();
				$('#reg_error_label').html(res);
			} else {
				$.ajax({
					type: 'post',
					data: {
						'firstname': firstname,
						'lastname': lastname,
						'password': password,
						'password_con': password_con,
						'email': email,
						'm': '4'
					},
					url: "./api/ajax/login_ajax.php",
					success: function (res) {
						if (res != 'ok') {
							loader_off();
							$('#reg_error_label').html(res);
						} else {
							loader_off();
							Swal.fire({
							  title: 'Sign up Successful',
							  text: "You have successfully signed up! Please check your email. We have sent a confirmation message",
							  icon: 'success',
							  confirmButtonColor: '#3085d6',
							  confirmButtonText: 'OK'
							}).then((result) => {
								window.location.href = "./activation.php";
								
							})
							// document.reload();
						}
					}
				})
			}
		}

	})
})

$(document).on('click', '#login_modal_button', function () {

	$('#login_modal').modal();

});

$(document).on('click', '#registration_modal_button', function () {

	$('#registration_modal').modal();

});

$(document).on('click', '#logout_modal_button', function () {
	loader_on();
	$.ajax({
		type: 'post',
		data: {
			'm': '5'
		},
		url: "./api/ajax/login_ajax.php",
		success: function (res) {
			loader_off();
			if (res == 'ok') {
				Swal.fire({
				  title: 'Logout Successful',
				  text: "You have successfully logged out!",
				  icon: 'success',
				  confirmButtonColor: '#3085d6',
				  confirmButtonText: 'OK'
				}).then((result) => {
					window.location.href = "./index.php";
					
				})

			// document.reload();
			}


		}
	});

});

$(document).on('click', '#comfirm_mail_btn', function () {

	var email = $('#comf_email_field').val();

	email = email.trim();

	$.ajax({
		type: 'post',
		data: {
			'email': email,
			'm': '6'
		},
		url: "./api/ajax/login_ajax.php",
		success: function (res) {
			if (res == 'ok') {
				
				Swal.fire({
				  title: 'Mail Sent Successful',
				  text: "Please check your email. We have sent a confirmation message!",
				  icon: 'success',
				  confirmButtonColor: '#3085d6',
				  confirmButtonText: 'OK'
				}).then((result) => {
					window.location.href = "./index.php";
					
				})


			} else {
				console.log(res);
				
				
				Swal.fire({
				  title: 'Error!',
				  text: "Something went wrong please try again later!",
				  icon: 'error',
				  confirmButtonColor: '#3085d6',
				  confirmButtonText: 'OK'
				}).then((result) => {
					location.reload();
					
				})

			}
		}

	})
})

// END ONREADY
})