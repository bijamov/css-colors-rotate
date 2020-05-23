<?php
class nb_validation
{

	function email_check($string)
	{
		if (filter_var($string, FILTER_VALIDATE_EMAIL))
		{
		    return 'ok';
		}
		else
		{
		    return false;

		}
	}

	function password_hash_check($string)
	{

		if (strlen($string) == 64)
		{
		    return 'ok';
		}
		else
		{
		    return false;

		}
	}

	function password_check($string)
	{
		if (strlen($string) < 8)
		{
		    return false;
		}

		if (!preg_match('/[0-9]/', $string))
		{
		    return false;
		}

		if (!preg_match('/[a-zA-Z]/', $string))
		{
		    return false;
		}

		return 'ok';
	}

	function firstname_check($string)
	{
		if (strlen($string) > 1)
		{
			return 'ok';
		}
		else
		{
			return false;
		}
	}

	function generate_random_string($length = 10)
	{
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$string = '';
		for ($i = 0; $i < $length; $i++) {
		    $string .= $characters[rand(0, $charactersLength - 1)];
		}
		return $string;
	}

}
?>
