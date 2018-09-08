<?php
$connect=mysqli_connect("localhost", "root","","mydatabase");
$user_id=$_COOKIE['user_id'];
$query=mysqli_query($connect,"DELETE FROM accounts WHERE id='$user_id'");
setcookie('user_id',$user_id,time()-1,'/');
header("location:sign_up_and_login.php");
?>