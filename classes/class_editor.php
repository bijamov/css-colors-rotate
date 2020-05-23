<?php
include_once('clients_connection.php');
include_once('class_import_colors.php');
class nb_editor
{

public function all_colors_tab($hex='')
{

	$html = '';
	$query = db::$conn->query("SELECT id, new_hex FROM nb_colors_work_tbl WHERE new_hex LIKE '%".$hex."%' ORDER BY hsl_h , hsl_l, hsl_s");
	while ($clr = mysqli_fetch_assoc($query))
	{

		$html .= '	<div data-hex="'.$clr['new_hex'].'" class="row nb_all_colors_row">
						<div class="col-12 d-flex">
							<div class="col-3 d-flex">
								<span data-id="'.$clr['id'].'" class="px-2 add_to_selected">
								<i class="fas fa-plus nb_pointer"></i>
								</span>
								<span class="px-2"><i id="rep_'.$clr['new_hex'].'" class="fas fa-cog text-center nb_pointer nb-replace_color"></i></span>
							</div>

							<div class="col-9 mb-2 text-white" style="background-color: #'.$clr['new_hex'].'">
								<span>#'.$clr['new_hex'].'</span>
							</div>
						</div>
					</div>';
	}
	return $html;
}

public function selected_colors_tab($many='0')
{
	$html = '';

	$query = db::$conn->query("SELECT id_work_color FROM nb_selected_colors");
	if ($query)
	{
		$selected = [];
		while ($entry = mysqli_fetch_assoc($query)) {
			array_push($selected, $entry['id_work_color']);
		}
	}
	else
	{
		$selected = [];
	}


	if ($selected != [] AND $many == '0')
	{
		foreach ($selected as $id) {
			$query = db::$conn->query("SELECT * FROM nb_colors_work_tbl WHERE id = '".$id."'");
			while ($clr = mysqli_fetch_assoc($query))
			{

				if ($clr['new_hex'] != '') {
					$hex = $clr['new_hex'];
				}
				else
				{
					$hex = $clr['hex'];
				}

				$html .= $this->create_selected_color_html($id);

			}
		}
	}
	else
	{
		$query = db::$conn->query("DELETE FROM nb_selected_colors");
		$query = db::$conn->query("SELECT * FROM nb_colors_work_tbl ORDER BY repetition  DESC LIMIT ".$many);
		while ($clr = mysqli_fetch_assoc($query))
		{

			if ($clr['new_hex'] != '') {
				$hex = $clr['new_hex'];
			}
			else
			{
				$hex = $clr['hex'];
			}

			$html .= $this->create_selected_color_html($clr['id']);

			$query1 = db::$conn->query("INSERT INTO nb_selected_colors (id_work_color) VALUES('".$clr['id']."')");
		}


	}

	return $html;
}

public function add_to_selected($id)
{
	$query = db::$conn->query("INSERT INTO nb_selected_colors (id_work_color) VALUES('".$id."')");
}

public function remove_color_from_selected($id)
{
	$query = db::$conn->query("DELETE FROM nb_selected_colors WHERE id_work_color = '".$id."'");
}


public function transformation_hue($hue_trf, $hsl)
{
	$h = $hue_trf['h'];
	$s = $hue_trf['s'];
	$l = $hue_trf['l'];

	if (($h == 0 OR $h == 180 OR $h == -180) AND $s == 0 AND $l == 0)
		{
			return $arrayName = array('h' => $hsl['h'], 's' => $hsl['s'], 'l' => $hsl['l']);
		}

	$new_h = $hsl['h'];
	$new_s = $hsl['s'];
	$new_l = $hsl['l'];

	$new_h = $new_h + $h;
	if ($new_h > 360)
	{
		$new_h = $new_h - 360;
	}
	if ($new_h < 0)
	{
		$new_h = $new_h + 360;
	}

	$new_s = $new_s + $s;
	if ($new_s > 100)
	{
		$new_s = 100;
	}
	if ($new_s < 0)
	{
		$new_s = 0;
	}

	$new_l = $new_l + $l;
	if ($new_l > 100)
	{
		$new_l = 100;
	}
	if ($new_l < 0)
	{
		$new_l = 0;
	}

	return $arrayName = array('h' => $new_h, 's' => $new_s, 'l' => $new_l);
}

public function create_selected_color_html($id)
{

	$query = db::$conn->query("SELECT * FROM nb_colors_work_tbl WHERE id = ".$id);
	$clr = mysqli_fetch_assoc($query);

	$html = '	<div id="S'.$clr['id'].'" class="col-12 col-sm-6 col-xl-3 mb-2 nb-selected">
					<div class="card">

						  <p class="card-header">
						  	<i id="rep_'.$clr['new_hex'].'" class="nb-replace_color fas fa-cog pr-2 nb_color_push_settings"></i>
						  	#'.$clr['new_hex'].'
						  	<i id="rem_'.$clr['id'].'" class="nb-selected_rem fas fa-times pr-2 nb_color_push_settings" style="float: right"></i>
						  </p>
							<div class="card-body">
						  <div id="clr_'.$clr['id'].'" data-h="'.$clr['hsl_h'].'" data-s="'.$clr['hsl_s'].'" data-l="'.$clr['hsl_l'].'" class="card-text nb-color-shape nb-selected-color" style="background-color: rgb('.$clr['rgb_r'].', '.$clr['rgb_g'].', '.$clr['rgb_b'].') "></div>
						</div>
					</div>
				</div>';

				return $html;
}

public function replace_color_rgb($r, $g, $b, $old_color)
{

	$nb_import_colors = new nb_import_colors();
	$hsl = $nb_import_colors->rgb_to_hsl( $r, $g, $b );
	$hex = $nb_import_colors->rgb_to_hex( $r, $g, $b );

	$query = db::$conn->query("UPDATE nb_colors_work_tbl
		SET new_hex = '".$hex."',
		rgb_r = '".$r."',
		rgb_g = '".$g."',
		rgb_b = '".$b."',
		hsl_h = '".$hsl['h']."',
		hsl_s = '".$hsl['s']."',
		hsl_l = '".$hsl['l']."'
	 WHERE new_hex = '".$old_color."'");

}

}
?>
