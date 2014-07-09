<?php

    include 'db.php'
    
    // Create table
    $sql="CREATE TABLE users(
            PID INT NOT NULL AUTO_INCREMENT, 
            PRIMARY KEY(PID),
            name CHAR(30),
            email CHAR(30),
            password varchar(100) not null
          )";

    // Execute query
    if (mysqli_query($connection,$sql)) {
      echo "Table users created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($connection);
    }

?>