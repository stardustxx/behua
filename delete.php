<!doctype html>
<html>
		<?php
		include 'db.php';
		
		$name = $_GET['name'];
		
		mysqli_query($connection, "DELETE FROM users WHERE name = '{$name}'");
		
		mysqli_close($connection);
		
		header("Location: control.php");
		?>
    </div>
    </div> 
</div>

</body>
</html>