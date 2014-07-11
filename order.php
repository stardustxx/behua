<!doctype html>
<html>

<?php include('header.php'); ?>

<?php
    $today = date("y/m/d");
    echo $today . '<br>';
    echo '<h3>You have ordered: </h3>';
    for ($each = 9801; $each <= 9812; $each++){
        if ($each <= 9812) {
            if ($_POST['spring' . $each] != 0) {
                echo '<p>春天粉嫩' . $each . ": " . $_POST['spring' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 1301; $each <= 1370; $each++){
        if ($each <= 1370) {
            if ($_POST['funny' . $each] != 0) {
                echo '<p>方妮趣味' . $each . ": " . $_POST['funny' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 1101; $each <= 1115; $each++){
        if ($each <= 1115) {
            if ($_POST['kids' . $each] != 0) {
                echo '<p>可愛兒童' . $each . ": " . $_POST['kids' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 9701; $each <= 9712; $each++){
        if ($each <= 9712) {
            if ($_POST['kids' . $each] != 0) {
                echo '<p>催燦星空' . $each . ": " . $_POST['kids' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 1601; $each <= 1620; $each++){
        if ($each <= 1620) {
            if ($_POST['cartoon' . $each] != 0) {
                echo '<p>卡通' . $each . ": " . $_POST['cartoon' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 300; $each <= 315; $each++){
        if ($each <= 315) {
            if ($_POST['hand' . $each] != 0) {
                echo '<p>小手' . $each . ": " . $_POST['hand' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 1701; $each <= 1720; $each++){
        if ($each <= 1720) {
            if ($_POST['light' . $each] != 0) {
                echo '<p>漸層光療' . $each . ": " . $_POST['light' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 1801; $each <= 1850; $each++){
        if ($each <= 1850) {
            if ($_POST['grace' . $each] != 0) {
                echo '<p>經典優雅' . $each . ": " . $_POST['grace' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 1901; $each <= 1915; $each++){
        if ($each <= 1915) {
            if ($_POST['flower' . $each] != 0) {
                echo '<p>花花兒' . $each . ": " . $_POST['flower' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 1201; $each <= 1205; $each++){
        if ($each <= 1205) {
            if ($_POST['laser' . $each] != 0) {
                echo '<p>金屬雷射' . $each . ": " . $_POST['laser' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 1501; $each <= 1525; $each++){
        if ($each <= 1525) {
            if ($_POST['diamond' . $each] != 0) {
                echo '<p>鑲鑽蕾絲' . $each . ": " . $_POST['diamond' . $each] . "<br>";
            }
        }
    }
    
    for ($each = 5221; $each <= 5255; $each++){
        if ($each <= 5255) {
            if ($_POST['hard' . $each] != 0) {
                echo '<p>甲片' . $each . ": " . $_POST['hard' . $each] . "<br>";
            }
        }
    }
?>

</body>
</html>