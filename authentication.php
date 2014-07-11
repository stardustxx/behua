<!DOCTYPE HTML>
<html>

<!-- call the header for the session control -->
<?php include 'header.php' ?>

<!-- always call the db connection first -->
<?php include 'db.php' ?>

<!-- the detect if input exists -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Log In</h2>
		</div>
		<div class="panel-body">
			<?php
				//perform database query
				$query = "SELECT name, email, password FROM users";

				$result = mysqli_query($connection, $query);
				//Test if there was a query error
				if(!$result){
					die("Database query failed.");
				}
				
				$status = null;
				//check if there's such user name
				while($row = mysqli_fetch_assoc($result)){
					if($_POST['useremail'] === $row['email']){
						//check if the password corresponds
						$pass = $_POST['userpassword'];
						$passHash = sha1('%^$sd%MDdF)@I#)3asd3223#@4*^&(*&@#'.$pass);
						
						//echo $passHash;
						//echo "<br>";
						//echo $row['password'];
						
						if($passHash === $row['password']){
							$status = "Log in Success As ".$row['email'];
							//set user name session variable
							$_SESSION['member_id'] = $row['name'];
							//send status
							$status = "<p><strong>You've logged in as ".$row['name'].". We will redirect you back to homepage in 5 seconds!";
							//jump to secured page
							header('Refresh:5; URL=index.php');
							//break it
							break;
						}else{
							$status = "<p><strong>Wrong password.</strong></p><a href='\\behua/login.php'>Back to Login</a>";
						}
					}else{
						$status = "<p><strong>Wrong email.</strong></p><a href='\\behua/login.php'>Back to Login</a>";
					}
				}
				
				echo "<p>";
				echo $status;
				echo "</p>";
				 mysqli_close($connection); 
			?>
		</div>
	</div>
</div>
</body>
</html>
