<?php 
error_reporting();
include('database.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$dateTime = new DateTime('now', new DateTimeZone('Asia/Karachi')); 
$mydatetime =  $dateTime->format("H:i A");

$today = date('Y-m-d');
$time = date('h:i:s');
$params = array();

parse_str($_POST['form'], $params);
$budget = $params['budget'];
if($budget == ""){
    $budget = 0;
    $lead_category = "DFP";
}
else{
    $budget = $budget;
     $lead_category = "CFP";
}

$name = $params['name'];
$email = $params['email'];
$phone = $params['phone'];
$URL  = $_POST['pageURL'];
$IP = $_POST['ip'];





$sql = "INSERT INTO leads( page_url, lead_date, lead_time, lead_view, lead_ip, lead_data_name, lead_data_email, lead_data_number, lead_data_message, lead_data_budget,company, lead_category, lead_status) 
VALUES 
(
'".$_POST['pageURL']."',
'".$today."',
'".$time."',
'".$_POST['browser']." AND CAME FROM ".$_POST['country']."',
'".$_POST['ip']."',
'".$params['name']."',
'".$params['email']."',
'".$params['phone']."',
'".$params['comments']."',
'".$budget."',
'".$params['company']."',
'".$lead_category."',
'ACTIVE'
)";


if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";



} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

if($params['email'] == ""){
    $email = 'signups@bitswits.co';
}
else{
    $email = $params['email'];
}

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host= "smtp.gmail.com";
    $mail->SMTPAuth= true;                    //Enable SMTP authentication
    $mail->Username= 'signups@bitswits.co';                     //SMTP username
    $mail->Password= '10@Kskwoks';                               //SMTP password
    $mail->Port=587;
    $mail->SMTPSecure="tls";                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('signups@bitswits.co');
    $mail->addAddress($email);     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'THANK YOU FOR CONTACTING BITSWITS';
    $mail->Body    = file_get_contents('./emailtemplate.php');
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    
    
    
 $ppcbody = '<div style="width: 100%; text-align: center"><h2>BitsWits New Lead <span>'.date('m-d-Y').'</span></h2>';
 $ppcbody .= '<table style=" width: 100%"><thead bgcolor="#F69110" style="height: 40px; color: #FFFFFF; font-family: Poppins"><tr><th>Name</th><th>Email</th><th>Phone</th><th>Message</th><th>Page URL</th></tr></thead><tbody>';
 $ppcbody .= '<tr><td>'.$params['name'].'</td><td>'.$params['email'].'</td><td>'.$params['phone'].'</td><td>'.$params['comments'].'</td><td>'.$_POST['pageURL'].'</td></tr>';
 $ppcbody .= '</tbody></table></div>';
    
    
    
    //SECOND MAIL
    $mail->addAddress('signups@bitswits.co');     //Add a recipient
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'signups@bitswits.co';
    $mail->Body    = $ppcbody;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    
    
    // echo 'Message has been sent';
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
