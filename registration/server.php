<?php
     $username="";
     $email="";
     $errors=array();
     $db = mysqli_connect('localhost', 'root','','web');


     if(isset($_POST['register'])){
         $fname =mysqli_real_escape_string($db,$_POST['fname']);
         $lname =mysqli_real_escape_string($db,$_POST['lname']);
         $username =mysqli_real_escape_string($db,$_POST['username']);
         $email =mysqli_real_escape_string($db,$_POST['email']);
         $pass =mysqli_real_escape_string($db,$_POST['pass']);
         $cpass =mysqli_real_escape_string($db,$_POST['cpass']);

         if(empty($fname)){
              array_push($errors, "First name is required");
         }
         if(empty($username)){
          array_push($errors, "Username is required");
     }
     if(empty($email)){
      array_push($errors, "Email is required");
 }
 if(empty($pass)){
  array_push($errors, "Password is required");
}
if($pass != $cpass){
  array_push($errors,"Passwords do not match");
}

$user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
  if ($user['username'] === $username) {
    array_push($errors, "Username already exists");
  }

  if ($user['email'] === $email) {
    array_push($errors, "email already exists");
  }
}
 if(count($errors)==0){
  $pass1 = md5($pass);
  $pass2 = md5($cpass);
   $sql="INSERT INTO users (fname, lname, username, email, passw)
   VALUES('$fname', '$lname','$username','$email','$pass2')";
    mysqli_query($db,$sql);
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "Logged in successfully!!";
    header('location: ../Login/log.php');
       }
    
     }
?>