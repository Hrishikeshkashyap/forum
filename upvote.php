<?php
$post=$_COOKIE['user_id'];
$a_id=$_GET['a_id'];
$q_id=$_GET['q_id'];
$link=mysqli_connect("localhost", "root");
mysqli_select_db($link, "mydatabase");
$qry0=mysqli_query($link, "Select * from upvotes where a_id='".$a_id."' && q_id=".$q_id." && user_id='".$post."'");
$qry=mysqli_fetch_array($qry0);
if($qry['upvote']==-1 || $qry['upvote']==0 && $qry['a_id']==$a_id)
{$qry1=mysqli_query($link, "Update upvotes set upvote=1 where a_id='".$a_id."' && q_id=".$q_id." && user_id='".$post."'") or die(mysqli_error($link));
echo 'upvoted successfully';  }
else
{
      if ($qry['upvote'] == 1) {
        echo 0;
    } else {
        $qry1 = mysqli_query($link, "Insert into upvotes values('" . $a_id . "', " . $q_id . ", '" . $post . "', 1)") or die(mysqli_error($link));
        echo 'upvoted successfully';
    }
}

?>