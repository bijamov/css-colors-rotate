$(document).ready(function ()
{

});

$(document).on('input', '#css_file', function()
{
	var filename = this.value;
	var extension = filename.substring(filename.length - 3);
	if (extension == 'css')
	{
		alert(extension);
		$('#css_file_form').submit();
	}

});
