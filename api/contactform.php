<?php

	include 'database.php';

	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$budget=$_POST['budget'];

    $choosfile=$_POST['upload'];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["upload"]["name"]);
    $uploadOk = 1;
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

	$message=$_POST['comments'];
	$date = date("l jS \of F Y h:i:s A");
	$sql = "INSERT INTO `contactforms`( `name`, `email`, `phone`, `budget`, `upload`, `comments` , `wholeDate`) 
	VALUES ('$name', '$email', '$phone', '$budget', '$choosefile', '$message','$date')";

	mysqli_query($conn, $sql);

	$html="<table><tr><td>Name</td><td> $name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Phone </td><td> $phone</td></tr><tr><td>Budget</td><td>	$budget</td></tr><tr><td>Upload File</td><td>	$ChooseFile</td></tr><tr><td>Message</td><td>	$message</td></tr></table>";
   
   $address = array('info@bitswits.co','signups@bitswits.co');

  include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="signups@bitswits.co";
	$mail->Password="qwer@1234";
	$mail->SetFrom("signups@bitswits.co");
	//$mail->addAddress("support@seoresultspro.com");
	while (list ($key, $val) = each ($address)) {
        $mail->AddAddress($val);
    }
	$mail->IsHTML(true);
	$mail->Subject="Contact us - BitsWits";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>true,
		'verify_peer_name'=>true,
		'allow_self_signed'=>true
	));
	try{
	    $mail->send();
	}
catch(Exception $e){
   echo 'Message: ' .$e->getMessage();
}
	

mysqli_close($conn);





?>
	
	

	
