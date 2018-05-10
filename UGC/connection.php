<?php

//license header

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugc_db_ao";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
