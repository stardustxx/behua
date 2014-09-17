<?php
      for ($x = 1344; $x <= 1350; $x++) {
        $filename = "Product/WF1300/BEHU" . $x . ".jpg";
        echo $filename . "\r\n";
        if (file_exists($filename)){
            echo "True";
        }
        else {
          echo "False";
        }
      }
    ?>