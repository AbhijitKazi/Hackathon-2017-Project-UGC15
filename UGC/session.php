<?php

/* 
 * Copyright 2017 HP.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

include('connection.php');
   session_start();
   $user_check = $_SESSION['login_user'];   
   $ses_sql = mysqli_query("SELECT * FROM ugc_userdetails WHERE email = '$user_check' ",$conn);
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location: login.php");
   }
?>