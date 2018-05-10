<?php

include 'connection.php';
$sql=mysqli_query($conn,"SELECT * FROM department");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Submit a query</title>
        
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom_a.css" rel="stylesheet">
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
                        <a href="#">UGC CS Home</a>
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
                        <a class="btn btn-default" href="login.php">Login</a>
                    </li>
			
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        <div class="container centered">
            <div class="col-md-6 centered">
        <div class="panel panel-default">
            <div class="panel-heading text-center">
                <h3>Submit your query</h3>
            </div>
        <div class="panel-body">
                            <form name="form" id="contact_form" action="index-q.php" method="POST"  
                                  onsubmit="return validateForm();" enctype="multipart/form-data" class="form form-vertical">
                                <div class="control-group">
                                    <label>Name</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" placeholder="Enter Name" name="name" required>
                                        <span id="name_validation" class="error"></span>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label>Phone no</label>
                                    <div class="controls">
                                        <input type="tel" class="form-control" placeholder="Enter Phone no." name="ph_no" pattern="^\d{10}$" required>
                                        <span id="phonenum" class="error"></span>
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label>Email</label>
                                    <div class="controls">
                                        <input type="text" class="form-control" placeholder="Enter Email id" name="email" required>
                                        <span id="email_validation" class="error"></span>
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
                                    <label>Category</label>
                                    <div class="controls">
                                        <select name="category" class="form-control">
                                            <option value="1">Not sure</option>
                                            <?php
                                            while($arr=mysqli_fetch_assoc($sql))
                                            {
                                             $var=$arr['d_name'];   
                                            echo '<option value="' . $var . '">' . $var . '</option>';
                                            }
                                            ?>
                                        </select>
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
        
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <a href="feedback.html">Feedback</a> | 
                    <a href="search_test.php">FAQs</a>
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>
        
        
        <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--Login JavaScript-->
    <script src="js/index.js"></script>
    <!--Email Validation JS-->
    <script src="js/querybox.js.js" type="text/javascript"></script>
        
    </body>
</html>