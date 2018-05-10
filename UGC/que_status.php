<?php

/* 
 * Copyright 2017 HP.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugc_db_ao";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    session_start();
$que_id=$_POST['que_id'];

$query = mysqli_query($conn,"SELECT * FROM query WHERE q_id = '$que_id'");
$arr=mysqli_fetch_assoc($query);

if(!$query)
{
    $report1=("N/A");
    $report2=("Query ID is invalid");
    $report3=("N/A");
}
else
{
    $report1=$arr['name'];
    $report2=("Query ID = '$que_id'");
    $report3=$arr['status'];
  
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Query Status
        </title>
        
        <!--Bootstrap Core CSS-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>Query Status</h3>
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