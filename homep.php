<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home Page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <h3 style="font-family: sans-serif; text-shadow: teal; line-height: 30px; color: #24e6bc;">Moral stories</h3>
        <a style="position: absolute; right: 30px; top: 28px; border-radius:10px 10px 10px 10px" class="button01" type="button" href="login/log.php" >Log In</a>
        <a style="position: absolute; right:120px; top: 28px; border-radius:10px 10px 10px 10px"  class="button01" href="Registration/register.php">Sign Up</a>
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

      </div>
      <br>
<div class="bs-example">
    <div class="container">
        <div class="row">
            <div class="card-columns">
                <div class="card">
                    <img src="https://www.kidsgen.com/moral_stories/images/annabel-and-cheese.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Annabel and Cheese</h5>
                        <a href="demo1.php" class="button" onclick="alert('Login for better experience')" style=" border-radius:10px 0 10px 0">View</a>
                        <p class="card-text"><small class="text-muted">Always make the most of what you've got.</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.tell-a-tale.com/wp-content/uploads/2016/02/The-Loyal-Mongoose-810x456-810x456.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">The Loyal Mongoose.</h5>
                        <a href="demo2.php" class="button" style=" border-radius:10px 0 10px 0">View</a>
                        <p class="card-text"><small class="text-muted">Think before you act.</small></p>
                    </div>
                </div>
                <div class="card p-3">
                    <blockquote class="blockquote mb-0 card-body">
                        <p>You don't find a happy life, you "MAKE IT".</p>
                        <footer class="blockquote-footer">
                            <small class="text-muted">Someone famous</small>
                        </footer>
                    </blockquote>
                </div>
               
                <div class="card bg-primary text-white text-center p-3">
                    <blockquote class="blockquote mb-0">
                        <p>Every child comes with the message that God is not yet discouraged of man.”</p>
                        <footer class="blockquote-footer text-white">
                            <small>Rabindranath Tagore</small>
                        </footer>
                    </blockquote>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Quote of the day!</h5>
                        <p class="card-text">Children see magic because they look for it</p>
                    </div>
                </div>
                
                <div class="card bg-primary text-white text-center p-3">
                    <blockquote class="blockquote mb-0">
                        <p>You can learn many things from children. How much patience you have, for instance.”</p>
                        <footer class="blockquote-footer text-white">
                            <small>Franklin P. Jones</small>
                        </footer>
                    </blockquote>
                </div>
    
                <div class="card">
                    <img src="https://www.kidsworldfun.com/images/story-contest/2016-2/boy-with-puppy.png" class="card-img-top" alt="jim and puppy" style="width: 55%;">
                    <div class="card-body">
                        <h5 class="card-title">Jim's Puppy</h5>
                        <a href="demo3.php" class="button" style=" border-radius:10px 0 10px 0">View</a>
                        <p class="card-text"><small class="text-muted">A best companion will always get you out of difficulties.</small></p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://storyworks.scholastic.com/content/dam/classroom-magazines/storyworks/issues/2019-20/030120/elephants-and-the-mice/STW05-202003-p20-Elephants.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">The Elephants and the Mice</h5>
                        <a href="demo4.php" class="button" style=" border-radius:10px 0 10px 0">View</a>
                        <p class="card-text"><small class="text-muted">A friend in need is a friend indeed.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>