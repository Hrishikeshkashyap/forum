<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <script type="text/javascript" src="Js/button.js"></script>
        <title>Ask ECE</title>
<link rel="icon" type="image/png" href="icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="Css/style4.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Ask ECE</h3>
                    <strong>Ask</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                          <a href="question_fetch1.php">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                             <li>
                        <a href="ask.php">
                            <i class="glyphicon glyphicon-question-sign"></i>
                            Ask
                        </a>
                    </li>
             
                    <li>
                        <a href="search.php">
                            <i class="glyphicon glyphicon-search"></i>
                            Search
                        </a>
                    </li>
                        <li>
                        <a href="profile1.php">
                            <i class="glyphicon glyphicon-user"></i>
                            Profile
                        </a>
                    </li>
                        <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Pages
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">NITS</a></li>
                            <li><a href="#">Spectrum</a></li>
                            <li><a href="#">Utkrista</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="logout.php">
                            <i class="glyphicon glyphicon-log-out"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
			  <?php
			  $i=1;
//Fetching user_id
			  $post=$_COOKIE['user_id'];
//retreiving qid passed
			  $q_id=$_GET['qid'];
//connecting to database
if (isset($_COOKIE['user_id']))
{ 
$link=mysqli_connect("localhost", "root","","mydatabase");
//retreiving all answers and a_ids for the q_id
$query0=mysqli_query($link,"SELECT answer,a_id FROM answers WHERE q_id='$q_id'");
//retreiving the question for the q_id
$query1=mysqli_query($link,"SELECT questions, posted_by FROM questions WHERE q_id='$q_id'");
$res1=mysqli_fetch_array($query1);
$p_id=$res1['posted_by'];
$query=mysqli_query($link,"SELECT name, url FROM accounts WHERE id='$p_id'");
$res3=mysqli_fetch_array($query);
$pro=$res3['url'];
$pro1=$res3['name'];
$fetch=$res1['questions'].'<br>';
//displaying the question with profile pic
echo '<a href=search_profile.php?s='.$pro1.'><div class="col-md-1 col-lg-1 " align="center"><img alt="User Pic" src=';echo $pro;
				echo ' class="img-circle img-responsive"></div></a><br>';
echo '<h2>'.$fetch.'</h2><a style="color:#7386D5" href="give_answer.php?q_id='.$q_id.'"><i class="glyphicon glyphicon-pencil"></i></a><div id="scroll">';
//displaying all answers for the question
while($res0=mysqli_fetch_array($query0)){
	$fetch0=$res0['answer'];
echo '<p>'.$res0['answer'].'</p><div><div>';

//Fetching upvote/downvote/neutral(1/-1/0) status for the answer for this user_id
	$chkupvote0=mysqli_query($link, "Select upvote from upvotes where a_id=\"".$res0['a_id']."\" && q_id=\"".$q_id."\" && user_id=\"".$post."\"");
$chkupvote=mysqli_fetch_array($chkupvote0);
	
	 if($res0['answer']!=NULL)


		 {
			 
        if($chkupvote['upvote']==1)//If upvote status is 1 then Upvoted displayed in upvote button
        {echo '     
        <div class="bottomelement"><input type="submit" id="upvote'.$i.'" name="upvote" value="Upvoted" onclick="upvote(\''.$res0['a_id'].'\', '.$q_id.', '.$i.')">';

        
        echo '
        <input type="submit" id="downvote'.$i.'" name="downvote" value="Downvote" onclick="downvote(\''.$res0['a_id'].'\', '.$q_id.', '.$i.')"></div>
     </div></div>';}
        else
        {
            if($chkupvote['upvote']==-1)//if upvote status is -1 then Downvoted displayed in downvote button
           {echo '       
        <div class="bottomelement"><input type="submit" id="upvote'.$i.'" name="upvote" value="Upvote" onclick="upvote(\''.$res0['a_id'].'\', '.$q_id.', '.$i.')">';

        
        echo '
        <input type="submit" id="downvote'.$i.'" name="downvote" value="Downvoted" onclick="downvote(\''.$res0['a_id'].'\', '.$q_id.', '.$i.')"></div>
     </div></div>';}
            else//if upvote status is 0 then Upvote and Downvote displayed in buttons
            {echo '       
        <div class="bottomelement"><input type="submit" id="upvote'.$i.'" name="upvote" value="Upvote" onclick="upvote(\''.$res0['a_id'].'\', '.$q_id.', '.$i.')">';

        
        echo '
        <input type="submit" id="downvote'.$i.'" name="downvote" value="Downvote" onclick="downvote(\''.$res0['a_id'].'\', '.$q_id.', '.$i.')"></div>
     </div></div>';}
	
		}
		
    	$i++; 
		$an=$res0['a_id'];
    $query5=mysqli_query($link,"SELECT COUNT(*) FROM upvotes WHERE upvote='1' and a_id='$an'");
$query6=mysqli_query($link,"SELECT COUNT(*) FROM upvotes WHERE upvote='-1' AND a_id='$an'");
if (!$query5) {
    printf("Error: %s\n", mysqli_error($link));
    exit();
}
$res5=mysqli_fetch_array($query5);
$res6=mysqli_fetch_array($query6);
echo 'Upvotes= '.$res5[0].'<br>';
echo 'Downvotes= '.$res6[0];
echo '<div class="line"></div>';
}

}}	
else{
  header("location:sign_up_and_login.php");
}
    ?>		   
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>