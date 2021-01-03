
function find_selected_colors( elem ) {
  var array = [];
  for ( var i = 0; i < elem.length; i++ ) {
  	var el = elem[ i ].id
  	array.push(el);
  }
  return array;
}

function reset_all_effect_controllers() {

	//HUE TRANSFORMER
	$('#hue').val('0');
	$('#sat').val('0');
	$('#light').val('0');
	$('#hue_label').html('(0)');
	$('#sat_label').html('(0)');
	$('#light_label').html('(0)');
	$('.nb_slider_sat').css('background-color', 'hsl(0, 100%, 50%)');

	//CHANNEL MIXER
	$('#mixer_red').val('0');
	$('#mixer_green').val('0');
	$('#mixer_blue').val('0');
	$('#R_label').html('(0)');
	$('#G_label').html('(0)');
	$('#B_label').html('(0)');

	// SELECTED COLORS

	var selected = $( ".nb-selected-color_S" ).toArray();
	
	selected.forEach(function(entry){

		var id = entry.id;

		var data_r = Number(entry.getAttribute('data-R'));
		var data_g = Number(entry.getAttribute('data-G'));
		var data_b = Number(entry.getAttribute('data-B'));

		var color = "rgb("+data_r+", "+data_g+", "+data_b+")";
		entry.style.backgroundColor = color;
	});
}

$(document).ready(function () {


// $(document).on('click', '#apply_changes', function(){


// 	loader_on();
// 	var selected_colors = [];
// 	var hue_array = [];

// 	var hue = document.getElementById('hue').value;
// 	var sat = document.getElementById('sat').value;
// 	var light = document.getElementById('light').value;
// 	var w_b_exc = document.getElementById('w_b_exc').checked ? 1 : 0;
// 	var apply_selected_only = document.getElementById('apply_selected_only').checked ? 1 : 0;
// 	var apply_all_colors = document.getElementById('apply_all_colors').checked ? 1 : 0;
// 	var apply_similar_colors = document.getElementById('apply_similar_colors').checked ? 1 : 0;


// 	selected_colors = find_selected_colors( $( ".nb-selected" ).toArray() );

// 	hue_array = {h:hue, s:sat, l:light};

// 	$.ajax({
// 		type: 'post',
// 		data: {
// 			'hue': hue_array,
// 			'selected': selected_colors,
// 			'w_b_exc' : '0',
// 			'apply_selected_only' : apply_selected_only,
// 			'apply_all_colors' : apply_all_colors,
// 			'apply_similar_colors' : '0',
// 			'm': '1'
// 		},
// 		url: "../api/ajax/editor_ajax.php",
// 		success: function () {
// 			loader_off();
// 			location.reload();
// 		}
// 	});

// });

// HELPER TEXT
var nbed_selected_colors_cont = $('.nbed_selected_colors_cont').html().replace(/\s/g,'');
if (nbed_selected_colors_cont == '<divid="drag_here_helper_sc"></div>')
{
	$('#drag_here_helper_sc').html('<div class="helper_text"><center><p>Drag colors from the list to add them here in "selected colors area".</p><p>or</p><p>Choose from the drop down list the primary colors that appear most frequently in the css file.</p></center></div>');
}


$(document).on('click', '#reset_file', function(){

	loader_on();

	$.ajax({
		type: 'post',
		data: {
			'm': '2'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {

			loader_off();
			location.reload();
		}
	});

});



$(document).on('click', '.add_to_selected', function(){


	loader_on();

	selected_colors = find_selected_colors( $( ".nb-selected" ).toArray() );

	var id = this.getAttribute('data-id');

	var found = selected_colors.find(element => element == id);


	if (found)
		{
			loader_off();
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
			loader_off();
			location.reload();
		}
	});

});


$(document).on('click', '.nb-selected_rem', function(){


	loader_on();

	var id = this.id.substring(4);

	$.ajax({
		type: 'post',
		data: {
			'id': id,
			'm': '6'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {
			loader_off();
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
			loader_off();
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
			loader_off();
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

	loader_on();

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

	loader_off();

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

	loader_on();


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

	loader_off();

});


$(document).on('click', '#replace_color_save', function(){

	loader_on();

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
			loader_off();
			location.reload();
		}
	});



	loader_off();

});


// $(document).on('click', '#hue_control_reset', function(){

// 	location.reload();

// });


$(document).on('click', '#download_file', function(){

	loader_on();

	/* Helper function */
	function download_file(fileURL, fileName) {
	    // for non-IE
	    if (!window.ActiveXObject) {
	        var save = document.createElement('a');
	        save.href = fileURL;
	        save.target = '_blank';
	        var filename = fileURL.substring(fileURL.lastIndexOf('/')+1);
	        save.download = fileName || filename;
		       if ( navigator.userAgent.toLowerCase().match(/(ipad|iphone|safari)/) && navigator.userAgent.search("Chrome") < 0) {
					document.location = save.href; 
	// window event not working here
				}else{
			        var evt = new MouseEvent('click', {
			            'view': window,
			            'bubbles': true,
			            'cancelable': false
			        });
			        save.dispatchEvent(evt);
			        (window.URL || window.webkitURL).revokeObjectURL(save.href);
				}	
	    }

	    // for IE < 11
	    else if ( !! window.ActiveXObject && document.execCommand)     {
	        var _window = window.open(fileURL, '_blank');
	        _window.document.close();
	        _window.document.execCommand('SaveAs', true, fileName || fileURL)
	        _window.close();
	    }
	}

	
	$.ajax({
		type: 'post',
		data: {
			'm': '9'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (res) {
			let fileURL = 'https://bijamov.me/cssvce/downloads/'+res;
			let fileName = res;
			download_file(fileURL, fileName);
			// downloadURL('https://bijamov.me/cssvce/downloads/'+res);
			// window.location.replace('https://bijamov.me/cssvce/downloads/'+res);
		}
	});
	location.reload();
	// loader_off();

});


$(document).on('click', '#logout_from_editor', function(){

	loader_on();

	$.ajax({
		type: 'post',
		data: {
			'm': '5'
		},
		url: "../api/ajax/login_ajax.php",
		success: function (res) {
			loader_off();
			window.location.replace('https://bijamov.me/cssvce/');
		}
	});

	loader_off();

});


$(document).on('input', '#search_all_colors', function(){

	loader_on();

	var hex_txt = $('#search_all_colors').val();
	$.ajax({
		type: 'post',
		data: {
			'hex': hex_txt,
			'm': '5'
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (res) {
			// $('#nb_selected_color').append(res);
			loader_off();
			$('.nbed_all_colors_place').html(res);
			// console.log(res);
			$( ".drag_me" ).draggable(
				{
					
					cancel: '.drag_me_notme',
					revert: true,
					helper: 'clone',
					appendTo: 'body',
					start  : function(event, ui){
						let v = $(this).css('width');
					    $(ui.helper).css("width", v);
					    $('.dropp_here').addClass('drag_here_bg_hover');

					},
					stop: function(event, ui){
					    $('.dropp_here').removeClass('drag_here_bg_hover');

					},
				}


				);




		}




		
	});
	

	loader_off();

});


$( function() {
	$( ".drag_me" ).draggable(
		{
			cancel: '.drag_me_notme',
			revert: true,
			helper: 'clone',
			appendTo: 'body',
			start  : function(event, ui){
				let v = $(this).css('width');
			    $(ui.helper).css("width", v);
			    $('.dropp_here').addClass('drag_here_bg_hover');

			},
			stop: function(event, ui){
			    $('.dropp_here').removeClass('drag_here_bg_hover');

			},
		}


		);

	$( ".nbed_selected_colors_cont" ).droppable({
	drop: function( event, ui ) {

		loader_on();

	  var selected_id = $(ui.draggable).attr('data-id');

	  $.ajax({
	  	type: 'post',
	  	data: {
	  		'id': selected_id,
	  		'm': '4'
	  	},
	  	url: "../api/ajax/editor_ajax.php",
	  	success: function (res) {
	  		// $('#nb_selected_color').append(res);
	  		loader_off();
	  		location.reload();
	  	}
	  });


	}
	});

	$( "#rep_col_selected_color" ).droppable({
	drop: function( event, ui ) {

		loader_on();

	  let selected_id = $(ui.draggable).attr('data-id');

	  let R = $(ui.draggable).attr('data-r');
	  let G = $(ui.draggable).attr('data-g');
	  let B = $(ui.draggable).attr('data-b');

	  $('#rep_col_selected_color').css('background-color', 'rgb('+R+','+G+','+B+')');
	  $('.dropp_here').removeClass('drag_here_bg_hover');
	  $('#rep_col_selected_color').attr('data-r',R);
	  $('#rep_col_selected_color').attr('data-g',G);
	  $('#rep_col_selected_color').attr('data-b',B);
	  loader_off();

	  // $.ajax({
	  // 	type: 'post',
	  // 	data: {
	  // 		'id': selected_id,
	  // 		'm': '4'
	  // 	},
	  // 	url: "../api/ajax/editor_ajax.php",
	  // 	success: function (res) {
	  // 		// $('#nb_selected_color').append(res);
	  // 		loader_off();
	  // 		location.reload();
	  // 	}
	  // });


	}
	});


});


$(document).on('click', '#rep_col_replace_with', function(){

	let R = $('#rep_col_selected_color').attr('data-r');
	let G = $('#rep_col_selected_color').attr('data-g');
	let B = $('#rep_col_selected_color').attr('data-b');

	if (R === undefined || G === undefined || B === undefined)
	{
		return;
	}

	$('#mecci_apply_button').val('rep');
	let selected = $('#rep_col_selected_color').css('background-color');

	$('#mecci_R_label').html('('+R+')');
	$('#mecci_G_label').html('('+G+')');
	$('#mecci_B_label').html('('+B+')');

	$('#mecci_mixer_red').val(R);
	$('#mecci_mixer_green').val(G);
	$('#mecci_mixer_blue').val(B);


	$('.mecci_color_bfr').css('background-color', selected);
	$('.mecci_color_aft').css('background-color', 'rgb('+R+','+G+','+B+')');

	let hex_R = Number(R).toString(16); 
	let hex_G = Number(G).toString(16);
	let hex_B = Number(B).toString(16);

	hex_R = (hex_R.length < 2 ) ? '0'+hex_R : hex_R;
	hex_G = (hex_G.length < 2 ) ? '0'+hex_G : hex_G;
	hex_B = (hex_B.length < 2 ) ? '0'+hex_B : hex_B;

	let hex = hex_R+hex_G+hex_B;

	$('#mecci_color_hex').val(hex);

	$('.modal_edit_color').css('display', 'block');

});


$(document).on('click', '.schb_remove', function(){

	loader_on();

	let id = $(this).attr('data-id');

	$.ajax({
		type: 'post',
		data: {
			'm': '6',
			'id': id
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (res) {
			loader_off();
			location.reload();
		}
	});

	loader_off();

});






$(document).on('click', '.schb_edit', function(){

	let id = $(this).attr('data-id');

	let crt_clr = $('#color_id-'+id).find('.nbed_all_colors_single_color').css('background-color');

	let R = $('#color_id-'+id).attr('data-r');
	let G = $('#color_id-'+id).attr('data-g');
	let B = $('#color_id-'+id).attr('data-b');

	$('#mecci_R_label').html('('+R+')');
	$('#mecci_G_label').html('('+G+')');
	$('#mecci_B_label').html('('+B+')');

	$('#mecci_mixer_red').val(R);
	$('#mecci_mixer_green').val(G);
	$('#mecci_mixer_blue').val(B);


	$('.mecci_color_bfr').css('background-color', crt_clr);

	$('.mecci_color_bfr').attr('data-r',R);
	$('.mecci_color_bfr').attr('data-g',G);
	$('.mecci_color_bfr').attr('data-b',B);


	$('.mecci_color_aft').css('background-color', crt_clr);


	let hex_R = Number(R).toString(16); 
	let hex_G = Number(G).toString(16);
	let hex_B = Number(B).toString(16);

	hex_R = (hex_R.length < 2 ) ? '0'+hex_R : hex_R;
	hex_G = (hex_G.length < 2 ) ? '0'+hex_G : hex_G;
	hex_B = (hex_B.length < 2 ) ? '0'+hex_B : hex_B;

	let hex = hex_R+hex_G+hex_B;

	$('#mecci_color_hex').val(hex);

	$('.modal_edit_color').css('display', 'block');

});

$(document).on('click', '#mecci_exit_button', function(){

$('#mecci_apply_button').val('');
$('.modal_edit_color').css('display', 'none');

});



$(document).on('input', '#mecci_mixer_control', function(){

	let R = $('#mecci_mixer_red').val();
	let G = $('#mecci_mixer_green').val();
	let B = $('#mecci_mixer_blue').val();

	$('#mecci_R_label').html('('+R+')');
	$('#mecci_G_label').html('('+G+')');
	$('#mecci_B_label').html('('+B+')');

	let hex_R = Number(R).toString(16); 
	let hex_G = Number(G).toString(16);
	let hex_B = Number(B).toString(16);

	hex_R = (hex_R.length < 2 ) ? '0'+hex_R : hex_R;
	hex_G = (hex_G.length < 2 ) ? '0'+hex_G : hex_G;
	hex_B = (hex_B.length < 2 ) ? '0'+hex_B : hex_B;

	let hex = hex_R+hex_G+hex_B;

	$('#mecci_color_hex').val(hex);

	$('.mecci_color_aft').css('background-color', 'rgb('+R+' '+G+' '+B+')');

});


$(document).on('click', '#mecci_reset_button', function(){

	let mode = $('#mecci_apply_button').val();
	if (mode == 'rep')
	{

		let R = $('#rep_col_selected_color').attr('data-r');
		let G = $('#rep_col_selected_color').attr('data-g');
		let B = $('#rep_col_selected_color').attr('data-b');
		let selected = $('#rep_col_selected_color').css('background-color');

		$('#mecci_R_label').html('('+R+')');
		$('#mecci_G_label').html('('+G+')');
		$('#mecci_B_label').html('('+B+')');

		$('#mecci_mixer_red').val(R);
		$('#mecci_mixer_green').val(G);
		$('#mecci_mixer_blue').val(B);


		$('.mecci_color_bfr').css('background-color', selected);
		$('.mecci_color_aft').css('background-color', 'rgb('+R+','+G+','+B+')');

		let hex_R = Number(R).toString(16); 
		let hex_G = Number(G).toString(16);
		let hex_B = Number(B).toString(16);

		hex_R = (hex_R.length < 2 ) ? '0'+hex_R : hex_R;
		hex_G = (hex_G.length < 2 ) ? '0'+hex_G : hex_G;
		hex_B = (hex_B.length < 2 ) ? '0'+hex_B : hex_B;

		let hex = hex_R+hex_G+hex_B;

		$('#mecci_color_hex').val(hex);
		return;
	}
	let R = $('.mecci_color_bfr').attr('data-r');
	let G = $('.mecci_color_bfr').attr('data-g');
	let B = $('.mecci_color_bfr').attr('data-b');

	let hex_R = Number(R).toString(16); 
	let hex_G = Number(G).toString(16);
	let hex_B = Number(B).toString(16);

	hex_R = (hex_R.length < 2 ) ? '0'+hex_R : hex_R;
	hex_G = (hex_G.length < 2 ) ? '0'+hex_G : hex_G;
	hex_B = (hex_B.length < 2 ) ? '0'+hex_B : hex_B;

	let hex = hex_R+hex_G+hex_B;

	$('#mecci_color_hex').val(hex);

	$('#mecci_R_label').html('('+R+')');
	$('#mecci_G_label').html('('+G+')');
	$('#mecci_B_label').html('('+B+')');

	$('#mecci_mixer_red').val(R);
	$('#mecci_mixer_green').val(G);
	$('#mecci_mixer_blue').val(B);

	$('.mecci_color_aft').css('background-color', 'rgb('+R+' '+G+' '+B+')');

});

$(document).on('input', '#mecci_color_hex', function(){

	let in_hex = $('#mecci_color_hex').val();
	var regex = /[0-9A-Fa-f]{6}/g;

	if(regex.test(in_hex))
	{
		let R = in_hex.substring(0,2); R = parseInt(R, 16);
		let G = in_hex.substring(2,4); G = parseInt(G, 16);
		let B = in_hex.substring(4,6); B = parseInt(B, 16);

		$('#mecci_R_label').html('('+R+')');
		$('#mecci_G_label').html('('+G+')');
		$('#mecci_B_label').html('('+B+')');

		$('#mecci_mixer_red').val(R);
		$('#mecci_mixer_green').val(G);
		$('#mecci_mixer_blue').val(B);

		$('.mecci_color_aft').css('background-color', 'rgb('+R+' '+G+' '+B+')');

	    $('#mecci_color_hex').css('color','#dedbdb');
	}
	else
	{
	    $('#mecci_color_hex').css('color','rgb(255 158 158)');
	    $('#mecci_color_hex > input[type=text]').css('color','rgb(255 158 158)');
	}

});

$(document).on('click', '#mecci_apply_button', function(){

		let mode = $('#mecci_apply_button').val();
		if (mode == 'rep')
		{
			let color = $('#mecci_clr_aft').css('background-color');
			$('#rep_col_replace_with').css('background-color', color);
			$('#mecci_apply_button').val('');

			let R = $('#mecci_mixer_red').val();
			let G = $('#mecci_mixer_green').val();
			let B = $('#mecci_mixer_blue').val();

			$('#rep_col_replace_with').attr('data-r', R);
			$('#rep_col_replace_with').attr('data-g', G);
			$('#rep_col_replace_with').attr('data-b', B);
			$('.modal_edit_color').css('display', 'none');
			return;
		}
		let new_hex = $('#mecci_color_hex').val();

		let old_r = $('#mecci_clr_bfr').attr('data-r');
		let old_g = $('#mecci_clr_bfr').attr('data-g');
		let old_b = $('#mecci_clr_bfr').attr('data-b');

		let hex_R = Number(old_r).toString(16); 
		let hex_G = Number(old_g).toString(16);
		let hex_B = Number(old_b).toString(16);

		hex_R = (hex_R.length < 2 ) ? '0'+hex_R : hex_R;
		hex_G = (hex_G.length < 2 ) ? '0'+hex_G : hex_G;
		hex_B = (hex_B.length < 2 ) ? '0'+hex_B : hex_B;

		let old_hex = hex_R+hex_G+hex_B;

		let R = new_hex.substring(0,2); R = parseInt(R, 16);
		let G = new_hex.substring(2,4); G = parseInt(G, 16);
		let B = new_hex.substring(4,6); B = parseInt(B, 16);

	$.ajax({
		type: 'post',
		data: {
			'm': '8',
			'r': R,
			'g': G,
			'b': B,
			'old_color': old_hex

		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {

			loader_off();
			location.reload();
		}
	});

});


$(document).on('click', '#clear_selected_colors', function(){

	$.ajax({
		type: 'post',
		data: {
			'm': '11'

		},
		url: "../api/ajax/editor_ajax.php",
		success: function () {

			loader_off();
			location.reload();
		}
	});

});



$(document).on('click', '#rep_col_eff_apply', function(){

	let R_RW = $('#rep_col_replace_with').attr('data-r');
	let G_RW = $('#rep_col_replace_with').attr('data-g');
	let B_RW = $('#rep_col_replace_with').attr('data-b');

	let R_SC = $('#rep_col_selected_color').attr('data-r');
	let G_SC = $('#rep_col_selected_color').attr('data-g');
	let B_SC = $('#rep_col_selected_color').attr('data-b');

	if (R_RW === undefined || G_RW === undefined || B_RW === undefined)
	{
		alert('no color');
		return
	}

	if (R_SC === undefined || G_SC === undefined || B_SC === undefined)
	{
		alert('no selected color');
		return
	}

	let shades = $('#rep_col_shades').val();
	let rep_with = [R_RW, G_RW, B_RW];
	let selected = [R_SC, G_SC, B_SC];
	

	$.ajax({
		type: 'post',
		data: {
			'm': '12',
			'shades': shades,
			'rep_with': rep_with,
			'selected': selected
		},
		url: "../api/ajax/editor_ajax.php",
		success: function (res) {
			console.log(res);
			loader_off();
			// location.reload();
		}
	});

});



$(document).on('input', '#rep_col_shades', function(){

	let val = $('#rep_col_shades').val();
	$('#rep_col_shades_label').html('('+val+'%)');

});






});
