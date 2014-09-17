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
				$pass = "{$_POST['userpassword']}";
				$passHash = sha1('%^$sd%MDdF)@I#)3asd3223#@4*^&(*&@#'.$pass);
				//if name, email and pass and passConfirm not empty
				if(!empty($name) and !empty($pass)){
					//perform database query
					$query = "INSERT INTO users(name, password)
									VALUES('{$name}', '{$passHash}')";
					
					$result = mysqli_query($connection, $query);
					
					if($result){
						//success
						//jump to secured page
						header('Location: control.php');
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