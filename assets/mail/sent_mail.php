<meta charset="tis-620">
<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	//$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 456; // set the SMTP port for the GMAIL server
	$mail->Username = "vip_1id@hotmail.com"; // GMAIL username
	$mail->Password = "424256400sak"; // GMAIL password
	$mail->From = "vip_1id@hotmail.com"; // "name@yourdomain.com";
	$mail->FromName = "Teepopp Group";  // set from Name
	$mail->Subject = "Teepopp Group";
	$mail->Body = "
	<p>Contact Teepopp Group</p>
	<p><strong>Name : </strong> ".$name." </p>
	<p><strong>Phone : </strong> ".$phone." </p>
	<p><strong>Email : </strong> ".$email." </p>
	<p><strong>Subject : </strong> ".$subject." </p>
	<p><strong>Message : </strong> ".$message." </p>
	";	

	$mail->AddAddress("vip_1id@hotmail.com", "Teepopp Group");
	$mail->Send();
	if($mail) 
	{
		echo "	<script language='javascript'> alert('Success!! We will contact you within 24 hours.');
	 	window.location='http://www.google.com'; </script> ";}
		else 
	{
		echo "Email Can Not Send.";
	}
?>
