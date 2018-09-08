<?php

//Fetching data from user_info form
if (isset($_COOKIE['user_id']))
{
$user_id=$_COOKIE['user_id'];
}
$dob=$_POST['dob'];
$scholar_id=$_POST['scholar_id'];
$profession=$_POST['profession'];
$current_city=$_POST['current_city'];
$user_type=$_POST['user_type'];
$primary_contact_no=$_POST['primary_contact_no'];
$secondary_contact_no=$_POST['secondary_contact_no'];

//Establishing connection to database
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';		
}

//insert_user_info into user_table after with set cookie user_id
  $insert_user_info="UPDATE accounts SET dob='$dob',scholarId='$scholar_id',profession='$profession',
                     current_city='$current_city',user_type='$user_type',
					 primary_contact_no=".$primary_contact_no.",
					 secondary_contact_no=".$secondary_contact_no." WHERE id='$user_id'";		  
 mysqli_query($connect,$insert_user_info) or die(mysqli_error($connect));
  
  //Redirecting to photo upload page
header("location:user_phot1.php")

?>