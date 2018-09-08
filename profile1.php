<?php
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect';	
}
if (isset($_COOKIE['user_id']))
{   
    $user_id=$_COOKIE['user_id'];
	$query=mysqli_query($connect,"SELECT url FROM accounts WHERE id='$user_id'");
    $res=mysqli_fetch_array($query);
	$fetch=$res['url'];
	$query1=mysqli_query($connect,"SELECT * FROM accounts WHERE id='$user_id'") or die(mysqli_error($connect));
    $res1=mysqli_fetch_array($query1);
	$fetch1=$res1['name'];
echo'
<html>
    <head>

    <title>Ask ECE</title>
        <script type="text/javascript" src="Js/button.js"></script>

        <link rel="icon" type="image/png" href="icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/style4.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $(\'#sidebarCollapse\').on(\'click\', function () {
                     $(\'#sidebar\').toggleClass(\'active\');
                 });
             });
         </script>
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
                    <li>
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
                        <a href="search.php"  class="active">
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

      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
      <form action="search_profile.php" method="get" style="position:relative">
<input type="text" name="s" placeholder="Search Profiles" autocomplete="off"/>
</form>

      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">';echo $res1['name'];
			  echo'
			  <span class="pull-right">
			   <a href="question_fetch1.php" data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
			  </span>
			  </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                
				<div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src=';echo $fetch;
				echo ' class="img-circle img-responsive"></div>
              
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>User ID:</td>
                        <td>';echo $user_id;
						echo'</td>
                      </tr>
                      <tr>
                        <td>Profession:</td>
                        <td>';echo $res1['profession'];
						echo'</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>';echo $res1['dob'];
						echo'</td>
                      </tr>
                   
                         <tr>
                             <tr>
                        <td>Current City:</td>
                        <td>';echo $res1['current_city'];
						echo'</td>
                      </tr>
                        <tr>
                        <td>Scholar ID:</td>
                        <td>';echo $res1['scholarId'];
						echo'</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>';echo $res1['email'];
						echo'</td>
                      </tr>
                        <td>Phone Number:</td>
                        <td>';echo $res1['primary_contact_no'];
						echo'(Primary)<br><br>';echo $res1['secondary_contact_no'];
						echo'(Secondary)
                        </td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="edit_profile.php" class="btn btn-primary"><i class="glyphicon glyphicon-cog"></i></a>
                  <a href="delete_profile.php" class="btn btn-primary"><i class="glyphicon glyphicon-trash"></i></a>
                </div>
              </div>
            </div>
	';}
  else{
  header("location:sign_up_and_login.php");
}
	?>