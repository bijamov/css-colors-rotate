<?php
include_once('../../classes/db_connection.php');
include_once('../../classes/class_editor.php');
include_once('../../classes/class_import_colors.php');



switch ($_POST['m']) {
	case '1':
		apply_hue_transformation();
		break;
	case '2':
		reset_button();
		break;
	case '3':
		apply_hue_transformation_live();
		break;
	case '4':
		add_color_to_selected();
		break;
	case '5':
		all_colors_search();
		break;
	case '6':
		remove_color_from_selected();
		break;
	case '7':
		primary_colors_filter();
		break;
	case '8':
		replace_color_rgb();
		break;
	case '9':
		download_file();
		break;

}

/* CUSTOM FUNCTION */
function apply_hue_transformation() //m = 1
{
	//	$_POST['hue']
	//	$_POST['selected']

	$nb_editor = new nb_editor();
	$nb_import_colors = new nb_import_colors();


	if(isset($_POST['hue']) AND $_POST['hue'] != [])
	{

		$hue = $_POST['hue'];

		if ($_POST['apply_all_colors'] == 1) // transformation to all
		{

			$query1 = db::$conn->query("SELECT hsl_h AS h, hsl_s AS s, hsl_l AS l, id AS id FROM nb_colors_work_tbl");

			while ($hsl = mysqli_fetch_assoc($query1))
			{
				$new_hsl = $nb_editor->transformation_hue($hue, $hsl);
				$array_rgb = $nb_import_colors->hsl_to_grb($new_hsl['h'], $new_hsl['s'], $new_hsl['l']);
				$new_hex = $nb_import_colors->rgb_to_hex($array_rgb['r'], $array_rgb['g'], $array_rgb['b']);

				$query = db::$conn->query("UPDATE nb_colors_work_tbl
					SET	new_hex = '".$new_hex."',
						rgb_r = '".$array_rgb['r']."',
						rgb_g = '".$array_rgb['g']."',
						rgb_b = '".$array_rgb['b']."',
						hsl_h = '".$new_hsl['h']."',
						hsl_s = '".$new_hsl['s']."',
						hsl_l = '".$new_hsl['l']."'
					WHERE id = '".$hsl['id']."'");
			}
		}
		elseif($_POST['apply_selected_only'] == 1)
		{

			# transformation to only selected

			foreach ($_POST['selected'] as $id)
			{
				$query = db::$conn->query("SELECT hsl_h AS h, hsl_s AS s, hsl_l AS l FROM nb_colors_work_tbl WHERE id = ".$id);
				$hsl = mysqli_fetch_assoc($query);

				$new_hsl = $nb_editor->transformation_hue($hue, $hsl);
				$array_rgb = $nb_import_colors->hsl_to_grb($new_hsl['h'], $new_hsl['s'], $new_hsl['l']);
				$new_hex = $nb_import_colors->rgb_to_hex($array_rgb['r'], $array_rgb['g'], $array_rgb['b']);

				$query = db::$conn->query("UPDATE nb_colors_work_tbl
					SET	new_hex = '".$new_hex."',
						rgb_r = '".$array_rgb['r']."',
						rgb_g = '".$array_rgb['g']."',
						rgb_b = '".$array_rgb['b']."',
						hsl_h = '".$new_hsl['h']."',
						hsl_s = '".$new_hsl['s']."',
						hsl_l = '".$new_hsl['l']."'
					WHERE id = ".$id);

			}

		}

	}
}

/* FUNCTION import file*/
function reset_button() //m = 2
{
		$nb_import_colors = new nb_import_colors();
		$nb_import_colors->clear_tables();
		$file = $nb_import_colors->read_file();
		$nb_import_colors->import_hex_to_database($file);
		$nb_import_colors->import_all_colors_model();
		$nb_import_colors->copy_table();
}

function apply_hue_transformation_live() //m = 3
{

	$nb_editor = new nb_editor();
	$nb_import_colors = new nb_import_colors();


	if(isset($_POST['hue']) AND $_POST['hue'] != [])
	{

		$hue = $_POST['hue'];

		$query = db::$conn->query("SELECT hsl_h AS h, hsl_s AS s, hsl_l AS l FROM nb_colors_work_tbl WHERE id = ".$_POST['selected']);
		$hsl = mysqli_fetch_assoc($query);

		$new_hsl = $nb_editor->transformation_hue($hue, $hsl);
		$array_rgb = $nb_import_colors->hsl_to_grb($new_hsl['h'], $new_hsl['s'], $new_hsl['l']);
		$new_hex = $nb_import_colors->rgb_to_hex($array_rgb['r'], $array_rgb['g'], $array_rgb['b']);

		echo $new_hex;

	}
}

function add_color_to_selected() //m = 4
{
	$nb_editor = new nb_editor();
	$nb_editor->add_to_selected($_POST['id']);
	$html = $nb_editor->create_selected_color_html($_POST['id']);
	echo $html;
}

function all_colors_search() //m = 5
{
	$nb_editor = new nb_editor();
	$html = $nb_editor->all_colors_tab($_POST['hex']);
	echo $html;
}

function remove_color_from_selected() //m = 6
{
	$nb_editor = new nb_editor();
	$html = $nb_editor->remove_color_from_selected($_POST['id']);
}

function primary_colors_filter() //m = 7
{
	$nb_editor = new nb_editor();
	$nb_editor->selected_colors_tab($_POST['many']);
}

function replace_color_rgb() //m = 8
{
	$nb_editor = new nb_editor();
	$nb_editor->replace_color_rgb($_POST['r'], $_POST['g'], $_POST['b'], $_POST['old_color']);
}

function download_file() //m = 9
{
	$nb_import_colors = new nb_import_colors();
	echo($nb_import_colors->write_file());
}


?>
