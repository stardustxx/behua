<!doctype html>
<html>

<?php include('header.php'); ?>

<?php
    $x = 30;
    $today = date("y/m/d");
    echo $today . '<br>';
    echo '<h3>You have ordered: </h3>';
    for ($each = 1; $each <= $x; $each++){
        if ($_POST['image' . $each] != 0) {
            echo '<p>Image' . $each . ": " . $_POST['image' . $each] . "<br>";
        }
    }
?>

</body>
</html>