<!-- mysql database details -->

<?php

    //set up a database connection
    $dbhost = "localhost";
    $dbuser = "stardust";
    $dbport = "3306";
    $dbpass = "";
    $dbname = "c9";
    
    $connection = mysqli_connect($dbhost, $dbport, $dbuser, $dbpass, $dbname);
    
    //test if connection succeeded
    if(mysqli_connect_errno()){
        die("Database failed: ".
            mysqli_connect_error().
            "(".mysqli_connect_errno().")"
            );
    }else{
        echo nl2br("\n connect succeeded");
    }
?>