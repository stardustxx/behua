<!-- mysql database details -->

<?php

    //set up a database connection
    $dbhost = "mysql16.000webhost.com";
    $dbuser = "a4561001_admin";
    $dbport = "3306";
    $dbpass = "admin2014";
    $dbname = "a4561001_behua";
    
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