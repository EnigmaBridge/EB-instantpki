<?php	
	if(empty($_POST['name_pki2']) && strlen($_POST['name_pki2']) == 0 || empty($_POST['email_pki2']) && strlen($_POST['email_pki2']) == 0)
	{
		return false;
	}
	
	$name_pki2 = $_POST['name_pki2'];
	$email_pki2 = $_POST['email_pki2'];
	
	$to = 'support@enigmabridge.freshdesk.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from enigmabridge.com.";
	$email_body = "You have received a new message. \n\n".
				  "Name_Pki2: $name_pki2 \nEmail_Pki2: $email_pki2 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: pki@enigmabridge.com\n";
	$headers .= "Reply-To: $email_pki2";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>