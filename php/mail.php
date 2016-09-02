<?php
	$toemail = $_POST['toemail'];
	$message = $_POST['message']; // getting message
	$to = $toemail; // to email adress
	$subject = "My subject";
	$txt = 	$message;
	$headers = "From: donotreply@fmt.com" . "\r\n" .
	"CC: somebodyelse@example.com";
	// Sending mail
	if(mail($to,$subject,$txt,$headers)){
		echo "mail sent successfully ";
	}else{
		echo "mail sent successfully";
	}
?>