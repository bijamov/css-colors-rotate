
$(document).ready(function () {

$(document).on('input', '#hue_control', function(){

	var selected = $( ".nb-selected-color_S" ).toArray();

	var hue = Number(document.getElementById('hue').value);
	var sat = Number(document.getElementById('sat').value);
	var light = Number(document.getElementById('light').value);

	$('#hue_label').html('('+hue+')');
	$('#sat_label').html('('+sat+')');
	$('#light_label').html('('+light+')');

	var newhue = hue + 180;
	$('.nb_slider_sat').css('background-color', 'hsl('+hue+', 100%, 50%)');



	selected.forEach(function(entry){

		var id = entry.id;
		var h = Number(entry.getAttribute('data-h'));
		var s = Number(entry.getAttribute('data-s'));
		var l = Number(entry.getAttribute('data-l'));

		var new_h = hue + h;
		var new_s = sat + s;
		var new_l = light + l;
		if (new_h > 360) {new_h = new_h - 360}
		if (new_h < 0) {new_h = new_h + 360}

		if (new_s > 100) {new_s = 100}
		if (new_s < 0) {new_s = 0}

		if (new_l > 100) {new_l = 100}
		if (new_l < 0) {new_l = 0}

		new_h = Number(new_h);
		new_s = Number(new_s);
		new_l = Number(new_l);

		var color = "hsl("+new_h+", "+new_s+"%, "+new_l+"%)";
		entry.style.backgroundColor = color;

	});

});



$(document).on('click', '#hue_reset_button', function(){

	$('#hue').val('0');
	$('#sat').val('0');
	$('#light').val('0');

	var selected = $( ".nb-selected-color_S" ).toArray();

	var hue = Number(document.getElementById('hue').value);
	var sat = Number(document.getElementById('sat').value);
	var light = Number(document.getElementById('light').value);

	$('#hue_label').html('('+hue+')');
	$('#sat_label').html('('+sat+')');
	$('#light_label').html('('+light+')');

	var newhue = hue + 180;
	$('.nb_slider_sat').css('background-color', 'hsl(180, 100%, 50%)');



	selected.forEach(function(entry){

		var id = entry.id;
		var h = Number(entry.getAttribute('data-h'));
		var s = Number(entry.getAttribute('data-s'));
		var l = Number(entry.getAttribute('data-l'));

		var new_h = hue + h;
		var new_s = sat + s;
		var new_l = light + l;
		if (new_h > 360) {new_h = new_h - 360}
		if (new_h < 0) {new_h = new_h + 360}

		if (new_s > 100) {new_s = 100}
		if (new_s < 0) {new_s = 0}

		if (new_l > 100) {new_l = 100}
		if (new_l < 0) {new_l = 0}

		new_h = Number(new_h);
		new_s = Number(new_s);
		new_l = Number(new_l);

		var color = "hsl("+new_h+", "+new_s+"%, "+new_l+"%)";
		entry.style.backgroundColor = color;
		});
	

	});


$(document).on('click', '#hue_apply_button', function(){

	loader_on();
	var selected_colors = [];
	var hue_array = [];

	var hue = document.getElementById('hue').value;
	var sat = document.getElementById('sat').value;
	var light = document.getElementById('light').value;
	// var w_b_exc = document.getElementById('w_b_exc').checked ? 1 : 0;
	// var apply_selected_only = document.getElementById('apply_selected_only').checked ? 1 : 0;
	// var apply_all_colors = document.getElementById('apply_all_colors').checked ? 1 : 0;
	// var apply_similar_colors = document.getElementById('apply_similar_colors').checked ? 1 : 0;


	selected_colors = find_selected_colors( $( ".nbed_selected_single_colors" ).toArray() );

	hue_array = {h:hue, s:sat, l:light};
	$.ajax({
		type: 'post',
		data: {
			'hue': hue_array,
			'selected': selected_colors,
			'w_b_exc' : '0',
			'apply_all_colors' : '0',
			'm': '1'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (data) {
			loader_off();
			location.reload();
		}
	});

	})


})
