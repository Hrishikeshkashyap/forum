
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Ask ECS</title>
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
                    <h3>Ask ECS</h3>
                    <strong>Ask</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                          <a href="question_fetch1.php">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                             <li class="active">
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
                Questions Asked...
			   <div id="scroll">
			   <?php
			   //Page to view asked questions
			   
			   
//Establishing connection to database			   
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';	
}


if (isset($_COOKIE['user_id']))
{
	$user_id=$_COOKIE['user_id'];
	
	//Retreiving q_id for all questions posted by this user
	$query=mysqli_query($connect,"SELECT q_id FROM questions WHERE posted_by='$user_id'");
	while($res=mysqli_fetch_array($query))
	{
		$fetch=$res['q_id'];
		$query1=mysqli_query($connect,"SELECT questions FROM questions WHERE q_id='$fetch'");
	    //Displaying all the questions
		while($res1=mysqli_fetch_array($query1))
		{
			echo '<h2>'.$res1['questions'].'</h2>';
			//Option for deleting his questions
			echo '<form action="delete_question.php?q_id='.$fetch.'" method="post">
				<button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i></button>
					</form>';
		$query2=mysqli_query($connect,"SELECT answer FROM answers WHERE q_id='$fetch' ORDER BY upvotes");
		//All answers for the questions
		while($res2=mysqli_fetch_array($query2))
		{
			echo '<p>'.$res2['answer'].'</p><br>';
		}
		}
	}
}
?>
</div>   <!-- jQuery CDN -->
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