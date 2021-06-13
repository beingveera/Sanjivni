<?php 
require 'phpmailer/PHPMailerAutoload.php';
$mail= new PHPMailer;
$mail->Host='smtp.gmail.com';
$mail->Port=465;
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='sharma.lokesh.222001@gmail.com';//Your Email Address
$mail->Password='9829237552';//Your Email Password
$mail->setFrom('sharma.lokesh.222001@gmail.com','Notification');
$mail->addAddress('veerasharma0000@gmail.com');//Receiver Email
$mail->addReplyTo('sharma.lokesh.222001@gmail.com');
$mail->isHTML(true);
$mail->Subject='Be The Player Of Code';
$mail->Body='<h1>Please Do Subscribe My Channal</h1>.<br><h3 style="color:red;">Player Of Code</h3>';
if(!$mail->send())
{
echo "Something went wrong";
echo $mail->ErrorInfo;
}
else
{
	echo "Email sent successfully";
}
?>
