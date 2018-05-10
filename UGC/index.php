<!-- 
 *License Header
 */-->


<html lang="en-US">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UGC Client Services</title>

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
  
    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <img class="img-responsive img-rounded" src="Building.jpg" alt="UGC">
            </div>
            
            <!-- /.col-md-8 -->
            <div class="col-md-4">
                <h1>UGC Client Services</h1>
                <p>Welcome to the support system of University Grants Commission. Please send us your query, complain, requests,
                    feedbacks in the respective panels below.</p>
                <h3>Discussion Forum</h3>
                <p>Please Login To Join The Disscussion Forum</p>
                <a href="login.php" class="btn btn-default">Login</a>
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Well -->
        <div class="row">
            <div class="col-lg-12">
                <div class="well text-center">
                    <marquee direction="left" behaviour="slide" amount="5">
                            Telephone Contact Details of UGC 011-0000000
                    </marquee>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center"><a href="faq_pub.php">Submit a Query</a></h3>
                <p class="text-center">Check the status of your query</p>
                <form class="text-center" action="que_status.php" method="POST">
                    <label>Query ID<input type="text" name="que_id" required></label>
                    <button type="submit" class="btn btn-primary">Enter</button>
                </form>
            </div>
            
            <!-- /.col-md-6 -->
            <div class="col-md-6 text-center">
                <h2>Live Chat</h2>
                <script type="text/javascript" src="//www3.smartchatbox.com/shoutbox/start.php?key=741890136"></script>
                <!--<a class="btn btn-default" href="#">More Info</a>-->
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
                <hr>
        <div class="text-center" id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
            }</script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <hr>

        <!-- Footer -->
        <footer class="text-center">
            <div class="row">
                <div class="col-lg-12">
                    <a href="feedback.html">Feedback</a>
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

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
