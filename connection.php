<?php
$servername = "localhost";
$username = "id15325867_shivani";
$password = "xB^#UN9y/)#w(yqD";
$dbname = "id15325867_bankingsystem";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error() . '<hr>');
}

?>
