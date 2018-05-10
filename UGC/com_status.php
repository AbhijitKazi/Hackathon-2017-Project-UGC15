<?php

//license header;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugc_db_ao";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    session_start();
$com_id=$_POST['com_id'];

$query = mysqli_query($conn,"SELECT * FROM complaint WHERE c_id = '$com_id'");
$arr=mysqli_fetch_assoc($query);

if(!$query)
{
    $report1=("N/A");
    $report2=("Complaint ID is invalid");
    $report3=("N/A");
}
else
{
    $report1=$arr['name'];
    $report2=("Complaint ID = '$com_id'");
    $report3=$arr['status'];
  
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Complaint Status
        </title>
        
        <!--Bootstrap Core CSS-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>Complaint Status</h3>
                </div>
                <div class="panel-body">
                    <p class="text-center">
                        Name: <?php echo $report1?><br>
                        Your <?php echo $report2?><br>
                        Status: <?php echo $report3?><br>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>