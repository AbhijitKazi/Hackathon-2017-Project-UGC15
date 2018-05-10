<?php

/* 
 * License Header
 */

include 'connection.php';

?>

<html>
    <head>
        <title>Insert FAQ</title>
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
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <h3>Insert FAQ</h3>
                        </div>
                        <div class="panel-body">
                            <form name="form" id="contact_form" action="insert_faq.php" method="POST"
                            onsubmit="return validateForm();" class="form form-vertical">
                            <div class="control-group">
                                <label>Question</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Question" name="question" required>
                                </div>
                            </div>
                            <div class="control-group">
                                    <label>Answer</label>
                                    <div class="controls">
                                        <textarea class="form-control" name="answer"></textarea>
                                    </div>
                            </div>
                            <div class="control-group">
                                <label>Link (if any)</label>
                                <div class="controls">
                                    <input type="text" class="form-control" placeholder="Link" name="link" required>
                                </div>
                            </div>
                            <div class="control-group text-center">
                                <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Insert
                                        </button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="panel panel-default">
                <div class="panel-heading">
                <h1 class="text-center">FAQs</h1>
                </div>
                    <div class="panel-body">
                        <table class=" table table-bordered table-fixed">
                            <thead>
                                <tr>
                                    <th class="col-xs-2">Q No.</th>
                                    <th class="col-xs-4">Question</th
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql_query = mysqli_query($conn,"SELECT * FROM faq ORDER BY id DESC");
                                while($arr_query = mysqli_fetch_assoc($sql_query)){
                                    echo "<tr>";
                                        echo '<td class="col-xs-2">' . $arr_query['id'] . '</td>';
                                        echo '<td class="col-xs-4">' . $arr_query['question'] . '</td>';
                                    echo "</tr>";
                                }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                    </div>
                    <form action="dlt_faq.php" method="POST">
                        <label>Delete Question<input type="text" name="id"></label>
                        <button type="submit" class="btn btn-default">Delete</button>
                    </form>
                </div>
            </div>
            
        </div>
        
        <!-- Footer -->
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
