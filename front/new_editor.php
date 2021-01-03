<!DOCTYPE html>
<?php
include_once('../classes/constants.php');
if (isset($_SESSION['user_type']) AND $_SESSION['user_type'] == 'user')
{

}
else
{
	// header('Location: '.$site_url);
	// exit;

	// session_start();
	// echo $_SESSION['user_id'];
}




include_once('../classes/class_editor.php');
$nb_editor = new nb_editor();
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../front/css/editor.css">
	<link href="../lib/fontawesome-5.13.0/css/fontawesome.css" rel="stylesheet">
	<link href="../lib/fontawesome-5.13.0/css/brands.css" rel="stylesheet">
	<link href="../lib/fontawesome-5.13.0/css/solid.css" rel="stylesheet">
	<link href="../lib/jquery-ui-1.12.1/jquery-ui.css" rel="stylesheet">
	<title>CSS Color Editor</title>
</head>
<body>

<div class="nbed_loader" style="opacity: 0; z-index: -666"><img src="./img/loader.svg"></div>
<div id="nbed_menu" class="nbed_menu">
	<!-- LOGO -->
	<div id="nbed_logo" class="nbed_logo">
		<h3 style="margin-top: 15px; padding-left: 15px;">CSS COLORS</h3>
	</div>
	<!-- EFFECTS -->
	<div id="nbed_effects" class="nbed_effects nbed_line_left">
		<ul>
			<li id="btn_hue"><img src="img/hue-icon.svg"></li>
			<li id="btn_balance"><img src="img/balance-icon.svg"></li>
			<li id="btn_replace"><img src="img/replace-icon - CS.svg"></li>
			<li id="btn_black-theme" title="Coming soon"><img src="img/black-theme-icon - CS.svg"></li>
		</ul>
	</div>
	<!-- LOGOUT BUTTON -->
	<div id="nbed_profile" class="nbed_profile nbed_line_left">
		<ul>
			<li><img title="Download file" id="download_file" src="img/download_icon.svg"></li>
			<li><img title="Reset file" id="reset_file" src="img/reset_icon.svg"></li>
			<li><img title="Logout" id="logout_from_editor" src="img/logout_icon.svg"></li>
		</ul>
	</div>
</div>

<div id="nbed_body" class="nbed_body nbed_line_top">
	<div id="nbed_main" class="nbed_main">
		<!-- EFFECTS CONTROLS -->
		<div id="nbed_effects_control" class="nbed_effects_control">

			<div class="nbed_effects_content">
				<!-- HUE TRANSFORMATION -->
				<div id="nbed_effect_hue" class="nbed_display_off">
					<div>
						<h4>HUE transformation</h4>
					</div>
					<div class="nbed_effects_controls">
						<div class="nbed_col-6">
							<form id='hue_control'>
								<div class="nb_slidecontainer">
									<input type="range" min="-180" max="180" value="0" class="nb_slider_hue" id="hue">
									<span id="hue_label">(0)</span>
								</div>
								<div class="nb_slidecontainer">
									<input type="range" min="-100" max="100" value="0" class="nb_slider_sat" id="sat">
									<span id="sat_label">(0)</span>
								</div>
								<div class="nb_slidecontainer">
									<input type="range" min="-100" max="100" value="0" class="nb_slider_light" id="light">
									<span id="light_label">(0)</span>
								</div>
							</form>
						</div>
						<div class="nbed_col-6 nbed_row">
							<div class="nbed_col-6">
							</div>
							<div class="nbed_col-6">
								<button id="hue_apply_button" class="nbed_btn_dark">apply</button>
								<button id="hue_reset_button" class="nbed_btn_light nbed_top_space">reset</button>
							</div>
							
						</div>
					</div>	
				</div>	

				<!-- CHANNEL MIXER -->
				<div id="nbed_effect_mixer" class="nbed_display_off">
					<div>
						<h4>Channel Mixer</h4>
					</div>
					<div class="nbed_effects_controls">
						<div class="nbed_col-6">
							<form id='mixer_control'>
								<div class="nb_slidecontainer">
									<input type="range" min="-255" max="255" value="0" class="nb_slider_mixer_r" id="mixer_red">
									<span id="R_label">(0)</span>
								</div>
								<div class="nb_slidecontainer">
									<input type="range" min="-255" max="255" value="0" class="nb_slider_mixer_g" id="mixer_green">
									<span id="G_label">(0)</span>
								</div>
								<div class="nb_slidecontainer">
									<input type="range" min="-255" max="255" value="0" class="nb_slider_mixer_b" id="mixer_blue">
									<span id="B_label">(0)</span>
								</div>
							</form>
						</div>
						<div class="nbed_col-6 nbed_row">
							<div class="nbed_col-6">
							</div>
							<div class="nbed_col-6">
								<button id="mixer_apply_button" class="nbed_btn_dark">apply</button>
								<button id="mixer_reset_button" class="nbed_btn_light nbed_top_space">reset</button>
							</div>
							
						</div>
					</div>	
				</div>	

				<!-- REPLACE COLOR -->
				<div id="nbed_effect_replace_color" class="nbed_display_off">
					<div class="nbed_row">
						<div class="nbed_col-6">
							<h4>Replace Color</h4>
						</div>
						<div class="nbed_col-6">
							<h5>Include Shades</h5>
						</div>
					</div>
					<div class="nbed_effects_controls">
						<div class="nbed_col-6 nbed_row">

								<div id="rep_col_selected_color" class="dropp_here" ondrop="console.log('ondrop')" ondragend="console.log('ondragend')" style="min-width: 200px; width: 200px; height: 100px; border: solid 1px #828080;background-image: url('img/drag_color.svg');">
									<!-- <img style="z-index: -55" src="img/drag_color.svg"> -->
								</div>
								<div id="rep_col_replace_with" style="min-width: 100px; width: 200px; height: 100px; background-color: blue; margin-left: 10px;"></div>

						</div>
						<div class="nbed_col-6 nbed_row">
							<div class="nbed_col-6">
								<div class="nb_slidecontainer">
									<div>
										
										<div class="nb_slidecontainer">
											<input id="rep_col_shades" type="range" min="0" max="100" value="0" class="nb_slider_gray">
											<span id="rep_col_shades_label">(0%)</span>
										</div>
									</div>
								</div>
							</div>
							<div class="nbed_col-6">
								<button id="rep_col_eff_apply" class="nbed_btn_dark">apply</button>
								<button class="nbed_btn_light nbed_top_space">reset</button>
							</div>
						</div>
					</div>	
				</div>	

				<!-- BLACK THEME -->
				<div id="nbed_effect_black_theme" class="nbed_display_off coming_soon">
					<div class="nbed_row">
						<div class="nbed_col-3">
							<h4>Black Theme</h4>
						</div>
						<div class="nbed_col-6">
							<h4>Excluded Colors</h4>
						</div>
					</div>

					<div class="nbed_effects_controls">
						<div class="nbed_col-3">
								<h5>Choose the excluded colors</h5>
								<div class="dropp_here" style="min-width: 150px; width: 150px; height: 60px; border: solid 1px #828080; background-image: url('img/drag_color_min.svg');">
									<!-- <img style="z-index: -55" src="img/drag_color.svg"> -->
								</div>
						</div>
						<div class="nbed_col-6 nbed_row">
							<div class="nbed_col-6 nbed_exluded_color_place scrollbar">


										<div data-hex="000000" class="nbed_exluded_colors">
											<div class="nbed_exluded_colors_cont">
												<div class="nbed_exluded_color">
													
												</div>
												<div class="nbed_exluded_color_close">x</div>
												
											</div>
										</div>








							</div>
						</div>
						<div class="nbed_col-3">
							<button class="nbed_btn_dark">apply</button>
							<button class="nbed_btn_light nbed_top_space">reset</button>
						</div>
					</div>	
				</div>	



			</div>

		</div>
		<!-- SELECTED COLORS -->
		<div id="nbed_selected_colors" class="nbed_selected_colors nbed_line_top">
			<div class="nbed_selected_colors_filt">
				<div class="nbed_primary_colors_drop">
					<select type="dropdown" name="nbed_selected_colors_input" id="nb_primary_colors_filter">
						<option>Primary colors</option>
						<option>3</option>
						<option>6</option>
						<option>9</option>
						<option>12</option>
					</select>
					<div class="nbed_primary_colors_btn">
						<button class="nbed_btn_dark" id="clear_selected_colors">clear all</button>
					</div>
				</div>
			</div>
		</div>
			<div class="nbed_selected_colors_cont scrollbar dropp_here">
				
				<?php echo $nb_editor->selected_colors_tab(); ?>
				<div id="drag_here_helper_sc"></div>
			</div>

	</div>
	<!-- ALL COLORS -->
	<div id="nbed_all_colors" class="nbed_all_colors nbed_line_left">
		<div class="nbed_all_colors_cont">
			<div>
				<h3>Colors from file(<?php echo $nb_editor->all_colors_sum();?>)</h3>
				<input maxlength="6" type="text" name="color_search" id="search_all_colors" placeholder="Hex Color Codes">
			</div>
		</div>
			<div class="nbed_all_colors_place scrollbar">
				<?php echo $nb_editor->all_colors_tab(); ?>
			</div>

	</div>
</div>



<!-- MODALS -->

<div id="modal_ec" class="modal_edit_color">
  <div class="modal_edit_color_content">

    <div class="modal_ec_content_in mecci_flex">

    	<div class="mecci_width35">
    		<div class="mecci_color_ctn">
		    	<div id="mecci_clr_bfr" class="mecci_clr mecci_color_bfr"></div>
		    	<div id="mecci_clr_aft" class="mecci_clr mecci_color_aft">
		    	</div>
	    	</div>
    	</div>

    	<div class="mecci_65width">
    		<div class="mecci_colors_tools">
		    	<form id='mecci_mixer_control' class="mecci_colors_mixer">
		    		<div class="nb_slidecontainer">
		    			<input type="range" min="0" max="255" value="0" class="nb_slider_mixer_r" id="mecci_mixer_red">
		    			<span id="mecci_R_label">(0)</span>
		    		</div>
		    		<div class="nb_slidecontainer">
		    			<input type="range" min="0" max="255" value="0" class="nb_slider_mixer_g" id="mecci_mixer_green">
		    			<span id="mecci_G_label">(0)</span>
		    		</div>
		    		<div class="nb_slidecontainer">
		    			<input type="range" min="0" max="255" value="0" class="nb_slider_mixer_b" id="mecci_mixer_blue">
		    			<span id="mecci_B_label">(0)</span>
		    		</div>
		    	</form>
	    	</div>
	    	<div class="mecci_50height nbed_light_gray_bg">
		    	<div class="nbed_line_top" class="mecci_colors_btns_ctn" >
			    	<div class="mecci_colors_btns_in">
			    	<input maxlength="6" type="text" name="Hex Color" id="mecci_color_hex" placeholder="Hex Color Codes">
				    	<div class="mecci_colors_btns">
				    		<button id="mecci_exit_button" class="mecci_colors_btns_lb nbed_btn_light">Cancel</button>
					    	<button id="mecci_reset_button" class="mecci_colors_btns_lb nbed_btn_light">Reset</button>
					    	<button id="mecci_apply_button" class="mecci_colors_btns_rb nbed_btn_dark">Apply</button>
				    	</div>
			    	</div>
			    </div>
			</div>

    	</div>


    </div>
  </div>
</div>







</body>
<script src="../lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="../lib/jquery-ui-1.12.1/jquery.js"></script>
<script src="../lib/jquery-ui-1.12.1/jquery-ui.js"></script>
<script src="../lib/popper-1.16.0/popper.min.js"></script>
<script src="../lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./js/effects_controller.js"></script>
<script src="./js/loader.js"></script>
<script src="./js/editor_ajax.js"></script>
<script src="./js/hue_controler.js"></script>
<script src="./js/channel_mixer.js"></script>
</html>


