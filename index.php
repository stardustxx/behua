 
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
<div class = "container-fluid">
  <h1>New Items</h1>
</div>

<div class = "masonry container-fluid tbCenter">
  <?php /*
    for ($x = 1; $x <= 15; $x++){
      if ($x !== 13) {
        echo '<div class="item">';
        echo '<div class = "imgs">';
        echo '<img src = "Product/image' . $x . '.jpeg" />';
        echo '</div></div>';
      }
    } */
  ?> 
</div>
<br>

<!-- Show Products -->
<?php include('product.php'); ?>



</body>
</html>