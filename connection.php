<?php
$servername = "localhost";
$username = "shivani";
$password = "";
$dbname = "bankingsystem";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error() . '<hr>');
}

?>
