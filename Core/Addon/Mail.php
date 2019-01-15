<?php
namespace Core\Addon;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Config\Config;

/**
 * Mail
 */
class Mail
{
	
	public static function send($to, $subject, $body_text, $body_html)
	{
		    $mail = new PHPMailer(true);                          // Passing `true` enables exceptions
		
		    //Server settings
		    $mail->SMTPDebug = Config::MAIL_DEBUG;                // Enable verbose debug output
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = Config::MAIL_HOST;                      // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = Config::MAIL_USERNAME;              // SMTP username
		    $mail->Password = Config::MAIL_PASSWORD;              // SMTP password
		    $mail->SMTPSecure = Config::MAIL_SECURE;              // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = Config::MAIL_PORT;                      // TCP port to connect to

		    //Recipients
		    $mail->setFrom(Config::MAIL_USERNAME, 'PHPCore');
		    $mail->addAddress($to);                               // Add a recipient
		 


		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $subject;
		    $mail->Body    = $body_html;
		    $mail->AltBody = $body_text;
            
            $mail->send();
		
	}
	
} // End of class: Mail