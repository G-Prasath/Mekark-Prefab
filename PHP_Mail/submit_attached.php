<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

date_default_timezone_set('Asia/Kolkata');

if(isset($_POST['submit'])) {

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $mobile = $_POST['phone']; // required
    $subject = $_POST['msg']; // required
    $role = $_POST['role']; // required
    if($role == "others"){
        $role = $_POST['other'];
    }
	
    $date = date('d/M/Y'); // required
 	$time = date("h:i A", time()); // required	

}

$mail = new PHPMailer(true);
$mail->isSMTP();

$mail->addAttachment($_FILES['resume']['tmp_name'], $_FILES['resume']['name']);


// $mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = true;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "demosmda@gmail.com";
$mail->Password   = "cxhkyjnewtigqrxw";

// To mail address
$mail->AddAddress("sikkandar@smartroofings.in", "Guru Prasath");


$mail->isHTML(true);

$mail->Subject = $role;

$htmlContent ="
  <html>
  <head>
      <title>Welcome to Enquiry form</title>
  </head>
  <body style='background:#f2f2f2;'>
  <div style='margin:0;background:#f2f2f2; width:100%; float:left'>
  <div style='margin:0 auto; width:600px; padding:40px 0'>
  <div style='background:#fff; height:300px; border-radius:10px; border:1px solid #d8d8d8;'>
  <div style='width: 558px; float: left; padding: 10px 20px; border-bottom:1px solid #d8d8d8'>
  <div style='width:50%; float:left'><span style='text-decoration:none;font-family:Arial,Helvetica,sans-serif;font-size:18px;font-weight:bold;color:#6ac451'> DhanamRoofings Enquiry Form </span></div>
  <div style='width:50%; float:left'><span style='font-family: cursive;font-family:'Trebuchet MS',Arial,Helvetica,sans-serif; font-size: 14px; line-height: 24px; text-align: right; float: right;'>Entry on: ".$date." ".$time."</span></div>
  </div>
  <div style='width: 558px; float: left; padding: 25px 20px; height: 165px;'>

  <table style='width: 100%; font-size:12px;line-height:21px;font-family:'Trebuchet MS',Arial,Helvetica,sans-serif;color:rgb(0,0,0);float:left; ' border='0'>
    <tr>
      <td style='width: 400px; font-size: 20px;'>Name: ".$name."</td>
    </tr>
    <tr>
      <td style='width:400px;font-size: 20px;'>Mobile: <a style='color:#d95b23'>".$mobile."</a></td>
    </tr>
    <tr>
      <td style='width:400px;font-size: 20px;'>Email: <a style='color:#d95b23'>".$email."</a></td>
    </tr>
    <tr>
      <td style='width:400px;font-size: 20px;'>Applied Posistion : <a style='color:#d95b23'>".$role."</a></td>
    </tr>
    <tr>
      <td style='width:400px;font-size: 20px;'>Message: <a style='color:#d95b23'>".$subject."</a></td>
    </tr>
  </table>
  </div>
  </div>
  </div>
  </div>
  </body>
  </html>";

$mail->MsgHTML($htmlContent);

if (!$mail->Send()) {
  echo "Error while sending Email.";
  var_dump($mail);
} else {
  header("Location:../thank-you.php");
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Request sent!</title>
    <link rel="icon" href="/test/check.png" />
  </head>
  <body>
    <img
      src="/test/60c0e28575cd7c21701806fd_q1cunpuhbdreMPFRSFLyfUXNzpqv_I5fz_plwv6gV3sMNXwUSPrq88pC2iJijEV7wERnKXtdTA0eE4HvdnntGo9AHAWn-IcMPKV-rZw1v75vlTEoLF4OdNqsRb7C6r7Mvzrm7fe4.png"
      alt="Thank you"
    />
    <form action="index.php" method="get" target="_parent">
      <input class="sub" href="../index.php" type="submit" value="Return" />
    </form>
  </body>
</html>



