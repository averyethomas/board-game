<?php  $user_check = $_SESSION['login_user'];

       $ses_sql = mysqli_query($con,"select * from user where username = '$user_check' ");

       $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
       $user = $row;
       $login_session = $row['username'];

       if(!isset($_SESSION['login_user'])){
          header("location:login.php");
       }
?>