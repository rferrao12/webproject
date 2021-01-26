<?php
  $msg = ""; 
  $db = mysqli_connect('localhost', 'root','', 'web');
  // If upload button is clicked ... 
  if (isset($_POST['upload'])) { 
  
    $heading = $_POST['s_title'];
    $Moral = $_POST['s_moral'];
    $cont = $_POST['s_story'];
    $cont1 = $_POST['s_story2'];
    $cont2 = $_POST['s_story3'];
    $aud=$_POST['s_audio'];
    $au =$aud. ".mp3";
    $filename1 =$_FILES["uploadfile1"]["name"];
    $filename2 = $_FILES["uploadfile2"]["name"];
    $filename3 = $_FILES["uploadfile3"]["name"];
    $tempname1 = $_FILES["uploadfile1"]["tmp_name"];  
    $tempname2 = $_FILES["uploadfile2"]["tmp_name"]; 
    $tempname3 = $_FILES["uploadfile3"]["tmp_name"];


        
    $folder1 = "image/".$filename1;
    $folder2 = "image/".$filename2;
    $folder3 = "image/".$filename3;
    $text=$cont." ".$cont1." ".$cont2;
     $res = shell_exec("python voice.py \"".$text."\" $aud");

   

  
    
          
    $db = mysqli_connect('localhost', 'root','', 'web'); 
  
        // Get all the submitted data from the form 
        $sql = "INSERT INTO admin (s_title,s_moral,s_story,s_story2,s_story3,s_audio,s_image,s_image2,s_image3) 
        VALUES ('$heading','$Moral','$cont','$cont1','$cont2','$au','$filename1','$filename2','$filename3')"; 
  
        // Execute query 
        mysqli_query($db, $sql); 
        if ((move_uploaded_file($tempname1, $folder1)) && (move_uploaded_file($tempname2, $folder2)) && (move_uploaded_file($tempname3, $folder3)))  { 
            $msg = "Image uploaded successfully"; 
        }else{ 
            $msg = "Failed to upload image"; 
      } 
  } 
 // header("location: admin.php");
//exit;
  $sql="SELECT * FROM admin";
  mysqli_query($db,$sql); 
?> 
<!DOCTYPE html> 
<html> 
<head > 
<style>
.bg-img {
    background-image: url("play.jpg");
    min-height: 200px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
}
  </style>
<div class="bg-img">
<title>Admin Page</title> 
<link rel="stylesheet" type= "text/css" href ="styles.css"/> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
</head>
<body >
<a style="position: absolute; right: 30px; top: 28px; border-radius:10px 10px 10px 10px" class="button01" type="button" href="../homep.php">HOME</a>
<div class="w3-container w3-teal" >
  <h1 style="text-align:center;font-family: 'Balsamiq Sans', cursive;">Welcome Admin</h1>
</div>
<div id="content"> 
  <h2 style="text-align:center; font-family: 'Balsamiq Sans', cursive;"> Add Stories</h2>
  
  <form method="POST" action="" enctype="multipart/form-data"> 
   <label style= "font-family: 'Balsamiq Sans', cursive;">Enter the title:</label>
  <input type="text" name="s_title"/>
  <div>
  <label style= "font-family: 'Balsamiq Sans', cursive;">Enter the Moral:</label>
  <input type="text" name="s_moral"/>
</div>
<div>
  <label style= "font-family: 'Balsamiq Sans', cursive;">Enter the Story:</label>
  <textarea  cols="43" rows="5" name="s_story"></textarea>
  
</div> 
<div>
  <label style= "font-family: 'Balsamiq Sans', cursive;">Enter the Story:</label>
  <textarea  cols="43" rows="5" name="s_story2"></textarea>
  
</div> 
<div>
  <label style= "font-family: 'Balsamiq Sans', cursive;">Enter the Story:</label>
  <textarea  cols="43" rows="5" name="s_story3"></textarea>
  
</div> 
<div>
<label style= "font-family: 'Balsamiq Sans', cursive;">Create audio:</label>
<input type="text" name="s_audio">

</div>
<label style= "font-family: 'Balsamiq Sans', cursive;">Upload the images:</label>
<div>
      <input type="file" name="uploadfile1" value=""/>
      <input type="file" name="uploadfile2" value=""/>
      <input type="file" name="uploadfile3" value=""/> 
      </div>
  
        
      <div> 
          <button style= "width:100%" type="submit" name="upload">UPLOAD</button> 
        </div> 
        </div>
  </form> 
</body> 
</html> 
<?php
$db = mysqli_connect('localhost', 'root','', 'web');
$result = mysqli_query($db,"SELECT * FROM admin");
?>
<!DOCTYPE html>
<html>
 <head>
 <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
 <style>
 .h{font-family: 'Balsamiq Sans', cursive;

 }
 </style>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div id="container">
  <table border="1" align="center">
  
  <tr class="h">
    <td>Serial No.</td>
    <td>Image</td>
    <td>Title</td>
    <td>Moral</td>
    <td>Audio</td>
  </tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["s_id"]; ?></td>
    <td><?php echo $row["s_image"]; ?></td>
    <td><?php echo $row["s_title"]; ?></td>
    <td><?php echo $row["s_moral"]; ?></td>
    <td><?php echo $row["s_audio"]; ?></td>
</tr>
<?php
$i++;
}
?>
</table>
</div>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
 </body>
</html>