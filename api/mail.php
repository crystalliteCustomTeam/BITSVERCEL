<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if($params['email'] == ""){
    $email = 'signups@bitswits.co';
}
else{
    $email = $params['email'];
}


try {;
    //Server settings
     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host= "smtp.gmail.com";
                               
    $mail->SMTPAuth= true;                    //Enable SMTP authentication
    $mail->Username= 'signups@bitswits.co';                     //SMTP username
    $mail->Password= '10@Kskwoks';                               //SMTP password
    $mail->Port=587;
    $mail->SMTPSecure="tls";                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
    //Recipients
    $mail->setFrom('signups@bitswits.co');
    $mail->addAddress('harrykennedy.cs@gmail.com');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'New Lead From BITSWITS';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}