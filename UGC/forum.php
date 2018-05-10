<?php
include 'connection.php';
session_start();
$user=$_SESSION['login_user'];

$topic=mysqli_query($conn,"SELECT * FROM topic ORDER BY t_id DESC");

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Discussion Forum</title>
        
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="bikram" >

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
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="profile.php">My Profile</a></li>
				<li><a href="logout.php">Logout</a></li>	
                            </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        
        <div class="col-md-12"><h2 class="text-center">UGC Discussion Forum</h2></div>
        
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="panel panel-default">
                    <?php
                    while ($result=mysqli_fetch_assoc($topic))
                    {
                    	$id=$result['t_id'];
                        echo '<div class="panel-heading">';
                        echo '<h3>';
                        echo '<label>Topic: ' . $result['t_name'];
                        echo '</h3>';
                        
                         echo '<form action="dis_forum.php" class="form form-vertical" method="POST">';
								echo '<div class="row">';
								echo '<div class="col-md-6">';                       
                        echo 'topic id : ' . '<input type="text"  name="t_id" required="required" readonly="readonly" value="' . $id . '">';
                        echo '</div>';
                        	echo '<div class="col-md-6 text-right">';  
                        echo '<div class="controls">';
                                    echo '<button type="submit" class="btn btn-primary">' . 'JOIN THIS DISCUSSION' . '</button>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            echo '</form>';
                        echo '</div>';
                        echo '<div class="panel-body">';
                        echo '<br/>';
                        echo  $result['t_desc'];
                        echo '<br/>';
                		}
                    ?>
                    </div>
                  
                </div>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
        
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