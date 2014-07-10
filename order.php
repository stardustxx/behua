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
?>

</body>
</html>