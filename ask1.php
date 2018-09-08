<?php
  //Page for handling input of ask page
  
  
  //Establishing connection to database
    $con = mysqli_connect('localhost','root','','mydatabase');
    //retreiving question asked
	$question = $_POST['question'];
//Checking for tags of question
//Tags not selected are assigned value of null	
$topic1 = isset($_POST['topic1']) ? $_POST['topic1'] : null ;
$topic2 = isset($_POST['topic2']) ? $_POST['topic2'] : null ;
$topic3 = isset($_POST['topic3']) ? $_POST['topic3'] : null ;
$topic4 = isset($_POST['topic4']) ? $_POST['topic4'] : null ;
$topic5 = isset($_POST['topic5']) ? $_POST['topic5'] : null ;
$topic6 = isset($_POST['topic6']) ? $_POST['topic6'] : null ;
       //Fetch user name from cookie
       $post=$_COOKIE['user_id'];
       //Use date function of php to extract date and year required for creation of question id
       //j in date function corresponds to date;
       //Y in date function coresponds to year in XXXX format;
       //m in date is month in integer format
       $date = date("jmY");
       $search = $date."%";
	   //Checking to see how many questions have same date
       $query = "Select * from questions where q_id like '$search'";
       $result = mysqli_query($con, $query) or die(mysqli_error($con));
       if(mysqli_num_rows($result)!=0)
       {
           $count=0;
           while($row=mysqli_fetch_array($result))
            {
               $count++;
            }
            $count++;
            $q_id = $date.$count;//Keeping count of questions for particular date
       }
      else 
       {
           $q_id = $date."1";    //for no previous question for this date
       }
	   //Inserting question
       $query = "Insert into questions(q_id,questions,posted_by) values('$q_id','$question','$post')";
       $result = mysqli_query($con, $query) or die(mysqli_error($con));
	   //If tag is selected it is inserted into tags table with q_id
	   if ($topic1!=null){	   
mysqli_query($con,"INSERT INTO tags_table(q_id,tags)VALUES('$q_id','$topic1')");
}
	   if ($topic2!=null){	  
mysqli_query($con,"INSERT INTO tags_table(q_id,tags)VALUES('$q_id','$topic2')");
}	   if ($topic3!=null){	  
mysqli_query($con,"INSERT INTO tags_table(q_id,tags)VALUES('$q_id','$topic3')");
}
	   if ($topic4!=null){	  
mysqli_query($con,"INSERT INTO tags_table(q_id,tags)VALUES('$q_id','$topic4')");
}
	   if ($topic5!=null){	  
mysqli_query($con,"INSERT INTO tags_table(q_id,tags)VALUES('$q_id','$topic5')");
}
	   if ($topic6!=null){	  
mysqli_query($con,"INSERT INTO tags_table(q_id,tags)VALUES('$q_id','$topic6')");
}
//Control moves to home page
  header("location:question_fetch1.php");   
 ?>

