<form action = "order.php" method = "post" class = "content">
  <div class = "container tbCenter">
    <input type = "submit" value = "提交" class = "btn btn-primary btn-lg" />
  </div>
  <div class = "container">
    <label for = "noteName"><h2>備註: (請勿要求沒列出的款式)</h2></label>
    <br />
    <textarea rows = 3 cols = 50 name = "note"></textarea>
  </div>

  <div class = "container-fluid">
    <h1>春天粉嫩</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
        for ($x = 9801; $x <= 9832; $x++){
          $filename = "Product/behu9800/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/behu9800/BEHU' . $x . '.jpg" data-lightbox = "spring">';
            echo '<img src = "Product/behu9800/BEHU' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "spring' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <div class = "container-fluid">
    <h1>方妮趣味</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1301; $x <= 1399; $x++) {
        if ($x == 1369 || $x == 1370){
            for ($y = 1; $y <= 2; $y++){
                $filename = "Product/WF1300/BEHU" . $x . "-" . $y . ".jpg";
                if (file_exists($filename)) {
                  echo '<div class="item">';
                  echo '<div class = "imgs">';
                  echo '<a href = "Product/WF1300/BEHU' . $x . '-' . $y . '.jpg" data-lightbox = "funny">';
                  echo '<img src = "Product/WF1300/BEHU' . $x . '-' . $y . '.jpg" />';
                  echo '</a></div>';
                  echo '<input class = "txtbox" type = "text" name = "funny' . $x . '-' . $y . '" />';
                  echo '</div>';
                }
            }
        }
        else {
            $filename = "Product/WF1300/BEHU" . $x . ".jpg";
            if (file_exists($filename)) {
              echo '<div class="item">';
              echo '<div class = "imgs">';
              echo '<a href = "Product/WF1300/BEHU' . $x . '.jpg" data-lightbox = "funny">';
              echo '<img src = "Product/WF1300/BEHU' . $x . '.jpg" />';
              echo '</a></div>';
              echo '<input class = "txtbox" type = "text" name = "funny' . $x . '" />';
              echo '</div>';
            }
        }
      }
    ?>
  </div>

<div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 2301; $x <= 2399; $x++) {
               $filename = "Product/WF1300/BEHU" . $x . ".jpg";
                if (file_exists($filename)) {
                  echo '<div class="item">';
                  echo '<div class = "imgs">';
                  echo '<a href = "Product/WF1300/BEHU' . $x . '.jpg" data-lightbox = "funny">';
                  echo '<img src = "Product/WF1300/BEHU' . $x . '.jpg" />';
                  echo '</a></div>';
                  echo '<input class = "txtbox" type = "text" name = "funny' . $x . '" />';
                  echo '</div>';
                }
            }
    ?>
  </div>


  <div class = "container-fluid">
    <h1>可愛兒童</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1101; $x <= 1199; $x++){
          $filename = "Product/behu1100/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/behu1100/BEHU' . $x . '.jpg" data-lightbox = "kids">';
            echo '<img src = "Product/behu1100/BEHU' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "kids' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <div class = "container-fluid">
    <h1>璀璨星空</h1>
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
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "sky' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <!--<div class = "container-fluid">
    <h1>卡通</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
        // for ($x = 1601; $x <= 1699; $x++){
        //   $filename = "Product/WF1600/BEHU" . $x . ".jpg";
        //   if (file_exists($filename)) {
        //     echo '<div class="item">';
        //     echo '<div class = "imgs">';
        //     echo '<a href = "Product/WF1600/BEHU' . $x . '.jpg" data-lightbox = "cartoon">';
        //     echo '<img src = "Product/WF1600/BEHU' . $x . '.jpg" />';
        //     echo '</a></div>';
        //     echo '<input class = "txtbox" type = "text" name = "cartoon' . $x . '" />';
        //     echo '</div>';
        //   }
        // }
    ?>
  </div>-->

  <!-- <div class = "container-fluid">
    <h1>小手</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      // for ($x = 301; $x <= 313; $x++){
      //     $filename = "Product/WF300/WF" . $x . ".jpg";
      //     if (file_exists($filename)) {
      //       echo '<div class="item">';
      //       echo '<div class = "imgs">';
      //       echo '<a href = "Product/WF300/WF' . $x . '.jpg" data-lightbox = "hand">';
      //       echo '<img src = "Product/WF300/WF' . $x . '.jpg" />';
      //       echo '</a></div>';
      //       echo '<input class = "txtbox" type = "text" name = "hand' . $x . '" />';
      //       echo '</div>';
      //     }
      //   }
    ?>
  </div> -->

  <div class = "container-fluid">
    <h1>漸層凝膠</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
        for ($x = 1701; $x <= 1799; $x++){
          $filename = "Product/WF1700/BEHU" . $x . ".jpg";
            if (file_exists($filename)) {
              echo '<div class="item">';
              echo '<div class = "imgs">';
              echo '<a href = "Product/WF1700/BEHU' . $x . '.jpg" data-lightbox = "light">';
              echo '<img src = "Product/WF1700/BEHU' . $x . '.jpg" />';
              echo '</a></div>';
              echo '<input class = "txtbox" type = "text" name = "light' . $x . '" />';
              echo '</div>';
            }
        }
    ?>
  </div>

  <div class = "container-fluid">
    <h1>經典優雅</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1801; $x <= 1899; $x++){
          $filename = "Product/WF1800/WF" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF1800/WF' . $x . '.jpg" data-lightbox = "grace">';
            echo '<img src = "Product/WF1800/WF' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "grace' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <div class = "container-fluid">
    <h1>花花兒</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1901; $x <= 1999; $x++){
          $filename = "Product/WF1900/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF1900/BEHU' . $x . '.jpg" data-lightbox = "flower">';
            echo '<img src = "Product/WF1900/BEHU' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "flower' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <div class = "container-fluid">
    <h1>金屬雷射</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1201; $x <= 1230; $x++){
          $filename = "Product/behu1200/BEHU" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/behu1200/BEHU' . $x . '.jpg" data-lightbox = "laser">';
            echo '<img src = "Product/behu1200/BEHU' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "laser' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <div class = "container-fluid">
    <h1>鑲鑽蕾絲</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1501; $x <= 1599; $x++){
          $filename = "Product/WF1500/WF" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/WF1500/WF' . $x . '.jpg" data-lightbox = "diamond">';
            echo '<img src = "Product/WF1500/WF' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "diamond' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <!-- <div class = "container-fluid">
    <h1>燙金</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      // for ($x = 1401; $x <= 1499; $x++){
      //     $filename = "Product/behua1400/BEHUA" . $x . ".jpg";
      //     if (file_exists($filename)) {
      //       echo '<div class="item">';
      //       echo '<div class = "imgs">';
      //       echo '<a href = "Product/behua1400/BEHUA' . $x . '.jpg" data-lightbox = "gold">';
      //       echo '<img src = "Product/behua1400/BEHUA' . $x . '.jpg" />';
      //       echo '</a></div>';
      //       echo '<input class = "txtbox" type = "text" name = "gold' . $x . '" />';
      //       echo '</div>';
      //     }
      //   }
    ?>
  </div> -->

  <div class = "container-fluid">
    <h1>迎春好運</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 501; $x <= 599; $x++){
          $filename = "Product/behua0500/BEHUA0" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/behua0500/BEHUA0' . $x . '.jpg" data-lightbox = "year2015">';
            echo '<img src = "Product/behua0500/BEHUA0' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "year2015' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div> 

  <div class = "container-fluid">
    <h1>周年慶限量</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1000; $x <= 9999; $x++){
          $filename = "Product/behua9900/BEHUA" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/behua9900/BEHUA' . $x . '.jpg" data-lightbox = "limited2015">';
            echo '<img src = "Product/behua9900/BEHUA' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "limited2015' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <!-- <div class = "container-fluid">
    <h1>甲片基本款</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      // for ($x = 5221; $x <= 5255; $x++){
      //     $filename = "Product/huna5000/huna" . $x . ".jpg";
      //     if ($x !== 5250 && $x !== 5255){
      //       if (file_exists($filename)) {
      //         echo '<div class="item">';
      //         echo '<div class = "imgs">';
      //         echo '<a href = "Product/huna5000/huna' . $x . '.jpg" data-lightbox = "hard">';
      //         echo '<img src = "Product/huna5000/huna' . $x . '.jpg" />';
      //         echo '</a></div>';
      //         echo '<input class = "txtbox" type = "text" name = "hard' . $x . '" />';
      //         echo '</div>';
      //       }
      //     }
      //   }
    ?>
  </div> -->

  <!-- <div class = "container-fluid">
    <h1>甲片新娘款</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      // for ($x = 5221; $x <= 5255; $x++){
      //     $filename = "Product/huna5000/huna" . $x . ".jpg";
      //     if ($x == 5250 || $x == 5255) {
      //       if (file_exists($filename)) {
      //         echo '<div class="item">';
      //         echo '<div class = "imgs">';
      //         echo '<a href = "Product/huna5000/huna' . $x . '.jpg" data-lightbox = "marry">';
      //         echo '<img src = "Product/huna5000/huna' . $x . '.jpg" />';
      //         echo '</a></div>';
      //         echo '<input class = "txtbox" type = "text" name = "marry' . $x . '" />';
      //         echo '</div>';
      //       }
      //     }
      //   }
    ?>
  </div> -->

  <!--<div class = "container-fluid">
    <h1>甲片美腳款</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php /*
      for ($x = 5221; $x <= 5255; $x++){
          $filename = "Product/huna5000/huna" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/huna5000/huna' . $x . '.jpg" data-lightbox = "hard">';
            echo '<img src = "Product/huna5000/huna' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "hard' . $x . '" />';
            echo '</div>';
          }
        } */
    ?>
  </div>-->

  <!--<div class = "container-fluid">
    <h1>指緣油</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php /*
      $oilItems = array(10001 =>  "guihua", "juzi", "ningmeng", "yingtao", "shuimitao", "meigui", "baihe", "moli", "caomei", "xunyicao", "lanmei", "qingpingguo");
      for ($x = 10001; $x <= 10012; $x++){
          $filename = "Product/EO/BEHU" . $oilItems[$x] . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/EO/BEHU' . $oilItems[$x] . '.jpg" data-lightbox = "oil">';
            echo '<img src = "Product/EO/BEHU' . $oilItems[$x] . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "oil' . $x . '" />';
            echo '</div>';
          }
        } */
    ?>
  </div>-->

  <div class = "container-fluid">
    <h1>銼刀</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      for ($x = 1; $x <= 10; $x++){
          $filename = "Product/BF000/BF" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/BF000/BF' . $x . '.jpg" data-lightbox = "bf">';
            echo '<img src = "Product/BF000/BF' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "bf' . $x . '" />';
            echo '</div>';
          }
        }
    ?>
  </div>

  <!-- <div class = "container-fluid">
    <h1>說明書及袋子</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php
      // $stuff = array(20001 => "Manual");
      // for ($x = 20001; $x <= 200002; $x++){
      //     $filename = "Product/essential/" . $stuff[$x] . ".jpg";
      //     if (file_exists($filename)) {
      //       echo '<div class="item">';
      //       echo '<div class = "imgs">';
      //       echo '<a href = "Product/essential/' . $stuff[$x] . '.jpg" data-lightbox = "essential">';
      //       echo '<img src = "Product/essential/' . $stuff[$x] . '.jpg" />';
      //       echo '</a></div>';
      //       echo '<input class = "txtbox" type = "text" name = "essential' . $stuff[$x] . '" />';
      //       echo '</div>';
      //     }
      //   }
    ?>
  </div> -->

  <!-- <div class = "container-fluid">
    <h1>日本美甲專用雙面膠</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php /*
      for ($x = 5221; $x <= 5255; $x++){
          $filename = "Product/huna5000/huna" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/huna5000/huna' . $x . '.jpg" data-lightbox = "hard">';
            echo '<img src = "Product/huna5000/huna' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "hard' . $x . '" />';
            echo '</div>';
          }
        } */
    ?>
  </div> -->

  <!-- <div class = "container-fluid">
    <h1>透明甲盤</h1>
  </div>
  <div class = "masonry container-fluid tbCenter">
    <?php /*
      for ($x = 5221; $x <= 5255; $x++){
          $filename = "Product/huna5000/huna" . $x . ".jpg";
          if (file_exists($filename)) {
            echo '<div class="item">';
            echo '<div class = "imgs">';
            echo '<a href = "Product/huna5000/huna' . $x . '.jpg" data-lightbox = "hard">';
            echo '<img src = "Product/huna5000/huna' . $x . '.jpg" />';
            echo '</a></div>';
            echo '<input class = "txtbox" type = "text" name = "hard' . $x . '" />';
            echo '</div>';
          }
        } */
    ?>
  </div> -->
</form>
