<?php
include_once('clients_connection.php');
include_once('class_import_colors.php');
class nb_editor
{

public function all_colors_tab($hex='')
{

	$html = '';
	$query = db::$conn->query("SELECT * FROM nb_colors_work_tbl WHERE new_hex LIKE '%".$hex."%' AND user = '".$_SESSION['user_id']."' ORDER BY hsl_h , hsl_l, hsl_s");
	while ($clr = mysqli_fetch_assoc($query))
	{


		$html .= '<div id="color_id-'.$clr['id'].'" data-r="'.$clr['rgb_r'].'" data-g="'.$clr['rgb_g'].'" data-b="'.$clr['rgb_b'].'" data-hex="'.$clr['new_hex'].'" data-id="'.$clr['id'].'" id="rep_'.$clr['new_hex'].'" class="nbed_all_colors_single_div drag_me ">
					<div class="nbed_all_colors_single_cont">
						<div class="nbed_all_colors_single_color" style="background-color: #'.$clr['new_hex'].'"></div>
					</div>
					
					<span># '.strtoupper($clr['new_hex']).'</span>
					<div class="nbed_all_colors_icons">
						<span><img src="img/drag.svg"></span>
						<span class="schb_edit drag_me_notme" data-id="'.$clr['id'].'" style="cursor: pointer;"><img src="img/pen.svg"></span>
					</div>
				</div>';






	}
	return $html;
}

public function all_colors_sum()
{


	$query = db::$conn->query("SELECT count(id) as id FROM nb_colors_work_tbl WHERE user = '".$_SESSION['user_id']."'");
	while ($clr = mysqli_fetch_assoc($query))
	{
		$count = $clr['id'];
	}
	if (isset($count) AND $count != '')
	{
		return $count;
	}
	else
	{
		return '0';
	}
	
}

public function selected_colors_tab($many='0')
{
	$html = '';

	$query = db::$conn->query("SELECT id_work_color FROM nb_selected_colors WHERE user = '".$_SESSION['user_id']."'");
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
			$query = db::$conn->query("SELECT * FROM nb_colors_work_tbl WHERE id = '".$id."' AND user = '".$_SESSION['user_id']."'");
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
		$query = db::$conn->query("DELETE FROM nb_selected_colors WHERE user = '".$_SESSION['user_id']."'");
		$query = db::$conn->query("SELECT * FROM nb_colors_work_tbl WHERE user = '".$_SESSION['user_id']."' ORDER BY repetition  DESC LIMIT ".$many);
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

			$query1 = db::$conn->query("INSERT INTO nb_selected_colors (user, id_work_color) VALUES('".$_SESSION['user_id']."', '".$clr['id']."')");
		}


	}

	return $html;
}

public function add_to_selected($id)
{
	$query = db::$conn->query("SELECT id_work_color FROM nb_selected_colors WHERE user = '".$_SESSION['user_id']."' AND id_work_color = ".$id);
	$color = mysqli_fetch_assoc($query);
	if($color != '')
	{
		return;
	}
	else
	{
		$query = db::$conn->query("INSERT INTO nb_selected_colors (user, id_work_color) VALUES('".$_SESSION['user_id']."', '".$id."')");
	}

	
}


public function remove_all_selected()
{
	$query = db::$conn->query("DELETE FROM nb_selected_colors WHERE user = '".$_SESSION['user_id']."'");
}

public function remove_color_from_selected($id)
{
	$query = db::$conn->query("DELETE FROM nb_selected_colors WHERE id_work_color = '".$id."' AND user = '".$_SESSION['user_id']."'");

}


public function transformation_hue($hue_trf, $hsl)
{
	$h = $hue_trf['h'];
	$s = $hue_trf['s'];
	$l = $hue_trf['l'];

	if ($h == 0 AND $s == 0 AND $l == 0)
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

public function transformation_channel_mixer($rgb_trf, $rgb)
{

	$old_r = $rgb['r'];
	$old_g = $rgb['g'];
	$old_b = $rgb['b'];

	$new_r = $old_r + $rgb_trf['r'];
	if ($new_r > 255)
	{
		$new_r = 255;
	}elseif ($new_r < 0)
	{
		$new_r = 0;
	}

	$new_g = $old_g + $rgb_trf['g'];
	if ($new_g > 255)
	{
		$new_g = 255;
	}elseif ($new_g < 0)
	{
		$new_g = 0;
	}

	$new_b = $old_b + $rgb_trf['b'];
	if ($new_b > 255)
	{
		$new_b = 255;
	}elseif ($new_b < 0)
	{
		$new_b = 0;
	}

	return $arrayName = array('r' => $new_r, 'g' => $new_g, 'b' => $new_b);
}

public function create_selected_color_html($id)
{

	$query = db::$conn->query("SELECT * FROM nb_colors_work_tbl WHERE user = '".$_SESSION['user_id']."' AND id = ".$id);
	$clr = mysqli_fetch_assoc($query);

	$html = '	<div class="nbed_selected_single_colors nb-selected-color_S nb-color-shape nb-selected-color" id="'.$clr['id'].'" data-R="'.$clr['rgb_r'].'" data-G="'.$clr['rgb_g'].'" data-B="'.$clr['rgb_b'].'" data-h="'.$clr['hsl_h'].'" data-s="'.$clr['hsl_s'].'" data-l="'.$clr['hsl_l'].'" style="background-color: rgb('.$clr['rgb_r'].', '.$clr['rgb_g'].', '.$clr['rgb_b'].') ">
	<div class="selected_colors_hover">
	<div class="selected_colors_hover_cnt">
	<div data-id="'.$clr['id'].'" class="selected_colors_hover_btn schb_remove"><img src="./img/delete-icon.svg"></div>
	<div data-id="'.$clr['id'].'" class="selected_colors_hover_btn schb_edit"><img src="./img/pen_selec.svg"></div>
	</div>
	</div>
	</div>

				';

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
	 WHERE user = '".$_SESSION['user_id']."' AND new_hex = '".$old_color."'");

}

}
?>
