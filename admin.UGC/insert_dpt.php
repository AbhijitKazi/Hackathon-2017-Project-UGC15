<?php include 'connection.php'?>
<?php

/* 
 * License Header
 */

//Create variables form the form
$d_name=$_POST['d_name'];
$ph_no=$_POST['ph_no'];
$email=$_POST['email'];
$log_name=$_POST['log_name'];
$password=$_POST['password'];
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Department Addition</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!--Custom CSS-->
        <link href="css/custom_a.css" rel="stylesheet">
        <link href="css/custom_c.css" rel="stylesheet">
        
    </head>
    <body>
        
            <!-- Navigation -->
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
                        <a href="admin_dashboard.php">UGC CS Admin</a>
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
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="glyphicon glyphicon-user" href="ad_profile.php"> Profile</a></li>
                                <li><a class="glyphicon glyphicon-plus-sign" href="add_admin.php"> Add Admin</a></li>
                                <hr>
				<li><a class="glyphicon glyphicon-log-out" href="logout.php"> Logout</a></li>	
                            </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>Site Admin Addition</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $sql = mysqli_query($conn,"SELECT * FROM department WHERE d_name = '$d_name'");
                    //$check = mysqli_fetch_assoc($sql);
                    $row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
                    $active = $row['active'];
      
                    $count = mysqli_num_rows($sql);
                    
                    if($count==0)
                    {
                        $insert = mysqli_query($conn,"INSERT INTO department(d_name,ph_no,email,log_name,password)"
                                . " VALUES('$d_name','$ph_no','$email','$log_name','$password')");
                        echo "<p>New Department is added Successfully.<br>Please send the following credentials to the new department admin.<br><b>Username:</b>" . $log_name . "<br><b>Password:</b>" . $password . "<br></p>";
                    }
                    else {
                            echo "<p>Department name already exists.<br>Please abort.<br>";
                         }
                    ?>
                </div>
            </div>
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