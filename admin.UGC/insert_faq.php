<html>
    <head>
        <title>FAQ Insertion</title>
    
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
<?php

/* 
 * License Header
 */
include 'connection.php';

$question=$_POST['question'];
$answer=$_POST['answer'];
$link=$_POST['link'];

$query=mysqli_query($conn,"INSERT INTO faq(question,answer,link) VALUES('$question','$answer','$link')");

if($query==true)
{
    header("location: faq.php");
}
 else {
    echo "<h3>FAQ insertion failed: Try Again</h>";
}
?>
    
    <a href="faq.php" class="btn btn-primary">Go Back</a>
    
</body>
</html>