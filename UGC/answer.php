<?php

//license header;

include 'connection.php';
session_start();

$q_no=$_POST['q_no'];
$answer=$_POST['answer'];
$user=$_SESSION['login_user'];

$sql=mysqli_query($conn,"SELECT * FROM admin_details WHERE email='$user'");
$arr=mysqli_fetch_assoc($sql);
$name=$arr['name'];

$query=mysqli_query($conn,"INSERT INTO dis_ans(q_id,answer,name,time) VALUES('$q_no','$answer','$name',NOW())");

if($query==true)
{
    header("location: dis_forum.php");
}
 else 
     {
        echo "Connection Failure";
     }

?>