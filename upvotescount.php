<?php

         $a_id=$_GET['a_id'];
         $q_id=$_GET['q_id'];
         $req=$_GET['req'];
         $link=mysqli_connect("localhost", "root");
         mysqli_select_db($link, "mydatabase");
         
      if($req == 1)
      {
//counting no. of upvotes
         $upvotes0=mysqli_query($link, "Select COUNT(*) from upvotes where q_id='".$q_id."' && a_id='".$a_id."' && upvote=1;");
         $upvotes=mysqli_fetch_array($upvotes0);
         echo $upvotes[0];
      }
      else
      {
//counting no. of downvotes
         $downvotes0=mysqli_query($link, "Select COUNT(*) from upvotes where q_id='".$q_id."' && a_id='".$a_id."' && upvote=-1;");
         $downvotes=mysqli_fetch_array($downvotes0);
         echo $downvotes[0];
      }
?>