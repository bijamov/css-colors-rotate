$(document).ready(function () {

})

$(document).on('click', '#login', function()
{
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
			if (res != 'ok')
			{
				$('#error_label').html(res);
			}
			else
			{
				$.ajax({
					type: 'post',
					data: {
						'email': email,
						'password': password,
						'm': '2'
					},
					url: "./api/ajax/login_ajax.php",
					success: function (res)
					{
						if (res != 'ok')
						{
							$('#error_label').html(res);
						}
						else
						{
							location.reload();
						}
					}
				})
			}
		}

	})
})


$(document).on('click', '#singup', function()
{
	$('#reg_error_label').html('');

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
			if (res != 'ok')
			{
				$('#reg_error_label').html(res);
			}
			else
			{
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
					success: function (res)
					{
						if (res != 'ok')
						{
							$('#reg_error_label').html(res);
						}
						else
						{
							alert('ok');
						}
					}
				})
			}
		}

	})
})

$(document).on('click', '#login_modal_button', function()
{

	$('#login_modal').modal();

});

$(document).on('click', '#registration_modal_button', function()
{

	$('#registration_modal').modal();

});


$(document).on('click', '#logout_modal_button', function()
{
	$.ajax({
		type: 'post',
		data: {
			'm': '5'
		},
		url: "./api/ajax/login_ajax.php",
		success: function (res)
		{
			if (res == 'ok')
			{
				window.location.href = "./index.php";
			}


		}
	});

});
