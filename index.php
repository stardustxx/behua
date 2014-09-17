 <DOCTYPE HTML>
 <html>
 
<?php include('header.php'); ?>

<!-- Appears only when people signed in -->
<!-- <div class = "container">
  <div class = "jumbotron tbCenter">
  	<p> Welcome to Behua </p>
  	<a class="btn btn-default" href="login.php">Log In</a>
		<a class="btn btn-primary" href="signup.php">Sign Up</a>
  </div>
</div> -->

<!-- Show Products -->

<?php 
if(!isset($_SESSION['member_id'])){
	//jump to log in page
	header('Location: login.php');
  }else{
	include('product.php');
  }
?>

<?php include('footer.php') ?>

</body>
</html>