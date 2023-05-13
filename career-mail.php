<!DOCTYPE html>

<html lang="en">
	<head>

	<meta charset="utf-8">
	<title>Campaign</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 and CSS3-in older browsers-->
	<!--<script src="js/modernizr.custom.17475.js"></script>-->

	<!-- Support media queries for IE8 -->
	<!--<script src="js/respond.min.js"></script>-->

	
	</head>
	
	<body onLoad="setTimeout('delayedRedirect()', 5000)">
		
		<?php
		
		$mail = $_POST['email'];

	    
            $role = $_POST['role']; // required
            if($role == "others"){
                $role = $_POST['other'];
            }

            $to = "guruprasathmsc@gmail.com";
            $subject = "MekarkPreFab Career Enquiry";
            
            $message .= "Name    : ".strip_tags($_POST['name'])."\n\n";
            $message .= "Email   : ".strip_tags($_POST['email'])."\n\n";
            $message .= "Phone   : ".strip_tags($_POST['phone'])."\n\n";
            $message .= "Position Applied for : ".$role."\n\n";
            $message .= "Message : ".strip_tags($_POST['msg'])."\n\n";
            
            
            
             // Define the attachment file path and name
    $file_path = $_FILES['resume']['tmp_name'];
    $file_name = $_FILES['resume']['name'];

    // Read the file content and encode it
    $file_content = file_get_contents($file_path);
    $encoded_content = chunk_split(base64_encode($file_content));
            
    // Define the boundary for the email
    $boundary = md5(time());
    
    // Set the headers for the email and attachment
    $headers = "From: guruprasathmsc@gmail.com\r\n";
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
        header("Location:thank-you");
    } else {
        echo "Email sending failed.";
    }

			
		
// 			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
// 			$message .= "<tr style='background: #eee;'><td><strong> Name</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
// 			$message .= "<tr><td><strong> Email</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
// 			$message .= "<tr><td><strong> Phone Number</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
// 			$message .= "<tr><td><strong>Message</strong> </td><td>" . strip_tags($_POST['msg']) . "</td></tr>";
// 			$message .= "<tr><td><strong>Designation</strong> </td><td>" . strip_tags($role) . "</td></tr>";


		
		?>

		<!-- END SEND MAIL SCRIPT -->   
		
	</body>
</html>