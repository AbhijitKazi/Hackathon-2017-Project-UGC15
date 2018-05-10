<?php

/* 
 * License Header
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugc_db_ao";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    session_start();
$user=$_SESSION['login_user'];
   
$que_id=$_POST['que_id'];

$query = mysqli_query($conn,"SELECT * FROM query WHERE q_id = '$que_id'");
$arr=mysqli_fetch_assoc($query);

$sql=mysqli_query($conn,"SELECT * FROM department WHERE log_name='$user'");
$dpt=mysqli_fetch_assoc($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Update Query Status</title>
    
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
    <link href="css/custom_c.css.css" rel="stylesheet">
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
                        <a href="dpt_dashboard.php.php"><?php echo $dpt['d_name'];?></a>
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
                                <li><a class="glyphicon glyphicon-user" href="dpt_profile.php"> Profile</a></li>
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
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3>Process <?php echo $arr['name'];?>'s query</h3>
                </div>
                <div class="panel-body">
                    <p><b>Name: </b><?php echo $arr['name'];?></p><br>
                    <p><b>Phone Number: </b><?php echo $arr['ph_no'];?></p><br>
                    <p><b>Email: </b><?php echo $arr['email'];?></p><br>
                    <p><b>Time: </b><?php echo $arr['time'];?></p><br>
                    <p><b>Query: </b><?php echo "<p>Q ID:&nbsp" . $arr['q_id'] . "<br>Query:&nbsp". $arr['message'];?></p><br>
                    <p><b>Status: </b><?php echo $arr['ad_sta'];?></p><br>
                </div>
                <div class="panel-body">
                    <form class="form form-vertical" name="form" action="que_sta_update.php" method="POST">
                        <label>Q ID</label><input type="text" value="<?php echo $arr['q_id'];?>" name="que_id">
                        <textarea class="form-control" name="up_status" placeholder="Update Status"></textarea>
                        <br><button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-6">
                    <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <h3>Connect to User</h3>
                    </div>
                    <div class="panel-body">
                        <form name="form" id="contact_form" action="usr_connect.php" method="POST"
                            onsubmit="return validateForm();" class="form form-vertical">
                            <div class="control-group">
                                <label>Email ID</label>
                                <div class="controls">
                                    <input value="<?php echo $arr['email'];?>" type="text" class="form-control" placeholder="Email id" name="email" required>
                                    <span id="email_validation" class="error"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Cc</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Cc mail id" name="cc_mail" required>
                                    <span id="email_validation" class="error"></span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label>Subject</label>
                                <div class="controls">
                                    <input value="UGC CS | Query ID <?php echo $arr['q_id'];?>" type="text" class="form-control" placeholder="Subject" name="subject" required>
                                </div>
                            </div>
                            <div class="control-group">
                                    <label>Message</label>
                                    <div class="controls">
                                        <textarea class="form-control" name="message"></textarea>
                                        <span id="message_validation" class="error"></span>
                                    </div>
                            </div>
                            <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Post
                                        </button>
                                    </div>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
                
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="text-center">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
        
        <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--Login JavaScript-->
    <script src="js/index.js"></script>
    <script src="js/querybox.js"></script>
        
    </body>
</html>