<?php 
include_once('classes/constants.php')
?>
<style>
	body
	{
	font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
	padding: 0px;
	margin: 0px;
	}
	#login
	{
		padding: 10px;
		background-color: #28a745;
		color: #ffffff;
		text-decoration: none;
		font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
		font-weight: 600;
	}
	.link
	{
		color: #000000;
		text-decoration: none;
		font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif;
		font-size: 0.8rem;
	}
</style>


<div style="text-align: center; background-color: #007bff; color: white; padding-top: 20px; padding-bottom: 20px;">
	<h1>Welcome to <?=$site_name?></h1>
	<h3>Thank you for joining us.<br>Please follow the link bellow to complete your registration</h3>
</div>


<div style="text-align: center; padding-top: 50px; padding-bottom: 50px;">
	<a id="login" href="/css-colors-rotate/mail_temp.html?&key=54168d46sfr6dsgdfg">LOG IN TO YOUR ACCOUNT</a>
</div>

<div style="text-align: center; padding-top: 20px; padding-bottom: 20px; background-color: #f6f8fa">
	<p>Contact us for more information, consult or report a bug</p>
	<a class="link" href="localhost/css-colors-rotate/mail_temp.html?&key=54168d46sfr6dsgdfg"><?php echo $site_url ?></a>
	-
	<a class="link" href="localhost/css-colors-rotate/mail_temp.html?&key=54168d46sfr6dsgdfg"><?php echo $site_mail ?></a>
</div>