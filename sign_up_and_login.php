<?php
if(!isset($_COOKIE['user_id']))
{
	echo '
<!DOCTYPE html>
<html>
<head>
  <title>Ask ECE</title>
  <link rel="icon" type="image/png" href="icon.png">
  <link href=\'https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600\' rel=\'stylesheet\' type=\'text/css\'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="Css/user_interests1.css"> 
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up ...</h1>
          
          <form action="insert_sign_up_info.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
               Name<span class="req"></span>
              </label>
              <input type="text" required autocomplete="off" name="name" />
            </div>
        
            <div class="field-wrap">
              <label>
              User ID<span class="req"></span>
              </label>
              <input type="text"required autocomplete="off" name="user_id"/>
            </div>
          </div>
		  
          <div class="field-wrap">
            <label>
              Email Address<span class="req"></span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req"></span>
            </label>
            <input type="password"required autocomplete="off" name="password" minlength="8" maxlength="20"/>
          </div>
          
          <button type="submit" class="button button-block" id="signup"/>Next</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="validate_login.php" method="post">
          
           <div class="field-wrap">
            <label>
              User ID<span class="req"></span>
            </label>
            <input type="text"required autocomplete="off" name="user_id"/>
           </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req"></span>
            </label>
            <input type="password"required autocomplete="off" name="password"/>
          </div>
          
          <p class="forgot"><a href="reset_password.php">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src=\'http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js\'></script>
<script  src="Js/index.js"></script>
</body>
</html>
'
;}
else{
	header("location:question_fetch1.php");
}
?>