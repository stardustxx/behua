<form action = "order.php" method = "post">
  <div>
    <input type = "submit" type = "submit" value = "submit" />
  </div>
  
  <div class = "container-fluid">
    <h1>春天粉嫩</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
        for ($x = 9801; $x <= 9812; $x++){
          $filename = "Product/behu9800/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<img src = "Product/behu9800/BEHU' . $x . '.jpg" />';
            echo '<input class = "txtbox" type = "text" name = "spring' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>方妮趣味</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1301; $x <= 1370; $x++){
        if ($x <= 1330){
          $filename = "Product/WF1300/WF" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<img src = "Product/WF1300/WF' . $x . '.jpg" />';
            echo '<input class = "txtbox" type = "text" name = "funny' . $x . '" />';
            echo '</div></div>';
          }
        }
        elseif ($x <= 1370) {
          $filename = "Product/WF1300/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<img src = "Product/WF1300/BEHU' . $x . '.jpg" />';
            echo '<input class = "txtbox" type = "text" name = "funny' . $x . '" />';
            echo '</div></div>';
          }
        }
      }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>可愛兒童</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1101; $x <= 1115; $x++){
          $filename = "Product/behu1100/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<img src = "Product/behu1100/BEHU' . $x . '.jpg" />';
            echo '<input class = "txtbox" type = "text" name = "kids' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
</form>