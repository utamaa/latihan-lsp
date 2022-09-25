<?php

    session_start();
    require "dbconnect.php";

    if(isset($_POST['edit_user'])) {
        $user_name = mysqli_real_escape_string($conn, $_POST["user_name"]);

        $name = mysqli_real_escape_string($conn, $_POST["UserName"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["password"]);

        $query = "UPDATE user_info 
                    SET user_name='$name', email='$email', password='$pass' 
                    WHERE user_name='$user_name'";
        $query_run = mysqli_query($conn,$query);

        if($query_run){
            $_SESSION['message'] = 'Edit successfull'; 
            header("Location: form.php");
            exit();
        } else {
            $_SESSION['message'] = 'Edit failed'; 
            header("Location: form.php");
            exit();
        }
    }


    if(isset($_POST["submit"])) {
        $name = mysqli_real_escape_string($conn, $_POST["UserName"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $pass = mysqli_real_escape_string($conn, $_POST["password"]);
    
        $query = "INSERT INTO user_info (user_name,email,password) VALUES('$name','$email','$pass')";
        $query_run = mysqli_query($conn,$query);
    
        if($query_run){
            $_SESSION['message'] = 'Sign Up successfull'; 
            header("Location: form.php");
            exit();
        } else {
            $_SESSION['message'] = 'Sign Up failed'; 
            header("Location: form.php");
            exit();
        }
    }


?>
