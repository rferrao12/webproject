<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&display=swap" rel="stylesheet">
  

  <title>Document</title>
</head>
<!-- <script type="text/javascript">
    function formvalidate(){
        {
            var id= document.f1.fname.value;
            var ps=document.f1.lname.value;

	
			if(id.length=="" && ps.length=="") {
				alert("Email and Password fields are empty");
				return false;
			}
			else
			{
				if(id.length=="") {
					alert("Email is empty");
					return false;
				}
				if (ps.length=="") {
					alert("Password field is empty");
					return false;
				}
			}
		}
    }
    </script> -->
<body>
<div class="bg-img">
<div class="container">
   <form method ="post" action="register.php">
   <h3> Sign Up </h3>
   <?php include('errors.php'); ?>
      <div class="inputgroup">
        
        <input type="text" placeholder="First Name" name="fname" required>
      </div>
      <div class="inputgroup">
        <input type="text" placeholder="Last Name"name="lname">
      </div>
      <div class="inputgroup">
        
        <input type="text" placeholder="Username" name="username" required>
      </div>
      <div class="inputgroup">
        
        <input type="text" data-validate = "Valid email is required: ex@abc.xyz" placeholder="Email Id" name="email" required>
      </div>
      <div class="inputgroup">
        
        <input type="password" placeholder="Password" name="pass" required>
      </div>
      <div class="inputgroup">
        
        <input type="password" placeholder="Confirm Password" name="cpass" required>
      </div>
      <p>Already have an account>? <a href="../login/log.php" style="color:blue">Login</a></p>
      <div class="inputgroup">
        <button type="submit" class="button" name="register"  class="btn">Register</button>
      </div>



</form>
</div>
</body>
</html>
