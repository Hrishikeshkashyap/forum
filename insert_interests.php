<?php
$interest1 = isset($_POST['interest1']) ? $_POST['interest1'] : null ;
$interest2 = isset($_POST['interest2']) ? $_POST['interest2'] : null ;
$interest3 = isset($_POST['interest3']) ? $_POST['interest3'] : null ;
$interest4 = isset($_POST['interest4']) ? $_POST['interest4'] : null ;
$interest5 = isset($_POST['interest5']) ? $_POST['interest5'] : null ;

if (isset($_COOKIE['user_id']))
{
$user_id=$_COOKIE['user_id'];
}

//Establishing connection to database
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';		
}

//Insterting user_interests to database
//To compare with set cookie error resolve the issue	
if ($interest1!=null){	  
mysqli_query($connect,"INSERT INTO interests_table(user_id,interests)VALUES('$user_id','$interest1')");
}
if ($interest2!=null)	
{mysqli_query($connect,"INSERT INTO interests_table(user_id,interests)VALUES('$user_id','$interest2')");
}
if ($interest3!=null)	
{mysqli_query($connect,"INSERT INTO interests_table(user_id,interests)VALUES('$user_id','$interest3')");
}
if ($interest4!=null)	
{mysqli_query($connect,"INSERT INTO interests_table(user_id,interests)VALUES('$user_id','$interest4')");
}
if ($interest5!=null)	
{
	mysqli_query($connect,"INSERT INTO interests_table(user_id,interests)VALUES('$user_id','$interest5')");
}
//Redirecting for receiving more interests of user
header("location:question_fetch1.php");

?>