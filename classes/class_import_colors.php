<?php
include_once('clients_connection.php');
class nb_import_colors
{
	public $nb_colors_original = 'nb_colors_original';
	public $nb_colors_position = 'nb_colors_position';
	public $nb_colors_work_tbl = 'nb_colors_work_tbl';
	public $nb_selected_colors = 'nb_selected_colors';

	public $path = '../../uploads/adminlte.css';
	public $filename = 'adminlte.css';
	public $username = 'LedScorp';

//INITIALIZE
	public function initialize($path, $filename, $username)
	{

		$this->clear_tables();
		$file = $this->read_file($this->path);
		$this->import_hex_to_database($file,$this->path);
		$this->import_all_colors_model();
		$this->copy_table();
	}


//FILES
	public function read_file() //return array[['string'],['position'],['model']]
	{

		$path = $this->path;
		//$file = fopen($path, 'r') or die("Unable to open file!");
		//$file = fread($file,filesize($path));
		//fclose($file);

		$file = file_get_contents($path);


		$export_array = [];
		$entry = [];


		//Hexadecimal colors
		preg_match_all('/#[0123456789abcdefABCDEF]{6}|#[0123456789abcdefABCDEF]{3}/u', $file, $array_hex, PREG_OFFSET_CAPTURE);

		foreach ($array_hex[0] as $key)
		{
			$entry = [];
			$entry['string'] = $key[0];
			$entry['position'] = $key[1];
			$entry['model'] = 'hex';
			array_push($export_array, $entry);
		}

		//RGB colors
		preg_match_all('/rgb\s*\(\s*[0-9]{1,3}\s*,\s*[0-9]{1,3}\s*,\s*[0-9]{1,3}\s*\)/u', $file, $array_rgb1, PREG_OFFSET_CAPTURE);

		foreach ($array_rgb1[0] as $key)
		{
			$entry = [];
			$entry['string'] = $key[0];
			$entry['position'] = $key[1];
			$entry['model'] = 'rgb';
			array_push($export_array, $entry);
		}


		//RGB colors
		preg_match_all('/rgb\s*\(\s*[0-9]{1,3}%\s*,\s*[0-9]{1,3}%\s*,\s*[0-9]{1,3}%\s*\)/u', $file, $array_rgb2, PREG_OFFSET_CAPTURE);

		foreach ($array_rgb2[0] as $key)
		{
			$entry = [];
			$entry['string'] = $key[0];
			$entry['position'] = $key[1];
			$entry['model'] = 'rgb';
			array_push($export_array, $entry);
		}

		//RGBA colors
		preg_match_all('/rgba\s*\(\s*[0-9]{1,3}\s*,\s*[0-9]{1,3}\s*,\s*[0-9]{1,3}\s*,\s*[0123456789\/.]*\s*\)/u', $file, $array_rgba1, PREG_OFFSET_CAPTURE);

		foreach ($array_rgba1[0] as $key)
		{
			$entry = [];
			$entry['string'] = $key[0];
			$entry['position'] = $key[1];
			$entry['model'] = 'rgba';
			array_push($export_array, $entry);
		}

		//RGBA colors
		preg_match_all('/rgba\s*\(\s*[0-9]{1,3}%\s*,\s*[0-9]{1,3}%\s*,\s*[0-9]{1,3}%\s*,\s*((\s*[0-9]{1,3}\%\s*)?|(\s*[0123456789\/.]*\s*)?)*\s*\)/u', $file, $array_rgba2, PREG_OFFSET_CAPTURE);

		foreach ($array_rgba2[0] as $key)
		{
			$entry = [];
			$entry['string'] = $key[0];
			$entry['position'] = $key[1];
			$entry['model'] = 'rgba';
			array_push($export_array, $entry);
		}

		//HSL colors
		preg_match_all('/hsl\(\s*[0-9]{1,3}\s*\,\s*[0-9]{1,3}\%\s*\,\s*[0-9]{1,3}\%\s*\)/u', $file, $array_hsl, PREG_OFFSET_CAPTURE);

		foreach ($array_hsl[0] as $key)
		{
			$entry = [];
			$entry['string'] = $key[0];
			$entry['position'] = $key[1];
			$entry['model'] = 'hsl';
			array_push($export_array, $entry);
		}

		//HSLA colors
		preg_match_all('/hsla\(\s*[0-9]{1,3}\s*\,\s*[0-9]{1,3}\%\s*\,\s*[0-9]{1,3}\%\s*\,((\s*[0-9]{1,3}\%\s*)?|(\s*[0123456789\.]*\s*)?)\s*\)/u', $file, $array_hsla, PREG_OFFSET_CAPTURE);

		foreach ($array_hsla[0] as $key)
		{
			$entry = [];
			$entry['string'] = $key[0];
			$entry['position'] = $key[1];
			$entry['model'] = 'hsla';
			array_push($export_array, $entry);
		}

		return $export_array;
	}

	public function write_file()
	{
		$path = $this->path;
		$new_file = file_get_contents($path);

		$query = db::$conn->query("SELECT string, position, model, hex, alpha FROM ".$nb_colors_position." ORDER BY position DESC");
		while ($clr = mysqli_fetch_assoc($query))
		{
			$query2 = db::$conn->query("SELECT new_hex FROM ".$nb_colors_work_tbl." WHERE hex = '".$clr['hex']."'");
			$new_hex = mysqli_fetch_assoc($query2);


			$end_of_file = mb_strlen($new_file, '8bit');
			$str_len = mb_strlen($clr['string'], '8bit');
			$position = $clr['position'];
			$position = (int)$position;
			$end_position = $position + $str_len;
			$end_position = $end_of_file - $end_position;
			$end_position = -$end_position;

			switch ($clr['model']) {
				case '1'://HEX
					$new_file = substr($new_file, 0, $position).$this->create_hex_color($new_hex['new_hex']).substr($new_file, $end_position);
					break;

				case '2'://RGB
					$new_file = substr($new_file, 0, $position).$this->create_rgb_color($new_hex['new_hex']).substr($new_file, $end_position);
					break;

				case '3'://RGBA
					$new_file = substr($new_file, 0, $position).$this->create_rgba_color($new_hex['new_hex'], $clr['alpha']).substr($new_file, $end_position);
					break;

				case '4'://HSL
					$new_file = substr($new_file, 0, $position).$this->create_hsl_color($new_hex['new_hex']).substr($new_file, $end_position);
					break;

				case '5'://HSLA
					$new_file = substr($new_file, 0, $position).$this->create_hsla_color($new_hex['new_hex'], $clr['alpha']).substr($new_file, $end_position);
					break;
			}
		}
		$filename = 'zemfira-css-'.date('m-d').'.css';
		$myfile = fopen('../../downloads/'.$filename, "w") or die("Unable to open file!");
		fwrite($myfile, $new_file);
		fclose($myfile);
		return $filename;
	}

//CONVERT COLORS

	public function rgb_to_hsl( $r, $g, $b )
	{

		$r /= 255;
		$g /= 255;
		$b /= 255;

	    $max = max( $r, $g, $b );
		$min = min( $r, $g, $b );

		$h;
		$s;
		$l = ( $max + $min ) / 2;
		$d = $max - $min;

	    	if( $d == 0 ){
	        	$h = $s = 0; // achromatic
	    	} else {
	        	$s = $d / ( 1 - abs( 2 * $l - 1 ) );

			switch( $max ){
		            case $r:
		            	$h = 60 * fmod( ( ( $g - $b ) / $d ), 6 );
	                        if ($b > $g) {
		                    $h += 360;
		                }
		                break;

		            case $g:
		            	$h = 60 * ( ( $b - $r ) / $d + 2 );
		            	break;

		            case $b:
		            	$h = 60 * ( ( $r - $g ) / $d + 4 );
		            	break;
		        }
		}
		return array( 'h' => round($h), 's' => round($s*100), 'l' => round($l*100) );
	}

	public function rgb_to_hex( $r, $g, $b )
	{
		$r = dechex($r);
		$g = dechex($g);
		$b = dechex($b);
		if(strlen($r) == 1) { $r = '0'.$r; };
		if(strlen($g) == 1) { $g = '0'.$g; };
		if(strlen($b) == 1) { $b = '0'.$b; };

		$hex = $r.$g.$b;
		return $hex;
	}

	public function hsl_to_grb( $h, $s, $l )
	{
			$hue = $h;
			$sat = $s;
			$lum = $l;

			if ($hue == 360) {$hue = 0;}

			$hue /= 360;
			$sat /= 100;
			$lum /= 100;

			$r = $lum;
			$g = $lum;
			$b = $lum;
			$v = ($lum <= 0.5) ? ($lum * (1.0 + $sat)) : ($lum + $sat - $lum * $sat);
		    if ($v > 0)
		    {
				$m;
				$sv;
				$sextant;
				$fract;
				$vsf;
				$mid1;
				$mid2;

				$m = $lum + $lum - $v;
				$sv = ($v - $m ) / $v;
				$hue *= 6.0;
				$sextant = floor($hue);
				$fract = $hue - $sextant;
				$vsf = $v * $sv * $fract;
				$mid1 = $m + $vsf;
				$mid2 = $v - $vsf;

				switch ($sextant)
				{
				    case 0:
				          $r = $v;
				          $g = $mid1;
				          $b = $m;
				          break;
				    case 1:
				          $r = $mid2;
				          $g = $v;
				          $b = $m;
				          break;
				    case 2:
				          $r = $m;
				          $g = $v;
				          $b = $mid1;
				          break;
				    case 3:
				          $r = $m;
				          $g = $mid2;
				          $b = $v;
				          break;
				    case 4:
				          $r = $mid1;
				          $g = $m;
				          $b = $v;
				          break;
				    case 5:
				          $r = $v;
				          $g = $m;
				          $b = $mid2;
				          break;
				}
		    }

			$rgb = array('r' => round($r * 255.0), 'g' => round($g * 255.0), 'b' => round($b * 255.0));
			return $rgb;
	}


//CONVERT STRING TO HEX

	public function hex_to_clear_hex($string) //return string[6]
	{
		if (strlen($string) == 7 AND $string[0] == '#')
		{
			$hex = substr($string, 1);
		}
		elseif(strlen($string) == 4 AND $string[0] == '#')
		{
			$hex = $string[1].$string[1].$string[2].$string[2].$string[3].$string[3];
		}

		return strtolower($hex);
	}

	public function rgb_to_clear_hex($string) //return string[6]
	{
		if (substr_count($string, '%') == 0 AND strlen($string) > 9)
		{
			preg_match('/rgb\(\s*(\s*[0-9]{1,3})\s*,\s*(\s*[0-9]{1,3})\s*,\s*(\s*[0-9]{1,3})\)\s*/', $string, $rgb);

			$r = dechex($rgb[1]);
			$g = dechex($rgb[2]);
			$b = dechex($rgb[3]);

			if(strlen($r) == 1) { $r = '0'.$r; };
			if(strlen($g) == 1) { $g = '0'.$g; };
			if(strlen($b) == 1) { $b = '0'.$b; };

			$hex = $r.$g.$b;
		}
		elseif(substr_count($string, '%') == 3 AND strlen($string) > 11)
		{
			preg_match('/rgb\(\s*(\s*[0-9]{1,3})%\s*,\s*(\s*[0-9]{1,3})%\s*,\s*(\s*[0-9]{1,3})%\)\s*/', $string, $rgb);

			$r = dechex($rgba[1]*2.55);
			$g = dechex($rgba[2]*2.55);
			$b = dechex($rgba[3]*2.55);

			if(strlen($r) == 1) { $r = '0'.$r; };
			if(strlen($g) == 1) { $g = '0'.$g; };
			if(strlen($b) == 1) { $b = '0'.$b; };

			$hex = $r.$g.$b;
		}

		if(strlen($hex) == 6)
		{
			return $hex;
		}
	}

	public function rgba_to_clear_hex($string) //return array[['hex'],['alpha']]
	{
		if (substr_count($string, '%') == 0 AND strlen($string) > 11)
		{
			$alpha = null;
			preg_match('/rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9.]*)\s*\)/', $string, $rgba);

			$r = dechex($rgba[1]);
			$g = dechex($rgba[2]);
			$b = dechex($rgba[3]);

			if(strlen($r) == 1) { $r = '0'.$r; };
			if(strlen($g) == 1) { $g = '0'.$g; };
			if(strlen($b) == 1) { $b = '0'.$b; };

			$alpha = round($rgba[4]*100);
			$hex = $r.$g.$b;
		}
		elseif(substr_count($string, '%') == 1 AND strlen($string) > 13)
		{
			preg_match('/rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})%\s*\)/', $string, $rgba);

			$r = dechex($rgba[1]);
			$g = dechex($rgba[2]);
			$b = dechex($rgba[3]);

			if(strlen($r) == 1) { $r = '0'.$r; };
			if(strlen($g) == 1) { $g = '0'.$g; };
			if(strlen($b) == 1) { $b = '0'.$b; };

			$alpha = $rgba[4];
			$hex = $r.$g.$b;
		}
		elseif(substr_count($string, '%') == 3 AND strlen($string) > 15)
		{
			preg_match('/rgba\(\s*([0-9]{1,3})%\s*,\s*([0-9]{1,3})%\s*,\s*([0-9]{1,3})%\s*,\s*([0-9.]*)\s*\)/', $string, $rgba);

			$r = dechex($rgba[1]*2.55);
			$g = dechex($rgba[2]*2.55);
			$b = dechex($rgba[3]*2.55);

			if(strlen($r) == 1) { $r = '0'.$r; };
			if(strlen($g) == 1) { $g = '0'.$g; };
			if(strlen($b) == 1) { $b = '0'.$b; };

			$alpha = round($rgba[4]*100);
			$hex = $r.$g.$b;
		}
		elseif(substr_count($string, '%') == 4 AND strlen($string) > 16)
		{
			preg_match('/rgba\(\s*([0-9]{1,3})%\s*,\s*([0-9]{1,3})%\s*,\s*([0-9]{1,3})%\s*,\s*([0-9]{1,3})%\s*\)/', $string, $rgba);

			$r = dechex($rgba[1]*2.55);
			$g = dechex($rgba[2]*2.55);
			$b = dechex($rgba[3]*2.55);

			if(strlen($r) == 1) { $r = '0'.$r; };
			if(strlen($g) == 1) { $g = '0'.$g; };
			if(strlen($b) == 1) { $b = '0'.$b; };

			$alpha = $rgba[4];
			$hex = $r.$g.$b;
		}

		if(strlen($hex) == 6)
		{
			return array('hex' => $hex, 'alpha' => $alpha);
		}
	}

	public function hsl_to_clear_hex($string) //return string[6]
	{
		preg_match('/hsl\(\s*(\s*[0-9]{1,3})\s*,\s*(\s*[0-9]{1,3})%\s*,\s*(\s*[0-9]{1,3})%\)\s*/', $string, $hsl);
			$hue = $hsl[1];
			$sat = $hsl[2];
			$lum = $hsl[3];

			$rgb = hsl_to_grb( $hue, $sat, $lum);

				if(strlen($rgb['r']) == 1) { $rgb['r'] = '0'.$rgb['r']; };
				if(strlen($rgb['g']) == 1) { $rgb['g'] = '0'.$rgb['g']; };
				if(strlen($rgb['b']) == 1) { $rgb['b'] = '0'.$rgb['b']; };

				$hex = $rgb['r'].$rgb['g'].$rgb['b'];


			if(strlen($hex) == 6)
			{
				return $hex;
			}
	}

	public function hsla_to_clear_hex($string) //return array[['hex'],['alpha']]
	{
		if (substr_count($string, '%') == 2 AND strlen($string) > 12)
		{
			preg_match('/hsla\(\s*(\s*[0-9]{1,3})\s*,\s*(\s*[0-9]{1,3})%\s*,\s*(\s*[0-9]{1,3})%\s*,\s*(\s*[0-9.]*)\)\s*/', $string, $hsla);

				$hue = $hsla[1];
				$sat = $hsla[2];
				$lum = $hsla[3];

				$rgb = hsl_to_grb( $hue, $sat, $lum);

					if(strlen($rgb['r']) == 1) { $rgb['r'] = '0'.$rgb['r']; };
					if(strlen($rgb['g']) == 1) { $rgb['g'] = '0'.$rgb['g']; };
					if(strlen($rgb['b']) == 1) { $rgb['b'] = '0'.$rgb['b']; };


					$hex = $rgb['r'].$rgb['g'].$rgb['b'];
					$alpha = round($hsla[4]*100);

		}
		elseif(substr_count($string, '%') == 3 AND strlen($string) > 13)
		{
			preg_match('/hsla\(\s*(\s*[0-9]{1,3})\s*,\s*(\s*[0-9]{1,3})%\s*,\s*(\s*[0-9]{1,3})%\s*,\s*(\s*[0-9]{1,3})%\)\s*/', $string, $hsla);

			$hue = $hsla[1];
			$sat = $hsla[2];
			$lum = $hsla[3];

			$rgb = hsl_to_grb( $hue, $sat, $lum);

				if(strlen($rgb['r']) == 1) { $rgb['r'] = '0'.$rgb['r']; };
				if(strlen($rgb['g']) == 1) { $rgb['g'] = '0'.$rgb['g']; };
				if(strlen($rgb['b']) == 1) { $rgb['b'] = '0'.$rgb['b']; };

				$hex = $rgb['r'].$rgb['g'].$rgb['b'];
				$alpha = $hsla[4];

		}

		if (strlen($hex) == 3)
		{
			$hex = $hex[0].$hex[0].$hex[1].$hex[1].$hex[2].$hex[2];
			return array('hex' => $hex, 'alpha' => $alpha);
		}
		elseif (strlen($hex) == 6)
		{
			return array('hex' => $hex, 'alpha' => $alpha);
		}
	}


//CONVERT RGB TO STRING

	public function create_hex_color($hex) //return string
	{
		$string = '#'.$hex;
		return $string;
	}

	public function create_rgb_color($hex) //return string
	{
		$r = hexdec($hex[0].$hex[1]);
		$g = hexdec($hex[2].$hex[3]);
		$b = hexdec($hex[4].$hex[5]);
		$string = 'rgb('.$r.','.$g.','.$b.')';
		return $string;
	}

	public function create_rgba_color($hex, $a) //return string
	{
		$r = hexdec($hex[0].$hex[1]);
		$g = hexdec($hex[2].$hex[3]);
		$b = hexdec($hex[4].$hex[5]);

		$string = 'rgba('.$r.','.$g.','.$b.','.$a.'%)';
		return $string;
	}

	public function create_hsl_color($hex) //return string
	{
		$r = hexdec($hex[0].$hex[1]);
		$g = hexdec($hex[2].$hex[3]);
		$b = hexdec($hex[4].$hex[5]);

		$hsl = $this->rgb_to_hsl($r, $g, $b);

		$string = 'hsl('.$hsl['h'].','.$hsl['s'].','.$hsl['l'].')';
		return $string;
	}

	public function create_hsla_color($hex, $a) //return string
	{
		$r = hexdec($hex[0].$hex[1]);
		$g = hexdec($hex[2].$hex[3]);
		$b = hexdec($hex[4].$hex[5]);

		$hsl = $this->rgb_to_hsl($r, $g, $b);

		$string = 'hsla('.$hsl['h'].','.$hsl['s'].'%,'.$hsl['l'].'%,'.$a.'%)';
		return $string;
	}


//DATABASE
	public function import_hex_to_database($data) //import from data array into nb_colors_position, nb_colors_original
	{
		$filename = $this->path;

		foreach ($data as $entry)
		{
			$alpha = 'NULL';
			switch ($entry['model'])
			{
				case 'hex':
					$hex = $this->hex_to_clear_hex($entry['string']);
					$model = '1';
					break;
				case 'rgb':
					$hex = $this->rgb_to_clear_hex($entry['string']);
					$model = '2';
					break;
				case 'rgba':
					$hex = $this->rgba_to_clear_hex($entry['string'])['hex'];
					$alpha = '\''.$this->rgba_to_clear_hex($entry['string'])['alpha'].'\'';
					$model = '3';
					break;
				case 'hsl':
					$hex = $this->hsl_to_clear_hex($entry['string']);
					$model = '4';
					break;
				case 'hsla':
					$hex = $this->hsla_to_clear_hex($entry['string'])['hex'];
					$alpha = '\''.$this->hsla_to_clear_hex($entry['string'])['alpha'].'\'';
					$model = '5';
					break;
			}

			$query = db::$conn->query("INSERT INTO ".$nb_colors_position."(string, file, position, model, hex, alpha)
				VALUES('".$entry['string']."', '".$filename."', '".$entry['position']."', '".$model."', '".$hex."', ".$alpha.")");

		}

		$query = db::$conn->query("INSERT INTO `".$nb_colors_original."` (repetition, hex)
		SELECT COUNT(id), hex FROM `".$nb_colors_position."` GROUP BY hex");
	}

	public function import_all_colors_model() //Convert all colors from hex to models rgb and hsl into nb_colors_original
	{

		$query = db::$conn->query("SELECT hex FROM ".$nb_colors_original);
		while ($clr = mysqli_fetch_assoc($query))
		{
			$hex = $clr['hex'];

			//HEX TO RGB
			$rgb_r = hexdec($hex[0].$hex[1]);
			$rgb_g = hexdec($hex[2].$hex[3]);
			$rgb_b = hexdec($hex[4].$hex[5]);

			//RGB TO HSL
			$hsl_h = '';
			$hsl_s = '';
			$hsl_l = '';

			$r = $rgb_r;
			$g = $rgb_g;
			$b = $rgb_b;


			$r /= 255;
			$g /= 255;
			$b /= 255;

			$max = max( $r, $g, $b );
			$min = min( $r, $g, $b );

			$hsl_h;
			$hsl_s;
			$hsl_l = ( $max + $min ) / 2;
			$d = $max - $min;

	    	if( $d == 0 )
	    	{
	        	$hsl_h = $hsl_s = 0;
	    	}
	    	else
	    	{
	        	$hsl_s = $d / ( 1 - abs( 2 * $hsl_l - 1 ) );
				switch( $max )
				{
		            case $r:
		            	$hsl_h = 60 * fmod( ( ( $g - $b ) / $d ), 6 );
		                    if ($b > $g) {
		                    $hsl_h += 360;
		                }
		                break;

		            case $g:
		            	$hsl_h = 60 * ( ( $b - $r ) / $d + 2 );
		            	break;

		            case $b:
		            	$hsl_h = 60 * ( ( $r - $g ) / $d + 4 );
		            	break;
			    }
			}

			$hsl_h = round($hsl_h);
			$hsl_s = round($hsl_s*100);
			$hsl_l = round($hsl_l*100);

			db::$conn->query("UPDATE ".$nb_colors_original." SET
				rgb_r = '".$rgb_r."',
				rgb_g = '".$rgb_g."',
				rgb_b = '".$rgb_b."',
				hsl_h = '".$hsl_h."',
				hsl_s = '".$hsl_s."',
				hsl_l = '".$hsl_l."'
				WHERE hex = '".$hex."'");
		}
	}

	public function copy_table() //copy nb_colors_original to nb_colors_work_tbl
	{
		$from = $nb_colors_original;
		$to = $nb_colors_work_tbl;

		db::$conn->query("INSERT INTO ".$to." SELECT * FROM ".$from);
		db::$conn->query("INSERT INTO ".$to." SELECT * FROM ".$from);
		db::$conn->query("UPDATE ".$nb_colors_work_tbl." SET new_hex = hex");
	}

	public function clear_tables()
	{
		$query = db::$conn->query("DELETE FROM ".$nb_colors_original);
		$query = db::$conn->query("DELETE FROM ".$nb_colors_position);
		$query = db::$conn->query("DELETE FROM ".$nb_colors_work_tbl);
		$query = db::$conn->query("DELETE FROM ".$nb_selected_colors);
	}

}


?>
