$(document).ready(function () {



$(document).on('input', '#hue_control', function(){

	var selected = $( ".nb-selected-color" ).toArray();

	var hue = Number(document.getElementById('hue').value);
	var sat = Number(document.getElementById('sat').value);
	var light = Number(document.getElementById('light').value);

	$('#hue_label').html('HUE ('+hue+')');
	$('#sat_label').html('SATURATION ('+sat+')');
	$('#light_label').html('LIGHTNESS ('+light+')');

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

})
