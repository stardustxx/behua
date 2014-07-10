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
<div class = "container-fluid">
  <h1>New Items</h1>
</div>

<div class = "masonry container-fluid tbCenter">
  <?php
    for ($x = 1; $x <= 15; $x++){
      if ($x !== 13) {
        echo '<div class="item">';
        echo '<div class = "imgs">';
        echo '<img src = "Product/image' . $x . '.jpeg" />';
        echo '</div></div>';
      }
    }
  ?>
</div>
<br>

<!-- Show Products -->
<form action = "order.php" method = "post">
  <div>
    <input type = "submit" type = "submit" value = "submit" />
  </div>
  <div class = "container-fluid">
    <h1>Canada</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1; $x <= 15; $x++){
        if ($x !== 13) {
          echo '<div class="item">';
          echo '<div class = "imgs">';
          echo '<img src = "Product/image' . $x . '.jpeg" />';
          echo '<input class = "txtbox" type = "text" name = "image' . $x . '" />';
          echo '</div></div>';
        }
      }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>Crystal</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 16; $x <= 30; $x++){
        if ($x !== 13) {
          echo '<div class="item">';
          echo '<div class = "imgs">';
          echo '<img src = "Product/image' . $x . '.jpeg" />';
          echo '<input class = "txtbox" type = "text" name = "image' . $x . '" />';
          echo '</div></div>';
        }
      }
    ?>
  </div>
</form>
<!-- The ordering part -->


</body>
</html>