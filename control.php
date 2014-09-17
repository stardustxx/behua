<!doctype html>
<html>

<?php include('header.php') ?>

<div class = "container">
		<div class = "panel panel-default">
	<div class="panel-heading">
		<h2>註冊使用者</h2>
	</div>
	<div class = "panel-body">
 		<form method="POST" action="registration.php" role="form">
		<div class = "form-group"><label for="user_name">登入名稱</label><br />
      	  	<input autocomplete="off" autofocus="autofocus" class="form-control" id="username" name="username" type="text" />
    	</div>
		
		<!--
		  <div class = "form-group">
		  	<label for="user_email">Email</label><br />
		    <input class="form-control" id="useremail" name="useremail" type="email" value="" />
		  </div>-->

		  <div class = "form-group">
		  	<label for="user_password">密碼</label><br />
		    <input autocomplete="off" class="form-control" id="userpassword" name="userpassword" type="password" />
		  </div>

		  <div class = "form-group">
		  	<input class="btn btn-primary" name="commit" type="submit" value="註冊確認" /></div>
</form>	</div>

	<div class = "panel-footer">
		 <h3>現有使用者 : </h3>
		 
		 <!-- call the db connection -->
		 <?php include 'db.php' ?>
		 
		 <?php 
			
			//perform datavvase query
			$query = "SELECT name, password FROM users ORDER BY id";
			
			$result = mysqli_query($connection, $query);
			
			//test if there was a query error
			if(!$result){
				die("Database query failed.");
			}
			
			echo "<table>";
			echo "<col width='60'>";
			echo "<col width='130'>";
			echo "<col width='260'>";
			echo "<col width='130'>";
			
			$number = 1;
			
			while($row = mysqli_fetch_assoc($result)){
				//print the member
				echo "<tr>";
				echo "<td>".$number."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['password']."</td>";
				echo "<td><a href='delete.php?name=".$row['name']."'>Delete</a></td>";
				echo "<tr>";
				$number++;
			}
			
			echo "</table>";
		 
		 ?>
	</div>
</div>


</body>
</html>
