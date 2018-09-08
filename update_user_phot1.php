<?php
$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_error($connect))
{
echo 'Failed to connect'; 
}
if (isset($_COOKIE['user_id']))
{$user_id=$_COOKIE['user_id'];
  $query=mysqli_query($connect,"SELECT url FROM accounts WHERE id='$user_id'");
    $res=mysqli_fetch_array($query);
  $fetch=$res['url'];
echo '<html>
    <head>

    <title>Ask ECE</title>
        <script type="text/javascript" src="Js/button.js"></script>

        <link rel="icon" type="image/png" href="icon.png">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/style4.css">
    <script>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById(\'output_image\');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
    </head>
    <body>

  <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                     <h3>Ask ECE</h3>
                    <strong>ECE</strong>
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
  <div class="form">
          <h1>Change Your profile Photo ...</h1>          
              <form method="POST" action="update_photo.php" enctype="multipart/form-data">
	
				<div>
					 <img style="padding-bottom: 10px;border-radius: 20px;height: 100%" id="output_image" width="50%" src=';echo $fetch;
        echo '>
           <br><br>
								<input type="file" onchange="preview_image(event)" style="border-radius: 8px;" name="photo">
                <br>
					  <input type="submit" value="Update Photo"></input><br>
				</div>
    </form>
          </form>

        </div>
        


</body>
</html>
';}
else{
  header("location:sign_up_and_login.php");
}
?>