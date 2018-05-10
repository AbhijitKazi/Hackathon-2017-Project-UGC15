<!--/* 
 *License Header
 */-->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ugc_db_ao";
    session_start();
    $dpt=$_SESSION['login_user'];

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $sql=mysqli_query($conn,"SELECT * FROM department WHERE log_name = '$dpt'");
    $arr_dpt=mysqli_fetch_assoc($sql);
    $cat=$arr_dpt['cat'];
   
?>
<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $arr_dpt['d_name'];?></title>

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
                        <a href="#"><?php echo $arr_dpt['d_name'];?></a>
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
                        <a href="dis_forum_dpt.php">Discussion Forum</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Department<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a class="glyphicon glyphicon-user" href="dpt_profile.php"> Profile</a></li>
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
    
    <!--Content Area-->
    <div class="container">
    <div class="row">
        
 <!--   </div>   -->

            <div class="col-sm-8">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h1 class="text-center">Queries</h1>
                </div>
                    <div class="panel-body">
                        <table class=" table table-bordered table-fixed">
                            <thead>
                                <tr>
                                    <th class="col-xs-1">Q_ID</th>
                                    <th class="col-xs-1">Name</th>
                                    <th class="col-xs-1">Email</th>
                                    <th class="col-xs-3">Query</th>
                                    <th class="col-xs-1">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_query = mysqli_query($conn,"SELECT * FROM query WHERE category='$cat' ORDER BY q_id DESC");
                                while($arr_query = mysqli_fetch_assoc($sql_query)){
                                    echo "<tr>";
                                        echo '<td class="col-xs-1">' . $arr_query['q_id'] . '</td>';
                                        echo '<td class="col-xs-1">' . $arr_query['name'] . '</td>';
                                        echo '<td class="col-xs-1">' . $arr_query['email'] . '</td>';
                                        echo '<td class="col-xs-3">' . $arr_query['message'] . '</td>';
                                        echo '<td class="col-xs-1">' . $arr_query['ad_sta'] . '</td>';
                                    echo "</tr>";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                
                </div>
                <div class="panel-body">
                    <h4>Process Query</h4>
                    <p>Please enter the Query ID to start processing</p>
                <form action="update_que_sta.php" method="POST">
                    <label>Query ID<input type="text" name="que_id" required></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
                </div>
            </div><!--end of col-4-->
 <!--    </div>
     </div> -->
    </div><!--End of container-->
    
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Live Chat</h3>
                </div>
                <div class="panel-body">
                    <script type="text/javascript" src="//www3.smartchatbox.com/shoutbox/start.php?key=741890136"></script>
                </div>
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                <h1 class="text-center">Complaints</h1>
                </div>
                    <div class="panel-body">
                        <table class=" table table-bordered table-fixed">
                            <thead>
                                <tr>
                                    <th class="col-xs-1">C_ID</th>
                                    <th class="col-xs-1">Name</th>
                                    <th class="col-xs-1">Email</th>
                                    <th class="col-xs-3">Query</th>
                                    <th class="col-xs-1">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_com = mysqli_query($conn,"SELECT * FROM complaint WHERE category='$cat' ORDER BY c_id DESC");
                                while($arr_com = mysqli_fetch_assoc($sql_com)){
                                    echo "<tr>";
                                        echo '<td class="col-xs-1">' . $arr_com['c_id'] . '</td>';
                                        echo '<td class="col-xs-1">' . $arr_com['name'] . '</td>';
                                        echo '<td class="col-xs-1">' . $arr_com['email'] . '</td>';
                                        echo '<td class="col-xs-3">' . $arr_com['message'] . '</td>';
                                        echo '<td class="col-xs-1">' . $arr_com['ad_sta'] . '</td>';
                                    echo "</tr>";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                
                </div>
                <div class="panel-body">
                    <h4>Process Complaint</h4>
                    <p>Please enter the Complaint ID to start processing</p>
                <form action="update_com_sta.php" method="POST">
                    <label>Query ID<input type="text" name="com_id" required></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
                </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <h3>Quick Links</h3>
                </div>
                <div class="panel-body">
                    <label class="glyphicon glyphicon-envelope"><a href="mailpage.html"> Send Mail</a></label>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="panel panel-default ">
                <div class="panel-heading text-center">
                    <h3>Feedbacks from Users</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-fixed">
                        <thead>
                            <tr>
                                <td class="col-xs-1">ID</td>
                                <td class="col-xs-2">Name</td>
                                <td class="col-xs-1">Phone No.</td>
                                <td class="col-xs-2">Email</td>
                                <td class="col-xs-2">Experience</td>
                                <td class="col-xs-4">Message</td>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                $sql_com = mysqli_query($conn,"SELECT * FROM feedback ORDER BY f_id DESC");
                                while($arr_fd = mysqli_fetch_assoc($sql_com)){
                                    echo "<tr>";
                                        echo '<td class="col-xs-1">' . $arr_fd['f_id'] . '</td>';
                                        echo '<td class="col-xs-2">' . $arr_fd['name'] . '</td>';
                                        echo '<td class="col-xs-1">' . $arr_fd['ph_no'] . '</td>';
                                        echo '<td class="col-xs-2">' . $arr_fd['email'] . '</td>';
                                        echo '<td class="col-xs-2">' . $arr_fd['exp'] . '</td>';
                                        echo '<td class="col-xs-4">' . $arr_fd['message'] . '</td>';
                                        
                                    echo "</tr>";
                                }
                                
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    <hr>
    
    <!-- Footer -->
        <footer>
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