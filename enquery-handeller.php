<?php
		$customerName = $_POST['name'];
		$customerEmail = $_POST['email'];
		$customerMessage = $_POST['message'];
		
		$email_from = 'mycdu.edu@gmail.com'; 
		$email_subject = 'Customer Enquries';
		$email_body ="New email From: $customerName.\n". 
						"E-Mail address: $customerEmail\n". 
							"Enqury about: $customerMessage\n.";
		
		$to = 'ashraful.win@icloud.com'; 
		
		$headers = "from: $email_from \r\n";
		$headers .= "Reply to: $customerEmail \r\n";
		mail($to,$email_subject,$email_body,$headers);

		header("Location: ./contact.html");

?>