<!doctype html>
<html>

<?php include('header.php'); ?>

<div class = "container">
	<div class = "panel panel-default">
    	<div class = "panel-heading">	
    		<h2>Sign in</h2>
    	</div>
	<div class = "panel-body">
		<form accept-charset="UTF-8" action="/users/sign_in" class="new_user" id="new_user" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="268WfLEhie3PipO63xPxSNyFTR7YjNajav9HVD0BUVQ=" /></div>
		  <div class = "form-group"><label for="user_email">Email</label><br />
		  <input autofocus="autofocus" class="form-control" id="user_email" name="user[email]" type="email" value="" /></div>

		  <div class = "form-group"><label for="user_password">Password</label><br />
		    <input autocomplete="off" class="form-control" id="user_password" name="user[password]" type="password" /></div>

		    <div><input name="user[remember_me]" type="hidden" value="0" /><input id="user_remember_me" name="user[remember_me]" type="checkbox" value="1" /> <label for="user_remember_me">Remember me</label></div>

		  <div class = "form-group"><input class="btn btn-default" name="commit" type="submit" value="Sign in" /></div>
        </form>	
    </div>
	<div class = "panel-footer">
        <a href="signup.html">Sign up</a><br />
        <a href="/users/password/new">Forgot your password?</a><br />
	</div>
    </div> 
</div>

</body>
</html>