<!doctype html>
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

<!-- Photo Gallery, appears regardless -->
<div class = "container">
  <h1>Gallery</h1>
</div>

<div id="masonry" class = "container-fluid tbCenter">
  <?php
    for ($x = 1; $x <= 8; $x++){
      if ($x !== 13) {
        echo '<div class="item"><div class = "imgs"><img src = "Product/image' . $x . '.jpeg" /></div></div>';
      }
    }
  ?>
</div>

<!-- The ordering part -->


</body>
</html>