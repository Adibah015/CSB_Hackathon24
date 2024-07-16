<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Learn Hackathon</title>
    <link rel="stylesheet" href="css/style_am.css"/>
</head>
<body>
    <header class="classname">
        <nav>
            <a href="#" class="logo">
                <img src="image/logo1.png" height="35%" width="45%">
            </a>

            <ul class="menu">
                <li><a href="index1.php">Home</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="#">Sign in</a></li>
            </ul>
        </nav>
        
    </header>



    <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/crsl1.png" alt="Los Angeles" width="789" height="442">
      <div class="carousel-caption">
        <h3>Learn from Expert!</h3>
        <p>We have many experts in hackathon who can help you with any problem.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/crsl2.png" alt="Chicago" width="789" height="442">
      <div class="carousel-caption">
        <h3>Easy Problemset.</h3>
        <p>There are small problems on different topics for the begginers.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/crsl3.png" alt="New York" width="789" height="442">
      <div class="carousel-caption">
        <h3>Participate!</h3>
        <p>We arrange begginer friendly and regular Hackathons. Participate, Learn and Win!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    



    <footer class="contact"> 
        <div class="contact-heading">
            <h1>Leave a comment</h1>
            <p>We would like to hear your thought!</p>
        </div>
        <form action="usercomment.php" method="post">
            <input type="text" name="user" placeholder="Your username"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </footer>
</body>
</html>