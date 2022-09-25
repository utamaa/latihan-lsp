<?php
    $username = 'root';
    $password = '';
    $hostname = 'localhost';
    $database = "crud_practice";
    
    $conn = mysqli_connect($hostname,$username,$password,$database);
    
    if(!$conn) {
        die("unable to connect " . mysqli_connect_error());
    }
?>

