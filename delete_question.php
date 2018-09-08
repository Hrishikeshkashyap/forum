<?php
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';		
}
$q_id=$_GET['q_id'];
$query0=mysqli_query($connect,"DELETE FROM questions WHERE q_id='$q_id'");
$query1=mysqli_query($connect,"DELETE FROM answers WHERE q_id='$q_id'");
$query2=mysqli_query($connect,"DELETE FROM tags_table WHERE q_id='$q_id'");
$query3=mysqli_query($connect,"DELETE FROM upvotes WHERE q_id='$q_id'");
header("location:asked.php");
?>