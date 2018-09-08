<?php
//Cookies are destroyed during logout

if (isset($_COOKIE['user_id'])){
$user_id=$_COOKIE['user_id'];
setcookie('user_id',$user_id,time()-1,'/');
header("location:sign_up_and_login.php");//Redirecting back to login page
}
?>