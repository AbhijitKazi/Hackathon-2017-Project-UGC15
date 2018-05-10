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
    
$user=$_SESSION['login_user'];

$ph_no=$_POST['ph_no'];
$address=$_POST['address'];
$city=$_POST['city'];
$postcode=$_POST['postcode'];
$country=$_POST['country'];

if(!empty($ph_no))
{
    $query = mysqli_query($conn,"UPDATE ugc_userdetails SET ph_no = '$ph_no' WHERE email = '$user'");
    $ph_message = (" updated");
}
else
{
    $ph_message = (" not updated");
}

if(!empty($address))
{
    $query = mysqli_query($conn,"UPDATE ugc_userdetails SET address = '$address' WHERE email = '$user'");
    $ad_message = (" updated");
}
else
{
    $ad_message = (" not updated");
}

if(!empty($city))
{
    $query = mysqli_query($conn,"UPDATE ugc_userdetails SET city = '$city' WHERE email = '$user'");
    $city_message = (" updated");
}
else
{
    $city_message = (" not updated");
}

if(!empty($postcode))
{
    $query = mysqli_query($conn,"UPDATE ugc_userdetails SET postcode = '$postcode' WHERE email = '$user'");
    $pin_message = (" updated");
}
else
{
    $pin_message = (" not updated");
}

if(!empty($country))
{
    $query = mysqli_query($conn,"UPDATE ugc_userdetails SET country = '$country' WHERE email = '$user'");
    $cnty_message = (" updated");
}
else
{
    $cnty_message = (" not updated");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Profile Updation
        </title>
        
        <!--Bootstrap Core CSS-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Custom CSS-->
        <link href="css/custom_a.css" rel="stylesheet"> 
        
    </head>
    
    <body>
        
        <!--Navbar-->
        
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.ugc.ac.in/#">
                    <img src="ugc_logo.png" alt="UGC LOGO" height="50" width="250">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index-user.php">UGC CS Home</a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.ugc.ac.in/page/Genesis.aspx">Genesis</a></li>
                            <li><a href="http://www.ugc.ac.in/page/Mandate.aspx">Mandate</a></li>
                            <li><a href="http://www.ugc.ac.in/page/UGC-ACT-1956.aspx">UGC Act 1956</a></li>
                            <li><a href="http://www.ugc.ac.in/page/Logo.aspx">Logo</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="logout.php" class="btn btn-default">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Profile Updation</h3>
                </div>
                <div class="panel-body">
                    <p><strong>Phone Number</strong>: <?php echo $ph_message;?></p>
                    <p><strong>Address</strong>: <?php echo $ad_message;?></p>
                    <p><strong>City</strong>: <?php echo $city_message;?></p>
                    <p><strong>PIN</strong>: <?php echo $pin_message;?></p>
                    <p><strong>Country</strong>: <?php echo $cnty_message;?></p>
                </div>
            </div>
            <a href="profile.php" class="btn btn-primary">Go Back</a>
        </div>
    </body>
</html>