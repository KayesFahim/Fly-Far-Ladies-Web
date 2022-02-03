<?php
   include('config.php');
   session_start();
   

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }

   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from users where email = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);  

   if(!empty($row)){
   $login_session = $row['email'];
  
   }
?>