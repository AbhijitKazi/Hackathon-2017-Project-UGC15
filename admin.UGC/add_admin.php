<!--
/* 
 * License Header
 */
-->

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>
            Add Administrator
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
        
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-center">Add Admin Details</h3>
                </div>
                <div class="panel-body">
                    <div class="form-style-10">
                    <form action="insert_admin.php" name="form" method="POST"
                          id="contact_form" onsubmit="return validateForm();" enctype="multipart/form-data">
                        <div class="inner-wrap">
                            <label><b>Name:</b> 
                                <input type="text" name="name" placeholder="Name" required="required">
                                <span id="name_validation" class="error"></span>
                            </label>
                            <label><b>Phone Number:</b> 
                                <input type="text" name="ph_no" placeholder="Phone Number" required="required">
                                <span id="phonenum" class="error"></span>
                            </label>
                            <label><b>E Mail:</b> 
                                <input type="text" name="email" placeholder="E-mail" required="required">
                                <span id="email_validation" class="error"></span>
                            </label>
                            <label><b>Designation:</b> 
                                <input type="text" name="desig" placeholder="Designation" required="required">
                                <span id="name_validation" class="error"></span>
                            </label>
                            <label><b>User Name:</b> 
                                <input type="text" name="u_name" placeholder="User Name" required="required">
                                <span id="name_validation" class="error"></span>
                            </label>
                            <label><b>Password:</b> 
                                <input type="password" name="password" placeholder="Password" required="required">
                                <span id="name_validation" class="error"></span>
                            </label>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          
                        </div>      
                    </form>
                    </div>
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