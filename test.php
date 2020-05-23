<?php
include_once('./classes/db_connection.php');
include_once('./classes/class_editor.php');
include_once('./classes/class_import_colors.php');

$nb_import_colors = new nb_import_colors();
$nb_editor = new nb_editor();

//$ok = $nb_import_colors->hsl_to_grb(360, 50, 50);

$clr = ['r'=> 0, 'g'=> 3, 'b'=> 2];



$hsl = $nb_import_colors->rgb_to_hsl($clr['r'], $clr['g'], $clr['b']);
$rgb = $nb_import_colors->hsl_to_grb($hsl['h'], $hsl['s'], $hsl['l']);
//$hsl = $nb_import_colors->rgb_to_hsl($rgb);

//$ok = $nb_editor->transformation_hue($trns, $hsl);

var_dump($rgb);







?>
