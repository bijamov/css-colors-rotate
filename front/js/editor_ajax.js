$(document).ready(function () {


	function start_loader(){
		$('#page-content').css('opacity', '50%');
		$('#page-content').css('pointer-events', 'none');
		$('#loader').removeClass('nb_loader_hide');
		$('#loader').addClass('nb_loader_show');
	}

	function end_loader(){
		$('#page-content').css('opacity', '100%');
		$('#page-content').css('pointer-events', 'auto');
		$('#loader').removeClass('nb_loader_show');
		$('#loader').addClass('nb_loader_hide');
	}


	function find_selected_colors( elem ) {
	  var array = [];
	  for ( var i = 0; i < elem.length; i++ ) {
	  	var el = elem[ i ].id
	  	array.push(el.substring(1));
	  }
	  return array;
	}







$(document).on('click', '#apply_changes', function(){


	start_loader();
	var selected_colors = [];
	var hue_array = [];

	var hue = document.getElementById('hue').value;
	var sat = document.getElementById('sat').value;
	var light = document.getElementById('light').value;
	var w_b_exc = document.getElementById('w_b_exc').checked ? 1 : 0;
	var apply_selected_only = document.getElementById('apply_selected_only').checked ? 1 : 0;
	var apply_all_colors = document.getElementById('apply_all_colors').checked ? 1 : 0;
	var apply_similar_colors = document.getElementById('apply_similar_colors').checked ? 1 : 0;


	selected_colors = find_selected_colors( $( ".nb-selected" ).toArray() );

	hue_array = {h:hue, s:sat, l:light};

	$.ajax({
		type: 'post',
		data: {
			'hue': hue_array,
			'selected': selected_colors,
			'w_b_exc' : '0',
			'apply_selected_only' : apply_selected_only,
			'apply_all_colors' : apply_all_colors,
			'apply_similar_colors' : '0',
			'm': '1'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {
			end_loader();
			location.reload();
		}
	});

});


$(document).on('click', '#reset_file', function(){

	start_loader();

	$.ajax({
		type: 'post',
		data: {
			'm': '2'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {

			end_loader();
			location.reload();
		}
	});

});



$(document).on('click', '.add_to_selected', function(){


	start_loader();

	selected_colors = find_selected_colors( $( ".nb-selected" ).toArray() );

	var id = this.getAttribute('data-id');

	var found = selected_colors.find(element => element == id);


	if (found)
		{
			end_loader();
			location.reload();
		}

	$.ajax({
		type: 'post',
		data: {
			'id': id,
			'm': '4'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (res) {
			$('#nb_selected_color').append(res);
			end_loader();
			location.reload();
		}
	});

});


$(document).on('click', '.nb-selected_rem', function(){


	start_loader();

	var id = this.id.substring(4);

	$.ajax({
		type: 'post',
		data: {
			'id': id,
			'm': '6'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {
			end_loader();
			location.reload();
		}
	});

});



$(document).on('input', '#search_all_colors', function(){

	var hex = this.value;
	$.ajax({
		type: 'post',
		data: {
			'hex': hex,
			'm': '5'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (res) {
			$('#nb_all_colors_tab').html(res);
			end_loader();
		}
	});

});

$(document).on('change', '#nb_primary_colors_filter', function(){

	var many = this.value;
	$.ajax({
		type: 'post',
		data: {
			'many': many,
			'm': '7'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {
			end_loader();
			location.reload();
		}
	});

});







/*$(document).on('input', '#hue_control', function(){

	var hue = document.getElementById('hue').value;
	var sat = document.getElementById('sat').value;
	var light = document.getElementById('light').value;
	hue_array = {h:hue, s:sat, l:light};
	var selected_colors = [];

	selected_colors = find_selected_colors( $( ".nb-selected" ).toArray() );

	selected_colors.forEach(change_color);

	function change_color(item, index) {

	$.ajax({
		type: 'post',
		data: {
			'm': '3',
			'hue': hue_array,
			'selected': item
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (res) {
			$("#clr_"+item).css('background-color','#'+res)
		}
	});

	}

});*/



$(document).on('click', '.nb-replace_color', function(){

	start_loader();

	var hex = this.id.substring(4);
	r = hex.substring(0,2);
	g = hex.substring(2,4);
	b = hex.substring(4,6);

	r = Number(parseInt(r, 16));
	g = Number(parseInt(g, 16));
	b = Number(parseInt(b, 16));

	$('#replace_color_modal').modal();
	$('#hue_label_red').html('<b>R</b>ED ('+r+')');
	$('#sat_label_green').html('<b>G</b>REEN ('+g+')');
	$('#light_label_blue').html('<b>B</b>LUE ('+b+')');

	$('#replace_color_modal_title').html(hex);
	$('#replace_old_color').css('background-color','#'+hex);
	$('#replace_old_color').attr('data-hex', hex);

	$('#replace_new_color').css('background-color','#'+hex);



	$('#rgb_range_red').val(r);
	$('#rgb_range_green').val(g);
	$('#rgb_range_blue').val(b);

	$('#replace_hex_color_code').val(hex);

	end_loader();

});


$(document).on('input', '#rgb_control', function(){

	var red = Number(document.getElementById('rgb_range_red').value);
	var green = Number(document.getElementById('rgb_range_green').value);
	var blue = Number(document.getElementById('rgb_range_blue').value);

	red = red.toString(16);
	green = green.toString(16);
	blue = blue.toString(16);

	if (red.length == 1) {red = '0'+red}
	if (green.length == 1) {green = '0'+green}
	if (blue.length == 1) {blue = '0'+blue}

	var hex = red+green+blue;


	$('#replace_hex_color_code').val(hex);
	$('#replace_hex_color_code').removeClass('is-invalid');

	$('#replace_new_color').css('background-color','#'+hex);

});


$(document).on('input', '#replace_hex_color_code', function(){

	var hex = this.value;

	if(/[0-9abcdef]{6}/.test(hex))
		{
			r = hex.substring(0,2);
			g = hex.substring(2,4);
			b = hex.substring(4,6);

			r = Number(parseInt(r, 16));
			g = Number(parseInt(g, 16));
			b = Number(parseInt(b, 16));

			$('#rgb_range_red').val(r);
			$('#rgb_range_green').val(g);
			$('#rgb_range_blue').val(b);

			$('#hue_label_red').html('<b>R</b>ED ('+r+')');
			$('#sat_label_green').html('<b>G</b>REEN ('+g+')');
			$('#light_label_blue').html('<b>B</b>LUE ('+b+')');

			$('#replace_new_color').css('background-color','#'+hex);
			$('#replace_hex_color_code').removeClass('is-invalid');

		}
		else
		{
			$('#replace_hex_color_code').addClass('is-invalid');
		}


});

$(document).on('click', '#replace_color_reset', function(){

	start_loader();


	var hex = $('#replace_old_color').attr('data-hex');
	r = hex.substring(0,2);
	g = hex.substring(2,4);
	b = hex.substring(4,6);

	r = Number(parseInt(r, 16));
	g = Number(parseInt(g, 16));
	b = Number(parseInt(b, 16));

	$('#replace_color_modal').modal();
	$('#hue_label_red').html('<b>R</b>ED ('+r+')');
	$('#sat_label_green').html('<b>G</b>REEN ('+g+')');
	$('#light_label_blue').html('<b>B</b>LUE ('+b+')');

	$('#replace_color_modal_title').html(hex);
	$('#replace_new_color').css('background-color','#'+hex);

	$('#rgb_range_red').val(r);
	$('#rgb_range_green').val(g);
	$('#rgb_range_blue').val(b);

	$('#replace_hex_color_code').val(hex);
	$('#replace_hex_color_code').removeClass('is-invalid');

	end_loader();

});


$(document).on('click', '#replace_color_save', function(){

	start_loader();

	var r = $('#rgb_range_red').val();
	var g = $('#rgb_range_green').val();
	var b = $('#rgb_range_blue').val();
	var old = $('#replace_old_color').attr('data-hex');

	$.ajax({
		type: 'post',
		data: {
			'r': r,
			'g': g,
			'b': b,
			'old_color': old,
			'm': '8'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {
			end_loader();
			location.reload();
		}
	});



	end_loader();

});


$(document).on('click', '#hue_control_reset', function(){

	location.reload();

});


$(document).on('click', '#download_file', function(){

	start_loader();

	$.ajax({
		type: 'post',
		data: {
			'm': '9'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (res) {
			end_loader();
			window.location.replace('localhost/css-translator/downloads/'+res);

		}
	});

	end_loader();

});



});
