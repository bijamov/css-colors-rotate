<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require $_SERVER['DOCUMENT_ROOT'].'/cssvce/lib/PHPMailer-master/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'].'/cssvce/lib/PHPMailer-master/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'].'/cssvce/lib/PHPMailer-master/src/SMTP.php';



function smtp_mail($my_recive_mail, $my_subj, $my_body, $my_file = '')
{

	$my_host = 'bijamov.me';
	$my_mail = 'cssvce@bijamov.me';
	$my_pass = '613896Nikos!@';
	$my_name = 'css visual colors editor';

	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
	    //Server settings
	    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
	    $mail->isSMTP();                                            // Send using SMTP
	    $mail->Host       = $my_host;                    // Set the SMTP server to send through
	    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
	    $mail->Username   = $my_mail;                     // SMTP username
	    $mail->Password   = $my_pass;                               // SMTP password
	    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
	    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

	    //Recipients
	    $mail->setFrom($my_mail, $my_name);
	    $mail->addAddress($my_recive_mail);     // Add a recipient
	    //$mail->addAddress('ellen@example.com');               // Name is optional
	    // $mail->addReplyTo('info@example.com', 'Information');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    // Attachments

	    if ($my_file != '')
	    {
	    	$mail->addAttachment($my_file);         // Add attachments
	    }

	    // Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = $my_subj;
	    $mail->Body    = $my_body;
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	      // echo 'Message has been sent';
	} catch (Exception $e) {
	      // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}

// smtp_mail('nisan.bijamov@gmail.com', 'test', 'body');

?>