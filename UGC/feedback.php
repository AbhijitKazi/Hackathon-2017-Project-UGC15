<?php include 'connection.php'?>
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
//Taking variable values
$name=$_POST['name'];
$ph_no=$_POST['ph_no'];
$email=$_POST['email'];
$exp=$_POST['exp'];
$message=$_POST['message'];

$sql = "INSERT INTO feedback(name,ph_no,email,exp,message) VALUES('$name','$ph_no','$email','$exp','$message')";

if(mysqli_query($conn,$sql))
{
    $ack=("Thanks for your feedback");
}
else
{
    $ack=("Oops!! Sorry we are unable to take your feedback at the moment!");
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Feedback
        </title>
        
        <!--Bootstrap Core CSS-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    
    <body>
        <div class="container">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3><u>Feedback</u></h3>
                </div>
                <div class="panel-body">
                    <p><?php echo $ack?></p>
                </div>
            </div>
        </div>
    </body>
</html>
