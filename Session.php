<?php
   //include('Config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from login_T where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $_SESSION['id'];
   
   if(!isset($_SESSION['login_user'])){
      header("Location: Login.php");
   }
?>