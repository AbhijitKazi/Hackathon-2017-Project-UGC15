<?php

/* 
 *License Header
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugc_db_ao";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    session_start();
$user=$_SESSION['login_user'];
    if(empty($user))
    {
        header("Location: index.php");
        die("Redirecting to index.php");
    }
$query = mysqli_query($conn,"SELECT * from admin_details WHERE u_name = '$user'");
$arr = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
            <?php echo $arr['name'];?> Profile
        </title>
        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
        <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom_a.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">

        
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
                        <a href="#">UGC CS Admin</a>
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
                    <li>
                        <a href="dis_forum_admin.php">Discussion Forum</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="glyphicon glyphicon-user" href="ad_profile.php"> Profile</a></li>
                                <li><a class="glyphicon glyphicon-plus-sign" href="add_admin.php"> Add Admin</a></li>
                                <li><a class="glyphicon glyphicon-plus-sign" href="add_dpt.php"> Add Department</a></li>
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
        
        <div class="container text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3><?php echo $arr['name'];?></h3>
                </div>
                <div class="panel-body">
                    <label><h4>Name:</h4> <?php echo $arr['name'];?></label><br>
                    
                    <label><h4>Phone Number:</h4> <?php echo $arr['ph_no'];?></label>
                    <form action="updt_adpro.php" method="POST">
                    <label>Update <input type="text" name="ph_no"></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                    </form>
                    
                    <label><h4>Email:</h4> <?php echo $arr['email'];?></label>
                    <form action="updt_adpro.php" method="POST">
                    <label>Update <input type="text" name="email"></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                    </form>
                    
                    <label><h4>User Name:</h4> <?php echo $arr['u_name'];?></label><br>
                    
                    <label><h4>Designation:</h4> <?php echo $arr['desig'];?></label>
                    <form action="updt_adpro.php" method="POST">
                    <label>Update <input type="text" name="desig"></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                    </form>
                    
                </div>
            </div>
            <a href="change_adpw.html">Change Password</a>
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
    </body>
</html>