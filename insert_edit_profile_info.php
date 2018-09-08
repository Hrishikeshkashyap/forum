<?php
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';	
}
$user_id=$_COOKIE['user_id'];
$profession=$_POST['profession'];
$dob=$_POST['dob'];
$current_city=$_POST['current_city'];
$scholar_id=$_POST['scholar_id'];
$email=$_POST['email'];
$primary_contact_no=$_POST['primary_contact_no'];
$secondary_contact_no=$_POST['secondary_contact_no'];
$query=mysqli_query($connect,"UPDATE accounts SET dob='$dob',scholarId='$scholar_id',profession='$profession',
                     current_city='$current_city',email='$email',
					 primary_contact_no='$primary_contact_no',
					 secondary_contact_no='$secondary_contact_no' WHERE id='$user_id'") or mysqli_error($connect);
header("location:profile1.php");
?>