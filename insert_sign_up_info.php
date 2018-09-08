<?php

//Fetching data from sign_up form
$name=$_POST['name'];
$user_id=$_POST['user_id'];
$email=$_POST['email'];
$password=$_POST['password'];

//Establishing connection with database
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';		
}

$validate_id="SELECT id FROM accounts WHERE id='$user_id'";

$result=mysqli_query($connect,$validate_id);

//Fetching number of rows that match the query
$rows=mysqli_num_rows($result);

//Inserting data into database
if(($rows==0))
{$insert_data="INSERT INTO accounts(`name`,`id`,
              `email`,`password`)VALUES('".$name."','".$user_id."',
			  '".$email."','".$password."')";
mysqli_query($connect,$insert_data);

//Destroy previous duplicate cookie for user_id
if (isset($_COOKIE['user_id'])){
setcookie('user_id',$user_id,time()-1);	
}

//Create new cookie for user_id
setcookie('user_id',$user_id,time()+(60*60*24*7),'/');

//Redirecting to user_info page
header("location:user_info.php");
 }
 else{
 	echo "UserId already exists";
    header("Refresh:4;url=sign_up_and_login.php");
 }
?>