<!DOCTYPE HTML>
<html>
<body>
<!-- always call the db connection first -->
<?php include 'db.php' ?>

<!-- then detect if input exists -->
<?php
    
    $name = (!empty($_GET['user_name'] ? $_GET['user_name'] : "");
    $email = (!empty($_GET['user_email'] ? $_GET['user_email'] : "");
    $pass = (!empty($_GET['user_password'] ? $_GET['user_password'] : "");
    $passConfirm = (!empty($_GET['user_password_confirmation'] ? $_GET['user_password_confirmation'] : "");
    
    //if name, email and pass and passConfirm not empty
    if(!empty($name) and !empty($email) and !empty($pass) and !empty($passConfirm)){
        //perform database query
        $query = "INSERT INTO users(name, email, password)";
        $query .= "VALUES('{$name}', '{$email}', '{$pass}'";
        
        $result = mysqli_query($connection, $query);
        
        if($result){
            //success
            echo "Success!";
            
            //jump to secured page
            //header('Location: loggedin.php');
        }else{
            //failure
            die("Database query failed." . mysqli_error($connection));
            echo "Fail";
        }
    }else{
        echo "Fail"
    }
    
    mysqli_close($connection);
?>
</body>
</html>