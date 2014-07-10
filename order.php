<!doctype html>
<html>

<?php include('header.php'); ?>

<?php
    $x = 30;
    $today = date("y/m/d");
    echo $today . '<br>';
    echo '<h3>You have ordered: </h3>';
    for ($each = 1; $each <= $x; $each++){
        if ($each <= 15) {
            if ($_POST['image' . $each] != 0) {
                echo '<p>Canada' . $each . ": " . $_POST['image' . $each] . "<br>";
            }
        }
        elseif ($each <= 30){
            if ($_POST['image' . $each] != 0) {
                echo '<p>Crystal' . $each . ": " . $_POST['image' . $each] . "<br>";
            }
        }
    }
?>

</body>
</html>