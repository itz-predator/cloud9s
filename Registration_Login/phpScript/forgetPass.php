<?php
	include'../../db.php';
	$email=$_REQUEST['email'];
	$sql="SELECT password FROM user WHERE email='$email'";
	$result=mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($result);
	$password = $row['password'];
	$msg="Dear Customer,<br>
			Your account Email id is , 
			".$email." Your Account Password is ".$password."";
						
	if($row)
	{
		mailsend($email,$msg,"Password Recovery");
		$_SESSION['ins'] = 'Your Password is Successfully sent to your Email ';
		header('location: ../index.php');
	}
	else
	{
		$_SESSION['ins'] = 'Email is not registered.';
		header('location: ../forgetPass.php');	
	}

function mailsend($email,$msg,$sub)
{
	/* Mail Send Code */
	require '../PHPMailer/class.phpmailer.php';
	require '../PHPMailer/class.smtp.php';
	$mail = new PHPMailer;                            // Enable verbose debug output
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'abhishekkumargzp2022@gmail.com';                 // SMTP username
	$mail->Password = 'Abhishek@12345';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, ssl also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	$mail->From = 'NO-REPLY'; 
	$mail->FromName = 'Cloud Storage';  
	$mail->addAddress($email, 'User');     // Add a recipient
	$mail->isHTML(true);                                  // Set email format to HTML
	$mail->Subject = $sub;
	$mail->Body    = $msg;
	$mail->AltBody = '';
	
	if(!$mail->send()) {
	   $_SESSION['ins1'] = 'Message could not be sent.';
	   
	} else {
		$_SESSION['ins1'] = 'Message has been sent.';
	}
}	
?>