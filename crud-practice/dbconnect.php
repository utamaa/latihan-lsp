<?php
    $username = 'root';
    $password = '';
    $servername = 'localhost';
    $bdName = "latihan_users";

    $conn = mysqli_connect($servername,$username,$password,$bdName);
    if(!$conn) {
        die("unable to connect" . mysqli_connect_error());
    }
?>
Footer
