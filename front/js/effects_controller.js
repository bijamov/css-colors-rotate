$(document).ready(function () {

	// btn_hue
	// btn_balance
	// btn_replace
	// btn_black-theme


	// nbed_effect_hue
	// nbed_effect_mixer
	// nbed_effect_replace_color
	// nbed_effect_black_theme

	$(document).on('click', '#btn_hue', function(){

		reset_all_effect_controllers();

		$('#btn_hue').removeClass('nbed_effects_active');
		$('#btn_balance').removeClass('nbed_effects_active');
		$('#btn_replace').removeClass('nbed_effects_active');
		$('#btn_black-theme').removeClass('nbed_effects_active');
		$('#nbed_effect_hue').removeClass('nbed_display_on');
		$('#nbed_effect_mixer').removeClass('nbed_display_on');
		$('#nbed_effect_replace_color').removeClass('nbed_display_on');
		$('#nbed_effect_black_theme').removeClass('nbed_display_on');
		$('#nbed_effect_hue').addClass('nbed_display_off');
		$('#nbed_effect_mixer').addClass('nbed_display_off');
		$('#nbed_effect_replace_color').addClass('nbed_display_off');
		$('#nbed_effect_black_theme').addClass('nbed_display_off');

		$('#btn_hue').addClass('nbed_effects_active');
		$('#nbed_effect_hue').addClass('nbed_display_on');
		$('#nbed_effect_hue').removeClass('nbed_display_off');

		

	});


	$(document).on('click', '#btn_balance', function(){

		reset_all_effect_controllers();

		$('#btn_hue').removeClass('nbed_effects_active');
		$('#btn_balance').removeClass('nbed_effects_active');
		$('#btn_replace').removeClass('nbed_effects_active');
		$('#btn_black-theme').removeClass('nbed_effects_active');
		$('#nbed_effect_hue').removeClass('nbed_display_on');
		$('#nbed_effect_mixer').removeClass('nbed_display_on');
		$('#nbed_effect_replace_color').removeClass('nbed_display_on');
		$('#nbed_effect_black_theme').removeClass('nbed_display_on');
		$('#nbed_effect_hue').addClass('nbed_display_off');
		$('#nbed_effect_mixer').addClass('nbed_display_off');
		$('#nbed_effect_replace_color').addClass('nbed_display_off');
		$('#nbed_effect_black_theme').addClass('nbed_display_off');


		$('#btn_balance').addClass('nbed_effects_active');
		$('#nbed_effect_mixer').addClass('nbed_display_on');
		$('#nbed_effect_mixer').removeClass('nbed_display_off');

		

	});


	$(document).on('click', '#btn_replace', function(){

		reset_all_effect_controllers();

		$('#btn_hue').removeClass('nbed_effects_active');
		$('#btn_balance').removeClass('nbed_effects_active');
		$('#btn_replace').removeClass('nbed_effects_active');
		$('#btn_black-theme').removeClass('nbed_effects_active');
		$('#nbed_effect_hue').removeClass('nbed_display_on');
		$('#nbed_effect_mixer').removeClass('nbed_display_on');
		$('#nbed_effect_replace_color').removeClass('nbed_display_on');
		$('#nbed_effect_black_theme').removeClass('nbed_display_on');
		$('#nbed_effect_hue').addClass('nbed_display_off');
		$('#nbed_effect_mixer').addClass('nbed_display_off');
		$('#nbed_effect_replace_color').addClass('nbed_display_off');
		$('#nbed_effect_black_theme').addClass('nbed_display_off');


		$('#btn_replace').addClass('nbed_effects_active');
		$('#nbed_effect_replace_color').addClass('nbed_display_on');
		$('#nbed_effect_replace_color').removeClass('nbed_display_off');

		

	});


	$(document).on('click', '#btn_black-theme', function(){

		reset_all_effect_controllers();

		$('#btn_hue').removeClass('nbed_effects_active');
		$('#btn_balance').removeClass('nbed_effects_active');
		$('#btn_replace').removeClass('nbed_effects_active');
		$('#btn_black-theme').removeClass('nbed_effects_active');
		$('#nbed_effect_hue').removeClass('nbed_display_on');
		$('#nbed_effect_mixer').removeClass('nbed_display_on');
		$('#nbed_effect_replace_color').removeClass('nbed_display_on');
		$('#nbed_effect_black_theme').removeClass('nbed_display_on');
		$('#nbed_effect_hue').addClass('nbed_display_off');
		$('#nbed_effect_mixer').addClass('nbed_display_off');
		$('#nbed_effect_replace_color').addClass('nbed_display_off');
		$('#nbed_effect_black_theme').addClass('nbed_display_off');


		$('#btn_black-theme').addClass('nbed_effects_active');
		$('#nbed_effect_black_theme').addClass('nbed_display_on');
		$('#nbed_effect_black_theme').removeClass('nbed_display_off');

		

	});



});
