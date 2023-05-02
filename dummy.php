<!DOCTYPE html>

<html lang="en">
	<head>

	<meta charset="utf-8">
	<title>Campaign</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 and CSS3-in older browsers-->
	<script src="js/modernizr.custom.17475.js"></script>

	<!-- Support media queries for IE8 -->
	<script src="js/respond.min.js"></script>

	<script type="text/javascript">
	function delayedRedirect(){
		window.location = "index.php"
	}
	</script>
	</head>
	
	
	<body onLoad="setTimeout('delayedRedirect()', 5000)">	
		<?php
		
	$mail = $_POST['email'];

    $to = "sales@smartroofings.in";
    $subject = "Test Email with Attachment";
    $message = "This is a test email with an attachment.";
    
    if (isset($_FILES['file'])) {
        
    }
    
    // Define the attachment file path and name
    $file_path = "/public_html/smartroofings.in/sample-19032023.pdf";
    $file_name = "sample-19032023.pdf";
    
    // Read the file content and encode it
    $file_content = file_get_contents($file_path);
    $encoded_content = chunk_split(base64_encode($file_content));
    
    // Define the boundary for the email
    $boundary = md5(time());
    
    // Set the headers for the email and attachment
    $headers = "From: demosmda@gmail.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=".$boundary."\r\n";
    
    // Define the message body and attachment
    $body = "--".$boundary."\r\n";
    $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= base64_encode($message)."\r\n";
    $body .= "--".$boundary."\r\n";
    $body .= "Content-Type: application/pdf; name=".$file_name."\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n";
    $body .= "Content-Disposition: attachment; filename=".$file_name."\r\n\r\n";
    $body .= $encoded_content."\r\n";
    $body .= "--".$boundary."--";


    // Send the email
    if(mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Email sending failed.";
    }



		
		
		
		
		
		
		//	$mail = $_POST['email'];
		//	$hostmail =	$_POST['hostemail'];
// 			$mail->addAttachment($_FILES['upload']['tmp_name'],$_FILES['upload']['name']);

         //   $role = $_POST['role']; // required
          //  if($role == "others"){
          //      $role = $_POST['other'];
          //  }

			/*$subject = "".$_POST['subject'];*/
		//	$to = "muthamizhvendhan66@gmail.com";		/* YOUR EMAIL HERE */
		//	$subject = "Quote Enquiry";
		//	$headers = "From: Client Enquiry <noreply@test.com>";
		//	$headers .= '' . "\r\n";
		//	$headers .= 'Content-Type: text/html; charset=ISO-8859-1' . "\r\n";
			
			
// 			// Boundary  
//             $semi_rand = md5(time());  
//             $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
            
//             $file = $_FILES['upload']['tmp_name'];
//             // Preparing attachment 
//             if(!empty($file) > 0){ 
//                 if(is_file($file)){ 
//                     $message .= "--{$mime_boundary}\n"; 
//                     $fp =    @fopen($file,"rb"); 
//                     $data =  @fread($fp,filesize($file)); 
            
//                     @fclose($fp); 
//                     $data = chunk_split(base64_encode($data)); 
//                     $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" .  
//                     "Content-Description: ".basename($file)."\n" . 
//                     "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" .  
//                     "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
//                 } 
//             } 
//             $message .= "--{$mime_boundary}--"; 
//             $returnpath = "-f" . $from; 

//             $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

			
			
		//	$message = '<html><body>';
			
			//$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		//	$message .= "<tr style='background: #eee;'><td><strong> Name</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
		//	$message .= "<tr><td><strong> Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
		//	$message .= "<tr><td><strong> Phone Number</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
		//	$message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['subject']) . "</td></tr>";
		//	$message .= "<tr><td><strong>Position Applied for</strong> </td><td>" . strip_tags($role) . "</td></tr>";
			
			//Receive Variable
		//	$sentOk = mail($to,$subject,$message,$headers);
		//	$sentOk1 = mail($mail,$subject,$message,$headers);
		
			
			//Confirmation page
		//	$user = $mail;
		//	$usersubject = "Thank You";
		//	$userheaders = "From: guruprasathmsc@gmail.com\n";
			
			/*$usermessage = "Thank you for your time. Your survey is successfully submitted.\n"; WITH OUT SUMMARY*/
			//Confirmation page WITH  SUMMARY
		//	$usermessage = "Thank you for your time. Your survey is successfully submitted.\n\nBELOW A SUMMARY\n\n$message"; 
			//mail($user,$usersubject,$usermessage,$userheaders);
		?>

		<!-- END SEND MAIL SCRIPT -->   
		<div class="container">
			<div class="row">
				<div class=" col-md-12" style="text-align:center; padding-top:80px;">
					<h1 style="color:#333">Thank you!</h1>
					<h3 style="color: #6C3">Your Deatails are Successfully Submitted.</h3>
					<p>You will be redirected back in 5 seconds.</p>
				</div>
			</div>
		</div>
	</body>
</html>