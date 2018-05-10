<?php

/* 
 *License Header
 */
include 'connection.php';

$query=mysqli_query($conn,"SELECT * FROM faq ORDER BY id DESC");

?>



<html>
    <head>
        <title>Frequently Asked Questions</title>
        
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
                        <a href="index.php">UGC CS Home</a>
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
        
        <div class="container">
            <h2 class="text-center">Frequently Asked Questions</h2>
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    <table class="table text-center">
                        <tr>
                            <td>Enter Your Query Below:</td>
                            
                        </tr>
                        <tr>
                            <td valign=top>
                                <iframe id="srchform2" 
                                        class=""accesskey=""src="javascript:'<html> <body style=margin:0px; > <form action=\'javascript:void();\' onSubmit=if(this.t1.value!=\'\')parent.findString(this.t1.value);return(false); > <input type=text id=t1 name=t1 placeholder=Search size=40><input type=submit name=b1 value=Search> </form> </body> </html>'" 
                                        contenteditable=""allowfullscreen=""width=300 height=50 border=0 frameborder=0 scrolling=no>
                            </iframe>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-12">
                <p>
<b><u>Queries on UGC NET </u></b> <br><br>
<b>Question:</b> What is Validity of UGC NET? 

<p>
<b>Answer:</b> UGC NET eCertificate is valid Life Time, however JRF Letter of Award is valid for only Two Years from date of results.
<a href="http://ugcnetonline.in"> Click here for futher details. </a>
<p>
<b>Question:</b>How to get UGC NET eCertificate? 

<p>
<b>Answer:</b></strong>Candidates who cleared CBSE/UGC NET exam can download eCertificate from UGC NET Official Website&nbsp;<strong><a href="http://ugcnetonline.in">www.ugcnetonline.in</a></strong></span></p>
<p><span style="font-size:14px;"><strong>Steps&nbsp;to download eCertificate:</strong></span></p>

<ul>
	<li><span style="font-size:14px;">Open UGC NET Official Website&nbsp;<a href="http://ugcnetonline.in">www.ugcnetonline.in</a></span></li>
	<li><span style="font-size:14px;">Login with your Registered eMail ID and Password</span>
	<ul>
		<li><span style="font-size:14px;"><em>If you do not know/remember your password, click on Forgot Password and retrieve it quickly</em></span></li>
	</ul>
	</li>
	<li><span style="font-size:14px;">After successful login click&nbsp;on&nbsp;<strong>Download eCertificate</strong>link which can be seen&nbsp;in left side panel</span></li>
	<li><span style="font-size:14px;">Click on&nbsp;<strong>Click Here to Download e-Certificate</strong>&nbsp;button</span></li>
</ul>

<p><span style="font-size:14px;">For security reasons every UGC NET eCertificate is protected with a secured and unique password which&nbsp;is set&nbsp;by default password pattern. However it can be easily identified/cracked by the candidate him/her self without any help, below is the password pattern which user can check out.</span></p>

<p>
<b><u>Queries on UGC Infonet Digital Library</u> </b> <br>
<p>
<b>Question:</b> What is UGC-Infonet Digital Library Consortium?
<p>
<b>Answer:</b> UGC-Infonet Digital Library Consortium has been set up by the Chairman, UGC to promote the use of electronic databases and full text access to journals by the Research and academic community in the country 
<a href="http://www.inflibnet.ac.in/econ/faq.php"> Click here for futher details. </a>

<p>
<b>Question:</b> Who gets benefit of UGC-Infonet Digital Library Consortium?
<p>
<b>Answer:</b>The Faculty, Research Scholars and Students of universities covered under UGC are the primary beneficiaries; however this scheme will be extended to colleges very soon. The scheme is likely to be open to other institutions of national importance  under its associate membership after signing MOU with UGC/INFLIBNET
<a href="http://www.inflibnet.ac.in/econ/faq.php"> Click here for futher details. </a>

<P>
<form method="post" action="query_pub.php">
<font name="ftt" id="ftt" style="visibility:hidden;">
If query not found    
</font>
<input type="submit" id="bttn" name="submit" value="CLICK HERE" disabled="true" style="visibility:hidden;">
 
</form>
                <?php
                while($arr= mysqli_fetch_assoc($query)){
                    echo '<div class="panel panel-default">';
                    echo '<div class="panel-heading">';
                    echo '<p><strong>' . $arr['id'] . '&nbsp' . $arr['question'] . '</strong></p>';
                    echo '</div>';
                    echo '<div class="panel-body">';
                    echo '<p>' . $arr['answer'] . '</p>';
                    echo '<a href="' . $arr['link'] . '">' . $arr['link'] . '</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <form method="post" action="query_pub.php">
                <font name="ftt" id="ftt" style="visibility:hidden;">
                   <h4> If query not found </h4>   
                </font>
                <input type="submit" id="bttn" name="submit" value="CLICK HERE" disabled="true" style="visibility:hidden;">
 
</form>
        </div>
        
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <a href="feedback.html">Feedback</a> | 
                    <a href="faq_user.php">FAQs</a>
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
        
    <script language="JavaScript">
        <!--
        var TRange=null;
function findString (str) {
 if (parseInt(navigator.appVersion)<4) return;
 var strFound;
 var ssttrr="If query not found";
 if (window.find) {

  // CODE FOR BROWSERS THAT SUPPORT window.find

  strFound=self.find(str);
  if (!strFound) {
   strFound=self.find(str,0,1);
   while (self.find(str,0,1)) continue;
  }
 }
 else if (navigator.appName.indexOf("Microsoft")!=-1) {

  // EXPLORER-SPECIFIC CODE

  if (TRange!=null) {
   TRange.collapse(false);
   strFound=TRange.findText(str);
   if (strFound) TRange.select();
  }
  if (TRange==null || strFound==0) {
   TRange=self.document.body.createTextRange();
   strFound=TRange.findText(str);
   if (strFound) TRange.select();
  }
 }
 /*else if (navigator.appName=="Opera") {
  alert ("Opera browsers not supported, sorry...");
  return;
 }*/
 if (!strFound) 
 {
    alert ("Query '"+str+"' not found!");
    document.getElementById("ftt").style.visibility="visible";
    document.getElementById("bttn").disabled = false;
    document.getElementById("bttn").style.visibility="visible";
    findString (ssttrr);
    return;
 }
}
-->
</script>

    </body>
</html>