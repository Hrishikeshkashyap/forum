<?php
if (isset($_COOKIE['user_id']))
{
echo '<html>
    <head>

    <title>Ask ECE</title>
        <script type="text/javascript" src="Js/button.js"></script>

        <link rel="icon" type="image/png" href="icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                        <a href="question_fetch1.php" aria-expanded="false">
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
                            <ul class="nav navbar-nav navbar-right" >
                                <li><a href="#">About</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
			 <div id="scroll">	
	<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $(\'#sidebarCollapse\').on(\'click\', function () {
                     $(\'#sidebar\').toggleClass(\'active\');
                 });
             });
         </script>
        
	';
$link=mysqli_connect("localhost", "root");
mysqli_select_db($link, "mydatabase");
$post=$_COOKIE['user_id'];
$res=mysqli_query($link, "Select * from questions order by q_id desc;") or die(mysqli_error($link));

$i=1;
while($row=mysqli_fetch_array($res))
{        
         $ans=mysqli_query($link, "Select answer, a_id, posted_by from answers where q_id=".$row['q_id']." order by upvotes desc;") or die('cannot fetch answer');
         $answer=mysqli_fetch_array($ans);
		 $fetch=$answer['answer'];
         $a_idar=mysqli_query($link, "Select a_id from answers where answer='$fetch'") or die('cannot fetch id');
         $a_id=mysqli_fetch_assoc($a_idar);
		 
         $chkupvote0=mysqli_query($link, "Select upvote from upvotes where a_id=\"".$answer['a_id']."\" && q_id=\"".$row['q_id']."\" && user_id=\"".$post."\"");
         $chkupvote=mysqli_fetch_array($chkupvote0);
		 
		 
         echo
        '<head><link href="https://fonts.googleapis.com/css?family=Holtwood+One+SC|Lora|Roboto+Mono" rel="stylesheet">  </head>
         <link rel="stylesheet" href="style4.css">';   
         echo '
         <A href=answers1.php?qid='.$row['q_id'].'><div class="question">';
        echo '<h2>'.$row['questions'].'</h2>';	
        echo'</div></A>
      ';
        echo '<p>'.$answer['answer'].'</p><div><div>
		  ';


        echo '<div class="line"></div>';

 }
echo '
</div>
</body>
</html>'
;}
else{
	header("location:sign_up_and_login.php");
}
?>