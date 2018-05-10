<?php

/* 
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugc_db_ao";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
session_start();

$question=$_POST['question'];
$user=$_SESSION['login_user'];

$sql=mysqli_query($conn,"SELECT * FROM ugc_userdetails WHERE email='$user'");
$arr=mysqli_fetch_assoc($sql);
$name=$arr['u_name'];


$query=mysqli_query($conn,"INSERT INTO dis_forum(question,name,time) VALUES('$question','$name',NOW())");

if($query==true)
{
    header("location: dis_forum.php");
}
 else 
     {
        echo "Connection Failure" . mysqli_connect_error();
     }

?>