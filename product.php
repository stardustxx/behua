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
            echo '<a href = "Product/behu9800/BEHU' . $x . '.jpg" data-lightbox = "spring">';
            echo '<img src = "Product/behu9800/BEHU' . $x . '.jpg" />';
            echo '</a>';
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
            echo '<a href = "Product/WF1300/WF' . $x . '.jpg" data-lightbox = "funny">';
            echo '<img src = "Product/WF1300/WF' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "funny' . $x . '" />';
            echo '</div></div>';
          }
        }
        elseif ($x <= 1370) {
          $filename = "Product/WF1300/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF1300/BEHU' . $x . '.jpg" data-lightbox = "funny">';
            echo '<img src = "Product/WF1300/BEHU' . $x . '.jpg" />';
            echo '</a>';
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
            echo '<a href = "Product/behu1100/BEHU' . $x . '.jpg" data-lightbox = "kids">';
            echo '<img src = "Product/behu1100/BEHU' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "kids' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>催燦星空</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 9701; $x <= 9712; $x++){
          $filename = "Product/behu9700/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/behu9700/BEHU' . $x . '.jpg" data-lightbox = "sky">';
            echo '<img src = "Product/behu9700/BEHU' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "sky' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>卡通</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
        for ($x = 1601; $x <= 1620; $x++){
          if ($x <= 1608){
            $filename = "Product/WF1600/WF" . $x . ".jpg";
            if (file_exists($filename)) {
              echo '<div class="item">';
              echo '<div class = "imgs">';
              echo '<a href = "Product/WF1600/WF' . $x . '.jpg" data-lightbox = "cartoon">';
              echo '<img src = "Product/WF1600/WF' . $x . '.jpg" />';
              echo '</a>';
              echo '<input class = "txtbox" type = "text" name = "cartoon' . $x . '" />';
              echo '</div></div>';
            }
          }
          elseif ($x <= 1620){
            $filename = "Product/WF1600/BEHU" . $x . ".jpg";
            if (file_exists($filename)) {
              echo '<div class="item">';
              echo '<div class = "imgs">';
              echo '<a href = "Product/WF1600/BEHU' . $x . '.jpg" data-lightbox = "cartoon">';
              echo '<img src = "Product/WF1600/BEHU' . $x . '.jpg" />';
              echo '</a>';
              echo '<input class = "txtbox" type = "text" name = "cartoon' . $x . '" />';
              echo '</div></div>';
            }
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>小手</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 301; $x <= 313; $x++){
          $filename = "Product/WF300/WF" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF300/WF' . $x . '.jpg" data-lightbox = "hand">';
            echo '<img src = "Product/WF300/WF' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "hand' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>漸層光療</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
        for ($x = 1701; $x <= 1720; $x++){
          if ($x <= 1711){
            $filename = "Product/WF1700/WF" . $x . ".jpg";
            if (file_exists($filename)) {
              echo '<div class="item">';
              echo '<div class = "imgs">';
              echo '<a href = "Product/WF1700/WF' . $x . '.jpg" data-lightbox = "light">';
              echo '<img src = "Product/WF1700/WF' . $x . '.jpg" />';
              echo '</a>';
              echo '<input class = "txtbox" type = "text" name = "light' . $x . '" />';
              echo '</div></div>';
            }
          }
          elseif ($x <= 1720){
            $filename = "Product/WF1700/BEHU" . $x . ".jpg";
            if (file_exists($filename)) {
              echo '<div class="item">';
              echo '<div class = "imgs">';
              echo '<a href = "Product/WF1700/BEHU' . $x . '.jpg" data-lightbox = "light">';
              echo '<img src = "Product/WF1700/BEHU' . $x . '.jpg" />';
              echo '</a>';
              echo '<input class = "txtbox" type = "text" name = "light' . $x . '" />';
              echo '</div></div>';
            }
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>經典優雅</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1801; $x <= 1850; $x++){
          $filename = "Product/WF1800/WF" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF1800/WF' . $x . '.jpg" data-lightbox = "grace">';
            echo '<img src = "Product/WF1800/WF' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "grace' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>花花兒</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1901; $x <= 1915; $x++){
          $filename = "Product/WF1900/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF1900/BEHU' . $x . '.jpg" data-lightbox = "flower">';
            echo '<img src = "Product/WF1900/BEHU' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "flower' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>金屬雷射</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1201; $x <= 1205; $x++){
          $filename = "Product/WF1200/WF" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF1200/WF' . $x . '.jpg" data-lightbox = "laser">';
            echo '<img src = "Product/WF1200/WF' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "laser' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>鑲鑽蕾絲</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1501; $x <= 1525; $x++){
          $filename = "Product/WF1500/WF" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF1500/WF' . $x . '.jpg" data-lightbox = "diamond">';
            echo '<img src = "Product/WF1500/WF' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "diamond' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  <div class = "container-fluid">
    <h1>甲片</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 5221; $x <= 5255; $x++){
          $filename = "Product/huna5000/huna" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/huna5000/huna' . $x . '.jpg" data-lightbox = "hard">';
            echo '<img src = "Product/huna5000/huna' . $x . '.jpg" />';
            echo '</a>';
            echo '<input class = "txtbox" type = "text" name = "hard' . $x . '" />';
            echo '</div></div>';
          }
        }
    ?>
  </div>
  
  
  
  
</form>