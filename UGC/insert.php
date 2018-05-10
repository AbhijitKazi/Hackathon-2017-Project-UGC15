<!-- 
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
 -->

<?php include 'connection.php'?>
<?php
    //create variables from the form
$name=$_POST['u_name'];
$email=$_POST['email'];
$phone=$_POST['ph_no'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$postcode=$_POST['postcode'];
$password=$_POST['password'];
//create the sql query which will insert data from the form to the database table
$sql = "INSERT INTO ugc_userdetails(u_name, email,ph_no,address,city,country,postcode,password)
VALUES ('$name','$email','$phone','$address','$city','$country','$postcode','$password')";

if (mysqli_query($conn, $sql)) {
//if the connection was established and the query was right, success
    //echo "Thank you for connecting with us!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <title>Acknowledgement</title>
        
        <!--Bootstrap-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Custom CSS-->
        <link href="css/custom_c.css" type="text/css" rel="stylesheet">
        
    </head>
    
    <body>
        <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="text-center">
                <h2>You have registered successfully</h2>
                <p>This enables you to take part in discussions going on in the discussion forum.<br>
                    Please be a responsible user and help us to help you better<br>
                    Please Log In for further activities.
                </p>
                <a class="button-section" href="login.php">Log In</a>
                </div>
            </div>
            </div>
        </div>
    </body>
    
</html>