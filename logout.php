<!doctype html>
<html>

<?php include('header.php'); ?>

<div class = "container">
	<div class = "panel panel-default">
    	<div class = "panel-heading">	
    		<h2>Signing Out</h2>
    	</div>
	<div class = "panel-body">
		<?php
			session_destroy();
			echo "<p>You've logged out.</p> We will redirect you back to homepage in 3 seconds!";
			header('Refresh: 3; URL=index.php');
		?>
    </div>
    </div> 
</div>

</body>
</html>