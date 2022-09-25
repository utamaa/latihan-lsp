<?php
    $username = 'root';
    $password = '';
    $servername = 'localhost';

    $conn = mysqli_connect($servername,$username,$password);
    if(!$conn) {
        die("unable to connect" . mysqli_connect_error());
    }
?>