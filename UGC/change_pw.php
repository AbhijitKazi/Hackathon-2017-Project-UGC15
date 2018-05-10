<?php

//license header;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ugc_db_ao";
$conn = mysqli_connect($servername, $username, $password, $dbname);
    session_start();
$myusername=$_SESSION['login_user'];
$mypassword =$_POST['password'];
$newpassword=$_POST['newpassword'];

$query = mysqli_query($conn,"SELECT * FROM ugc_userdetails WHERE email = '$myusername'");
$arr = mysqli_fetch_assoc($query);
$oldpassword = $arr['password'];

if($oldpassword == $mypassword)
{
    if($newpassword == $mypassword)
    {
        $message1=("Your password updation failed");
        $message2=("Please enter a new password");
        //header("location: change_pw.html");
    }
    else
    {
        $update = "UPDATE ugc_userdetails SET password = '$newpassword' WHERE email = '$myusername'";
        mysqli_query($conn,$update);
        $message1=("Your password updation is successfull");
        $message2=("Please Log In with the new password");
    }
}
else
{
    $message1=("Your Login Name or Password is invalid");
    $message2=("Please enter your old password correctly");
    //header("location: change_pw.html");
}

?>

<!DOCTYPE html>
<html lang="en_US">
    <head>
        <title>
            Change Password
        </title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        
        <!--Bootstrap CSS-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Custom CSS-->
        <link href="css/custom_c.css" rel="stylesheet">
        
        <script type="text/javascript">
            function Notice()
            {
                alert("Your Password is Updated: Please Log in again");
            }
        </script>
        
    </head>
    
    <body>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text-center">Password Changed</h3>
            </div>
            <div class="panel-body">
                <div class="form-style-10">
                    <p class="text-center">
                        <?php echo $message1?><br>
                        <?php echo $message2?><br>
                        <a href="login.php" class="button-section">Log In</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>