<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Home Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .bs-example{
        margin: 20px;        
    }
    .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.container01 {
  position: relative;
  text-align: center;
  color: white;
  text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.7);
    padding: 40px 0 10px 0;
    font-size: 60px;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);  
}
.title {
    text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.6);
    font-size: 60px;
    font-family: sans-serif;
  }
.subtitle {
    
    font-size: 28px;
    text-align: center;
  }
.top {
    padding-left: 40px;
    padding-top: 30px;
    font-size: 25px;
    font-family:sans-serif;
}
.button01 {
  background-color: black;
  border:cornsilk;
  color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display:inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  align-self: right;
  padding-right: 20px;
  padding-left: 20px;
}
</style>
</head>
<body>
    <div class = "top">
        <h3 style="font-family: sans-serif; text-align:center; text-shadow: teal; line-height: 30px; color: #24e6bc;">Moral stories</h3>
        <a style="position: absolute; right: 30px; top: 28px; border-radius:10px 10px 10px 10px" class="button01" type="button" href="homep.php?logout='1'">Log out</a>
        <!-- <a style="position: absolute; right:120px; top: 28px; border-radius:10px 10px 10px 10px"  class="button01" href="Registration/register.php">Sign Up</a> -->
    </div>
    
    <div class="container01">
        <img src="https://www.architectandinteriorsindia.com/public/styles/full_img/public/images/2019/11/12/CASAGRAND-Royale-3.jpg?itok=CF4bpuQL" alt="Welcome page" width="98%" height="400">
        <div class="centered">
            <h1 class="title">
                Welcome Kiddo!
            </h1>
            <h2 class="subtitle">
                Make sure you check out our upcoming stories
              </h2>
        </div>
      </div>
      <br>
      <div>
          <h2 class="subtitle">Check out some of our top moral stories!</h2>
      </div>
      <br>
<div class="bs-example">
    <div class="container">
        <div class="row">
        <?php 
          $db = mysqli_connect('localhost', 'root','', 'web');
$result = mysqli_query($db,"SELECT * FROM admin");
$c=mysqli_num_rows($result);
?>
<?php 
while ($row = mysqli_fetch_array($result)){

?>      <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
                <div class="card">
                    <img class="card-img-top" width="626" height="300" alt="..." src="<?php echo 'Admin/image/'.$row['s_image'];?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['s_title'];?></h5>
                        <a <?php $t=$row['s_id'];?> onclick=" alert('<?php echo $t ;?>') "class="button" style=" border-radius:10px 0 10px 0" href="demo.php?$f=<?php echo $t?>">View</a>
                        <p class="card-text"><small class="text-muted"><?php echo $row['s_moral'];?></small></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>