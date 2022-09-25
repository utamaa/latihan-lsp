<?php

    session_start();
    require "dbconnect.php";

    if(isset($_POST['sign up'])) {
        $name = mysqli_real_escape_string($conn, $_POST['UserName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = mysqli_real_escape_string($conn, $_POST['password']);
    
        $query = "INSERT INTO tabel (name,email,password) VALUES('$name','$email','$pass')";
        $query_run = mysqli_query($conn,$query);
    
        if($query_run){
            $_SESSION['message'] = 'Sign Up successfull'; 
            header("Location: form.php");
            exit(0);
        } else {
            $_SESSION['message'] = 'Sign Up successfull'; 
            header("Location: form.php");
            exit(0);
        }
    }

    
?>