$(document).ready(function ()
{

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

$(document).on('input', '#css_file', function()
{
	loader_on();
	var filename = this.value;
	var extension = filename.substring(filename.length - 3);
	if (extension == 'css')
	{
		$('#css_file_form').submit();
		
	}
	else
	{
		Swal.fire({
		  title: 'Incorect file type',
		  text: "Please input valid css file",
		  icon: 'warning',
		  confirmButtonColor: '#3085d6',
		  confirmButtonText: 'OK'
		}).then((result) => {
			location.reload();
		})
		loader_off();
	}
	return;
	

});


});
