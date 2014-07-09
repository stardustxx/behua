<!doctype html>
<html>

<?php include('header.php') ?>

<div class = "container">
		<div class = "panel panel-default">
	<div class="panel-heading">
		<h2>Sign up</h2>
	</div>
	<div class = "panel-body">
 <form method="GET" action="test.php" role="form">
		  <div class = "form-group"><label for="user_name">Name</label><br />
      	  <input autofocus="autofocus" class="form-control" id="user_name" name="user[name]" type="text" />
      </div>

		  <div class = "form-group">
		  	<label for="user_email">Email</label><br />
		    <input class="form-control" id="user_email" name="user[email]" type="email" value="" />
		  </div>

		  <div class = "form-group">
		  	<label for="user_password">Password</label><br />
		    <input autocomplete="off" class="form-control" id="user_password" name="user[password]" type="password" />
		  </div>

		  <div class = "form-group">
		  	<label for="user_password_confirmation">Password confirmation</label><br />
		    <input autocomplete="off" class="form-control" id="user_password_confirmation" name="user[password_confirmation]" type="password" />
		  </div>

		  <div class = "form-group">
		  	<input class="btn btn-primary" name="commit" type="submit" value="Sign up" /></div>
</form>	</div>

	<div class = "panel-footer">
		  <a href="/users/sign_in">Already a user?</a><br />
	</div>
</div>


</body>
</html>
