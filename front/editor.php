<!DOCTYPE html>
<?php
include_once('../classes/class_editor.php');

//filters

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../front/css/style.css">
	<link href="../lib/fontawesome-5.13.0/css/fontawesome.css" rel="stylesheet">
	<link href="../lib/fontawesome-5.13.0/css/brands.css" rel="stylesheet">
	<link href="../lib/fontawesome-5.13.0/css/solid.css" rel="stylesheet">

<title>css-translator</title>
</head>

<body>


<div id="loader" class="nb_loader_hide">
	<div class="nb_loader"></div>
</div>

	<?php
		$nb_editor = new nb_editor();
	?>

	<div id="page-content" class="container-fluid">

		<div class="row p-3 bg-dark">
			<div class="col-9 col-xl-10">
				<div class="col-6 p-0 pl-1">
					<h3 class="text-white">ZEMFIRA CSS</h3>
				</div>
			</div>
			<div class="col-3 col-xl-2 d-flex">
				<div class="pl-2">
					<button id="reset_file" type="button" class="btn btn-warning btn-block" name="reset">Reset</button>
				</div>
				<div class="pl-2">
					<button id="download_file" type="button" class="btn btn-success btn-block" name="download">Download</button>
				</div>
			</div>
		</div>



		<div class="row p-3 bg-light ">
			<div class="col-12 col-md-6 col-xl-8 p-3">
				<div class="card nb_card_shadow">
					<p class="card-header bg-dark text-white"><b>Primary colors</b></p>
						<div class="card-body ">
					<div class="row p-3 d-flex">

						<div class="col-12 d-flex">
							<div class="form-group col-4">
							  <label for="group_edit">Group edit</label>
							  <select id="nb_primary_colors_filter" class="form-control">
							    <option value="" selected>Select...</option>
							    <option value="3">3</option>
							    <option value="6">6</option>
							    <option value="9">9</option>
							    <option value="12">12</option>
							    <option value="15">15</option>
							    <option value="20">20</option>
							  </select>
							  <span class=""><small>*Automatic selection of most used colors</small></span>
							  <hr>
							  <div class="custom-control custom-checkbox col-12">
							    <input disabled="true" type="checkbox" class="custom-control-input" id="w_b_exc">
							    <label class="custom-control-label" for="w_b_exc">White / Black Exception</label>
							  </div>
							</div>



							<div class="col-4" >
							<form id='hue_control'>
								<span class="nb_range_label" for="customRange3" id="hue_label">HUE (0)</span>
								<div class="nb_slidecontainer">
									<input type="range" min="-180" max="180" value="0" class="nb_slider_hue" id="hue">
								</div>
								<span class="nb_range_label" for="customRange3" id="sat_label">SATURATION (0)</span>
								<div class="nb_slidecontainer">
									<input type="range" min="-100" max="100" value="0" class="nb_slider_sat" id="sat">
								</div>
								<span class="nb_range_label" for="customRange3" id="light_label">LIGHTNESS (0)</span>
								<div class="nb_slidecontainer">
									<input type="range" min="-100" max="100" value="0" class="nb_slider_light" id="light">
								</div>
							</form>
							</div>

							<div class="form-group col-4">
								<div class="custom-control custom-checkbox col-12">
								  <input type="radio" checked="true" class="custom-control-input" id="apply_selected_only" name="only_selected">
								  <label class="custom-control-label" for="apply_selected_only">Apply only to selected colors</label>
								</div>
								<div class="custom-control custom-checkbox col-12">
								  <input type="radio" class="custom-control-input" id="apply_all_colors" name="only_selected">
								  <label class="custom-control-label" for="apply_all_colors">Apply to all colors in file</label>
								</div>
								<div class="custom-control custom-checkbox col-12">
								  <input disabled="true" type="radio" class="custom-control-input" id="apply_similar_colors" name="only_selected">
								  <label class="custom-control-label" for="apply_similar_colors">Apply to similar colors in file</label>
								</div>
								<div class="col-12 pt-3">
									<button id="apply_changes" type="button" class="btn btn-sm btn-primary btn-block" name="download">apply</button>
								</div>
								<div class="col-12 pt-1">
									<button id="hue_control_reset" type="button" class="btn btn-sm btn-secondary btn-block" name="download">reset</button>
								</div>

							</div>


						</div>

					</div>
					<hr>
					<div class="row p-3 d-flex nb_selected_color_tab" id="nb_selected_color">
						<?php echo $nb_editor->selected_colors_tab(); ?>
					</div>
					</div>
				</div>
			</div>

			<div class="col-12 col-md-6 col-xl-4 p-3 bg-light">
				<div class="col-12">
					<div class="card nb_card_shadow ">
						<p class="card-header bg-dark text-white"><b>All colors from file</b></p>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="basic-addon1">#</span>
							</div>
							<input type="text" id="search_all_colors" class="form-control" placeholder="Hex Color Codes" aria-label="Hex Color Codes" aria-describedby="basic-addon1">
						</div>
						<div id="nb_all_colors_tab" class="card-body nb_all_colors_tab">
						  <?php echo $nb_editor->all_colors_tab(); ?>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

	<!-- Modals -->
	<div id="replace_color_modal" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 id="replace_color_modal_title" class="modal-title"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p id="replace_color_title"></p>
	        <div class="col-12 d-flex">
		        <div class="col-5">
		        	<div id="replace_old_color" class="col-12 " style="background-color: black; height: 50px">
		        	</div>
		        	<div id="replace_new_color" class="col-12 " style="background-color: black; height: 50px">
		        	</div>
		        	<div class="col-12 p-0 pt-1">
			        	<div class="input-group mb-3">
			        		<div class="input-group-prepend">
			        			<span class="input-group-text" id="basic-addon1">#</span>
			        		</div>
			        		<input type="text" id="replace_hex_color_code" maxlength="6" class="form-control" value="5ff154" aria-label="Hex Color Codes" aria-describedby="basic-addon1">
			        	</div>
		        	</div>
	   			</div>
		        <div class="col-7">
		        	<form id='rgb_control'>
		        		<span class="" id="hue_label_red"><b>R</b>ED (0)</span>
		        		<div class="nb_slidecontainer">
		        			<input type="range" min="0" max="255" value="0" class="nb_slider_red" id="rgb_range_red">
		        		</div>
		        		<span class="" id="sat_label_green"><b>G</b>REEN (0)</span>
		        		<div class="nb_slidecontainer">
		        			<input type="range" min="0" max="255" value="0" class="nb_slider_green" id="rgb_range_green">
		        		</div>
		        		<span class="" id="light_label_blue"><b>B</b>LUE (0)</span>
		        		<div class="nb_slidecontainer">
		        			<input type="range" min="0" max="255" value="0" class="nb_slider_blue" id="rgb_range_blue">
		        		</div>
		        	</form>
	   			</div>
	        </div>
	      </div>
	      <div class="modal-footer">
	      	<button id="replace_color_reset" type="button" class="btn btn-secondary">Reset</button>
	        <button id="replace_color_save" type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>



</body>

<script src="../lib/jquery.3.5.1/jquery-3.5.1.min.js"></script>
<script src="../lib/popper-1.16.0/popper.min.js"></script>
<script src="../lib/bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
<script src="./js/editor_ajax.js"></script>
<script src="./js/hue_controler.js"></script>


</html>

</html>



