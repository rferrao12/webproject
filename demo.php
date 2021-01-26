
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style1.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  -->
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: black;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  top: 510px;
  width: 100%;
  text-align: bottom;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
.image {
  background-image: url("bg.png");
  height: 100%; 
  width: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
<link rel="stylesheet" href="./style.css">
</head>
<?php
$db = mysqli_connect('localhost', 'root','', 'web');
$v = $_GET['$f'];
$result = mysqli_query($db,"SELECT * FROM admin where s_id ='$v'");
$record = mysqli_fetch_assoc($result);
$ply='Admin/'.$record['s_audio'];
$player="<audio controls ='controls' autoplay><source src='$ply'></audio>";
 echo $player;
   
		 
  ?>
<body class="image">
<form class="navbar-form navbar-left" action="">
            <div class="form-group"  >
                <div class="form__wrap" style="padding-left: 120px;padding-bottom: 20px; position: absolute; top: 1px; right: 5px;" >
                    <div class="input__wrap">
                        <input type="text" placeholder="Type a word" id="input">
                        <button class="button01" id="search">Search</button>
                        <button class="button01" id="reset" type="reset" value="reset" onclick="reloadPage()">Reset</button>

                    </div>
               </div>
            </div>
        </form>
        <section class="data container">
    <div class="container">
        <span class="loading">Loading...</span>
        <p class="def"></p>
        <div class="audio"></div>
        <div class="not__found"></div>
    </div>
</section>
        <script src="./app.js"></script>

<div class="slideshow-container">

<div class="mySlides fade">
    <h3 style="font-family: sans-serif; color:green; text-align:center; font-size: 20px;"><?php echo $record['s_title'] ?></h3>
  <div class="numbertext">1 / 3</div>
  <img src="<?php echo 'Admin/image/'.$record['s_image'];?>" style="width:100%"; height="450px">
  <div class="text">
    <p style="background-color:lightblue; padding: 20px; font-family: sans-serif; color:lightslategrey;"><?php echo $record['s_story'] ?></p>
  </div>
</div>

<div class="mySlides fade">
    <h3 style="font-family: sans-serif; color:green; text-align:center; font-size: 20px;"><?php echo $record['s_title'] ?></h3>
  <div class="numbertext">2 / 3</div>
  <img src="<?php echo 'Admin/image/'.$record['s_image2'];?>" style="width:100%"; height="450px">
  <div class="text">
    <p style="background-color:lightblue; padding: 20px; font-family: sans-serif; color: lightslategrey;">
    <?php echo $record['s_story2'] ?>
    </p>
  </div>
</div>

<div class="mySlides fade">
    <h3 style="font-family: sans-serif; color:green; text-align:center; font-size: 20px;"><?php echo $record['s_moral'] ?></h3>
  <div class="numbertext">3 / 3</div>
  <img src="<?php echo 'Admin/image/'.$record['s_image3'];?>" style="width:100%"; height="450px">
  <div class="text">
    <p style="background-color:lightblue; padding: 20px; font-family: sans-serif; color:lightslategrey;">
    <?php echo $record['s_story3'] ?>
    </p>
  </div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
<!-- <script src="./app.js"></script> -->
</html> 