<!--
<!DOCTYPE HTML>
<html>

<?php
	//get session
	//include('header.php');
?>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Log In</h2>
		</div>
		<div class="panel-body">
-->
<?php
	
	require 'PHPMailerAutoload.php';

$mail = new PHPMailer;


	//get values from the session
	$name = $_SESSION['member_id'];
	$text = $_SESSION['order'];

	// $to = "e811226@gmail.com; missbehua@gmail.com";
	// $subject = "Order from Behua";
	$message = "Name: ".$name."<br/><br/>"."Message: "."<br/>".$text;

	// $from = "order@behua.com";
	// $headers = "From: "$from."\r\n";
	// $headers .= "Content-type: text/plain; charset=UTF-8"."\r\n";
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'localhost';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'order@order.missbehua.com';                 // SMTP username
	$mail->Password = 'admin2014';                           // SMTP password
	// $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	// $mail->Port = 587;                                    // TCP port to connect to

	$mail->From = 'order@order.missbehua.com';
	$mail->FromName = 'Order';
	$mail->addAddress('e811226@gmail.com');     // Add a recipient
	$mail->addAddress('missbehua@gmail.com');               // Name is optional
	// $mail->addReplyTo('info@example.com', 'Information');
	// $mail->addCC('cc@example.com');
	// $mail->addBCC('bcc@example.com');

	// $mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Order from Behua';
	$mail->Body    = $message;
	// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo '抱歉 錯誤發生 請再試一次';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo "<p><strong>訂單已寄出 謝謝您</strong></p>";
		echo "<p><a href='index.php'><em>返回首頁</em></a></p>";
	}

	// //send the mail
	// $result = mail($to, $subject, $message, $headers);

	// //if SESSION was used, display the message straight away
	// if ($_SESSION) {
	// 	if ($result){
	// 		echo "<p><strong>訂單已寄出 謝謝您</strong></p>";
	// 		echo "<p><a href='index.php'><em>返回首頁</em></a></p>";
	// 	}
	// 	else echo '抱歉 錯誤發生 請再試一次';
	// }
?>

<!--
</div>
</div>
</div>
</body>
</html>
-->