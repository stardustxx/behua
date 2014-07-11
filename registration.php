<!DOCTYPE HTML>
<html>
<body>

<!-- call the header for the session control -->
<?php include 'header.php' ?>

<!-- always call the db connection first -->
<?php include 'db.php' ?>

<!-- then detect if input exists -->
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2>Sign Up</h2>
		</div>
		<div class="panel-body">
			<?php
				//echo $_POST['commit'];
				$name = $_POST['username'];
				$email = $_POST['useremail'];
				$pass = "{$_POST['userpassword']}";
				$passHash = sha1('%^$sd%MDdF)@I#)3asd3223#@4*^&(*&@#'.$pass);
				//if name, email and pass and passConfirm not empty
				if(!empty($name) and !empty($email) and !empty($pass)){
					//perform database query
					$query = "INSERT INTO users(name, email, password)
									VALUES('{$name}', '{$email}', '{$passHash}')";
					
					$result = mysqli_query($connection, $query);
					
					if($result){
						//success
						echo "<p><strong>You've signed up as ".$name.". We will redirect you back to homepage in 5 seconds!";
						//jump to secured page
						header('Refresh:5; URL=index.php');
					}else{
						//failure
						die("Database query failed." . mysqli_error($connection));
						echo "Fail";
					}
				}
				
				mysqli_close($connection);
			?>
</body>
</html>