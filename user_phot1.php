<!DOCTYPE html>
<html>
<head>
  <title>ASK ECS</title>
  <link rel="icon" type="image/png" href="icon.png">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="Css/user_interests1.css"> 
  	<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
</head>

<body>
  <div class="form">
          <h1>Choose Your profile Photo ...</h1>          
              <form method="POST" action="insert_photo.php" enctype="multipart/form-data">
	
				<div>
					 <img style="padding-bottom: 10px;border-radius: 20px;height: 100%" id="output_image" width="50%" src="no_profile_pic.png"/>
           <br><br>
								<input type="file" onchange="preview_image(event)" style="border-radius: 8px;" name="photo">
                <br>
					  <button class="button button-block" type="submit" class="btn btn-default">Submit</button><br>
				</div>
    </form>
          </form>

        </div>
        
  
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="Js/index.js"></script>

</body>
</html>
