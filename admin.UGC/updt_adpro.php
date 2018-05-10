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
$email=$_POST['email'];
$desig=$_POST['desig'];


if(!empty($ph_no))
{
    $query = mysqli_query($conn,"UPDATE admin_details SET ph_no = '$ph_no' WHERE u_name = '$user'");
    $ph_message = (" updated");
}
else
{
    $ph_message = (" not updated");
}

if(!empty($email))
{
    $query = mysqli_query($conn,"UPDATE admin_details SET email = '$email' WHERE u_name = '$user'");
    $em_message = (" updated");
}
else
{
    $em_message = (" not updated");
}

if(!empty($desig))
{
    $query = mysqli_query($conn,"UPDATE admin_details SET desig = '$desig' WHERE u_name = '$user'");
    $ds_message = (" updated");
}
else
{
    $ds_message = (" not updated");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Profile Updation
        </title>
        
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
        
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
                        <a href="dashboard.php">UGC CS Admin</a>
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
                    <p><strong>Email</strong>: <?php echo $em_message;?></p>
                    <p><strong>Designation</strong>: <?php echo $ds_message;?></p>
                </div>
            </div>
            <a href="ad_profile.php" class="btn btn-primary">Go Back</a>
        </div>
        
        
        
        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--Login JavaScript-->
    <script src="js/index.js"></script>
    <!--Email Validation JS-->
    <script src="js/querybox.js.js" type="text/javascript"></script>
        
    </body>
</html>