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
	
	//get values from the session
	$name = $_SESSION['member_id'];
	$text = $_SESSION['order'];

	$to = "risenhell@gmail.com; e811226@gmail.com";
	$subject = "Order from Behua";
	$message = "Name: ".$name."\r\n"."Message: "."\r\n".$text;

	$from = "order@behua.com";
	$headers = "From: ".$from."\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8"."\r\n";
	
	//send the mail
	$result = mail($to, $subject, $message, $headers);

	//if SESSION was used, display the message straight away
	if ($_SESSION) {
		if ($result){
			echo "<p><strong>The order has been sent. Thank you!</strong></p>";
			echo "<p><a href='index.php'><em>Back to Homepage</em></a></p>";
		}
		else echo 'Sorry, unexpected error. Please try again later';
	}
?>

<!--
</div>
</div>
</div>
</body>
</html>
-->