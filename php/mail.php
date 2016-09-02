<?php
	$url = $_POST['url'];
	$message = $_POST['message']; // getting message
	$to = "umachandrikahm@gmail.com"; // to email adress
	$subject = "My subject";
	$txt = "$url $message";
	$headers = "From: donotreply@fmt.com" . "\r\n" .
	"CC: somebodyelse@example.com";

	// Sending mail
	if(mail($to,$subject,$txt,$headers)){
		echo "mail sent successfully";
	}else{
		echo "mail sent successfully";
	}
?>
