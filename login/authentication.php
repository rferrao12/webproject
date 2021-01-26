<?php

$host = "localhost";
$user = "root";
$password = '';
$db_name = "web";

$con = mysqli_connect($host, $user, $password, $db_name);
if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL: " . mysqli_connect_error());
}

if(isset($_POST['log'])){
$email = $_POST['email'];
$pass = $_POST['pass'];

//to prevent from mysqli injection
$email = stripcslashes($email);
$pass= stripcslashes($pass);

$email = mysqli_real_escape_string($con, $email);
$pass = mysqli_real_escape_string($con, $pass);
$pass = md5($pass);

$sql = "SELECT * from users where email = '$email' and passw = '$pass'";
$result = mysqli_query($con, $sql);
$record = mysqli_fetch_assoc($result);
if($record['email']=="Johndoe@gmail.com"){
  header('location:../Admin/admin.php');
}
else{



if (mysqli_num_rows($result) == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: ../index.php');
  }
}
}
  ?>