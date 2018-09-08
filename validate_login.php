<?php

$user_id=$_POST['user_id'];
$password=$_POST['password'];

//Establishing connection with database
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';		
}

//Matching user id with and password with database
$validate_login="SELECT id FROM accounts WHERE id='$user_id' AND password='$password'";

$result=mysqli_query($connect,$validate_login);

//Fetching number of rows that match the query
$rows=mysqli_num_rows($result);

//a cookie is set(if not already set) before giving access to home page
if(($rows==1) && (!isset($_COOKIE['user_id'])))
{   
	setcookie('user_id',$user_id,time()+(60*60*24*7),'/');
    header("location:question_fetch1.php");
}
//Direct access to home page is given as cookie is already set
else if (isset($_COOKIE['user_id']))
{   
	header("location:question_fetch1.php");
}
//Redirect back to login page if cookie is not set
else{echo "Invalid Info";
	header("refresh:4;url=sign_up_and_login.php");
}
?>