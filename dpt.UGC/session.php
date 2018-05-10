<?php

include('connection.php');
   session_start();
   $user_check = $_SESSION['login_user'];   
   $ses_sql = mysqli_query("SELECT * FROM department WHERE log_name = '$user_check'",$conn);
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['log_name'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
   }
?>