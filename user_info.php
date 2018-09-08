<!DOCTYPE html>
<html>
<head>
  <title>Ask ECE</title>
  <link rel="icon" type="image/png" href="icon.png">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="Css/user_interests1.css"> 
</head>

<body>
  <div class="form">
      
  
        <div id="signup">   
          <h1>INFO ...</h1>
          
          <form action="insert_user_info.php" method="POST">
		  <div class="top-row">
                <div class="field-wrap">
              <select style="border-radius: 5px;background-color: #90A4AE;width: 80%" name="user_type">
                  <option value="volvo">Student</option>
                  <option value="saab">Alumni</option>
                  <option value="opel">Faculty</option>
                  <option value="audi">Staff</option>
                </select>
            </div>
			
            <div class="field-wrap">
              <label>
               Scholar ID (If student)<span class="req"></span>
              </label>
              <input type="text" autocomplete="off" name="scholar_id"/>
            </div>
			</div>
			<br>
      <div class="top-row">
            <div class="field-wrap">
              <label>
               Current City<span class="req"></span>
              </label>
              <input type="text" required autocomplete="off" name="current_city"/>
            </div>
		
			   <div class="field-wrap">
              <label>
               <span class="req"></span>
              </label>
              <input type="date" required autocomplete="off" name="dob"/>
            </div>
			</div>
				<div class="field-wrap">
              <label>
              Profession<span class="req"></span>
              </label>
              <input type="text" required autocomplete="off" name="profession"/>
            </div>
			
            <div class="field-wrap">
              <label>
               Phone Number(Primary)<span class="req"></span>
              </label>
              <input type="number" required autocomplete="off" name="primary_contact_no" />
            </div>
			 <div class="field-wrap">
            <label>
             Phone Number(Secondary) <span class="req"></span>
            </label>
            <input type="number" required autocomplete="off" name="secondary_contact_no"/>
          </div>
		 
         
            <br>
        <button class="button button-block"/>NEXT</button>
          </form>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="Js/index.js"></script>

</body>
</html>

