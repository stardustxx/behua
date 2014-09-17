<!-- mysql database details -->

<?php

    //set up a database connection
    $dbhost = "localhost";
    $dbuser = "czlqzgvp_order";
    $dbport = "2083";
    $dbpass = "star11panda";
    $dbname = "czlqzgvp_order";
    
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    
    //test if connection succeeded
    if(mysqli_connect_errno()){
        die("Database failed: ".
            mysqli_connect_error().
            "(".mysqli_connect_errno().")"
            );
    }else{
        //echo nl2br("\n connect succeeded");
    }
?>