$(document).ready(function () {

$(document).on('input', '#mixer_control', function(){

	var selected = $( ".nb-selected-color_S" ).toArray();

	var R = Number(document.getElementById('mixer_red').value);
	var G = Number(document.getElementById('mixer_green').value);
	var B = Number(document.getElementById('mixer_blue').value);

	$('#R_label').html('('+R+')');
	$('#G_label').html('('+G+')');
	$('#B_label').html('('+B+')');

	// var newhue = hue + 180;
	// $('.nb_slider_sat').css('background-color', 'hsl('+hue+', 100%, 50%)');



	selected.forEach(function(entry){

		var id = entry.id;
		var data_r = Number(entry.getAttribute('data-R'));
		var data_g = Number(entry.getAttribute('data-G'));
		var data_b = Number(entry.getAttribute('data-B'));

		var new_r = data_r + R;
		var new_g = data_g + G;
		var new_b = data_b + B;
		if (new_r > 255) {new_r = 255}
		if (new_r < 0) {new_r = 0}

		if (new_g > 255) {new_g = 255}
		if (new_g < 0) {new_g = 0}

		if (new_b > 255) {new_b = 255}
		if (new_b < 0) {new_b = 0}

		new_r = Number(new_r);
		new_g = Number(new_g);
		new_b = Number(new_b);

		var color = "rgb("+new_r+", "+new_g+", "+new_b+")";
		entry.style.backgroundColor = color;
	});

});



$(document).on('click', '#mixer_reset_button', function(){

	$('#mixer_red').val('0');
	$('#mixer_green').val('0');
	$('#mixer_blue').val('0');

	var selected = $( ".nb-selected-color_S" ).toArray();

	var R = Number(document.getElementById('mixer_red').value);
	var G = Number(document.getElementById('mixer_green').value);
	var B = Number(document.getElementById('mixer_blue').value);

	$('#R_label').html('('+R+')');
	$('#G_label').html('('+G+')');
	$('#B_label').html('('+B+')');



	selected.forEach(function(entry){

		var id = entry.id;
		var data_r = Number(entry.getAttribute('data-R'));
		var data_g = Number(entry.getAttribute('data-G'));
		var data_b = Number(entry.getAttribute('data-B'));

		var new_r = data_r + R;
		var new_g = data_g + G;
		var new_b = data_b + B;
		if (new_r > 255) {new_r = 255}
		if (new_r < 0) {new_r = 0}

		if (new_g > 255) {new_g = 255}
		if (new_g < 0) {new_g = 0}

		if (new_b > 255) {new_b = 255}
		if (new_b < 0) {new_b = 0}

		new_r = Number(new_r);
		new_g = Number(new_g);
		new_b = Number(new_b);

		var color = "rgb("+new_r+", "+new_g+", "+new_b+")";
		entry.style.backgroundColor = color;
	});
	

	});


$(document).on('click', '#mixer_apply_button', function(){

	loader_on();
	var selected_colors = [];
	var rgb_array = [];

	var R = document.getElementById('mixer_red').value;
	var G = document.getElementById('mixer_green').value;
	var B = document.getElementById('mixer_blue').value;
	// var w_b_exc = document.getElementById('w_b_exc').checked ? 1 : 0;
	// var apply_selected_only = document.getElementById('apply_selected_only').checked ? 1 : 0;
	// var apply_all_colors = document.getElementById('apply_all_colors').checked ? 1 : 0;
	// var apply_similar_colors = document.getElementById('apply_similar_colors').checked ? 1 : 0;


	selected_colors = find_selected_colors( $( ".nbed_selected_single_colors" ).toArray() );

	rgb_array = {r:R, g:G, b:B};

	$.ajax({
		type: 'post',
		data: {
			'rgb': rgb_array,
			'selected': selected_colors,
			'w_b_exc' : '0',
			'apply_all_colors' : '0',
			'm': '10'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (data) {
			// console.log(data);
			// alert('stop');
			loader_off();
			location.reload();
		}
	});

	})


})
