<?php
$q_id=$_GET['q_id'];
$user_id=$_COOKIE['user_id'];
$answer=$_POST['answer'];
$t=time();
$link=mysqli_connect("localhost", "root");
mysqli_select_db($link, "mydatabase");
$query0=mysqli_query($link,"INSERT INTO answers(a_id,q_id,answer,posted_by,upvotes,downvotes)VALUES('$t','$q_id','$answer','$user_id','0','0')");
header('location:answers1.php?qid='.$q_id);
?>