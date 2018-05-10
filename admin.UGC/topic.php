<?php 
include 'connection.php';
   $t_name = $_POST['t_name'];
 	$t_desc = $_POST['t_desc'];
    //the form has been posted, so save it
    $sql = "INSERT INTO topic(t_name, t_desc) VALUES ('$t_name', '$t_desc')";
    $result = mysqli_query($conn,$sql); 
    if($result==true)
    {
       header ("location: admin_dashboard.php");
    }
    else
    {
        echo "ERROR creating Topic";
    }
?>