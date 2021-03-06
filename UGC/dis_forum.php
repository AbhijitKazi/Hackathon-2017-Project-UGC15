<?php

/* 
 * License Header
 */

include 'connection.php';
session_start();
$user=$_SESSION['login_user'];

$question=mysqli_query($conn,"SELECT * FROM dis_forum WHERE ORDER BY time");
?>

<!ODCTYPE html>
<html>
    <head>
        <title>Discussion Forum</title>
        
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
                
                <div class="col-md-8">
                    <div class="panel panel-default">
                    <?php
                    while ($arr_question=mysqli_fetch_assoc($question))
                    {
                        echo '<div class="panel-heading">';
                        echo '<h3>';
                        echo '<label>Ques ' . $arr_question['q_no'] . ':&nbsp' . $arr_question['question'];
                        echo '</h3>';
                        echo $arr_question['name'];
                        echo '<br/>';
                        echo $arr_question['time'];
                        echo '</div>';
                        echo '<div class="panel-body">';
                        $id=$arr_question['q_no'];
                        $answer=mysqli_query($conn,"SELECT * FROM dis_ans WHERE q_id='$id' ORDER BY a_id DESC");
                        while($arr_answer=mysqli_fetch_assoc($answer))
                        {
                            echo '<p>' . $arr_answer['a_id'] . '.&nbsp' . $arr_answer['answer'];
                        }
                        echo '</div>';
                      
                    }
                    ?>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Post a question</h3>
                        </div>
                        
                        <div class="panel-body text-center">
                       
                        <form action="post_question.php" class="form form-vertical" method="POST">
                               <div class="controls">
                                   <textarea class="form-control" name="question" placeholder="Post a Question"> </textarea>
                                </div>
                               
                               <div class="controls">
                                    <button type="submit" class="btn btn-primary"></button>
                                </div>
                           </form>
                   
                           </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                <h1 class="text-center">All Questions</h1>
                </div>
                    <div class="panel-body">
                        <table class=" table table-bordered table-fixed">
                            <thead>
                                <tr>
                                    <th class="col-xs-1">Q No.</th>
                                    <th class="col-xs-3">Question</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $all_ques=mysqli_query($conn,"SELECT * FROM dis_forum ORDER BY q_no DESC");
                                while($arr_query = mysqli_fetch_assoc($all_ques)){
                                    echo "<tr>";
                                        echo '<td class="col-xs-1">' . $arr_query['q_no'] . '</td>';
                                        echo '<td class="col-xs-3">' . $arr_query['question'] . '</td>';
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
        
        <footer class="text-center">
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