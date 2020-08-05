<?php
$link=mysqli_connect("localhost", "root");
mysqli_select_db($link, "mydatabase");
$post=$_COOKIE['user_id'];
if (isset($_COOKIE['user_id']))
{
echo '<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
<a href="asked.php">Questions Asked ></a>
<div class="line"></div>
<div>
     <form action="ask1.php" method="post">
    <div class="text">
        <input id="subject" name="question" placeholder="Ask Your Question here..." style="height:200px;width: 80%;"></input>
    </div>
<input type="checkbox" name="topic1" value="NITS"> NITS <br>
<input type="checkbox" name="topic2" value="Training And Placement"> Training And Placement <br>
<input type="checkbox" name="topic3" value="Cultural And Technical Fests"> Cultural And Technical Fests <br>
<input type="checkbox" name="topic4" value="Cutoff of Different Branches"> Cutoff of Different Branches <br>
<input type="checkbox" name="topic5" value="Gymkhana Union Body"> Gymkhana Union Body <br>
<input type="checkbox" name="topic6" value="Other"> Other <br>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
     </form>
</div>
                <div class="line"></div>


</div>




        <!-- jQuery CDN -->
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
    </body>
</html>'
;}
else{
    header("location:sign_up_and_login.php");
}
?>
<script>
    document.getElementById('text').addEventListener('keypress', function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
        }
    });
</script>