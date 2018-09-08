<?php

if (isset($_COOKIE['user_id']))
{
$user_id=$_COOKIE['user_id'];
}

$photo_insert_dir="photo/";//directory for inserting photos

$photo=$photo_insert_dir.basename($_FILES["photo"]["name"]);//file path
move_uploaded_file($_FILES["photo"]["tmp_name"],$photo);//inserting photo to directory

//establishing connection to database
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';		
}

//inserting file path to database
$insert_photo="UPDATE accounts SET url='$photo' WHERE id='$user_id'";
mysqli_query($connect,$insert_photo) or die(mysqli_error($connect));
sleep(0.5);
//Redirecting to user_interests page
header("location:profile1.php");
?>