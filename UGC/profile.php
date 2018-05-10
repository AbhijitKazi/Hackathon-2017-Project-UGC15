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
        header("Location: login.php");
        die("Redirecting to index.php");
    }
$query = mysqli_query($conn,"SELECT * from ugc_userdetails WHERE email = '$user'");
$arr = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title><?php echo $arr['u_name'];?> Profile</title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!--Bootstrap CSS-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Custom CSS-->
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
        
        <div class="container row center-block">
            <div class="col-md-6">
        <div class = "panel panel-default">
            <div class = "panel-heading text-center">
                <h3>
                    <?php echo $arr['u_name'];?> Profile
                </h3>
            </div>
   
            <div class = "panel-body">
                <p><strong>Name: </strong><?php echo $arr['u_name'];?></p><br>
                <p><strong>Phone Number: </strong><?php echo $arr['ph_no'];?>
                <form action="update_pro.php" method="POST">
                    <label>Update <input type="text" name="ph_no"></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
                
                <p><strong>Email: </strong><?php echo $arr['email'];?>
                <p><strong>Address: </strong><?php echo $arr['address'];?>
                <form action="update_pro.php" method="POST">
                    <label>Update <input type="text" name="address"></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
                <p><strong>City: </strong><?php echo $arr['city'];?>
                <form action="update_pro.php" method="POST">
                    <label>Update <input type="text" name="city"></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
                <p><strong>PIN: </strong><?php echo $arr['postcode'];?>
                    <form action="update_pro.php" method="POST">
                    <label>Update <input type="text" name="postcode"></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
                <p><strong>Country: </strong><?php echo $arr['country'];?>
                    <form action="update_pro.php" method="POST">
                    <label>Update <input type="text" name="country"></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
            </div>
        </div>
       </div>
            <div class="col-md-6 text-center">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3>My Queries</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-fixed">
                            <thead>
                                <tr>
                                    <th class="col-xs-1 text-center">ID</th>
                                    <th class="col-xs-4 text-center">Query</th>
                                    <th class="col-xs-1 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query_data = mysqli_query($conn,"SELECT * FROM query WHERE email = '$user'ORDER BY q_id DESC");
                                while ($arr_query = mysqli_fetch_assoc($query_data)){
                                echo "<tr>";
                                    echo '<td class="col-xs-1">' . $arr_query['q_id'] . '</td>';
                                    echo '<td class="col-xs-4">' . $arr_query['message'] . '</td>';
                                    echo '<td class="col-xs-1">' . $arr_query['status'] . '</td>';
                                echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3>My Complaints</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-fixed">
                            <thead>
                                <tr>
                                    <th class="col-xs-1 text-center">ID</th>
                                    <th class="col-xs-4 text-center">Complaint</th>
                                    <th class="col-xs-1 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $com_data = mysqli_query($conn,"SELECT * FROM complaint WHERE email = '$user' ORDER BY c_id DESC");
                                while ($arr_com = mysqli_fetch_assoc($com_data)){
                                echo "<tr>";
                                    echo '<td class="col-xs-1">' . $arr_com['c_id'] . '</td>';
                                    echo '<td class="col-xs-4">' . $arr_com['message'] . '</td>';
                                    echo '<td class="col-xs-1">' . $arr_com['status'] . '</td>';
                                echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center"><a href="change_pw.html">Change Password</a></div>
        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <a href="feedback.html">Feedback</a>
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