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
      <img src="image/crsl1.png" alt="Experts" width="789" height="442">
      <div class="carousel-caption">
        <h3>Learn from Expert!</h3>
        <p>We have many experts in hackathon who can help you with any problem.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/crsl2.png" alt="Problemsets" width="789" height="442">
      <div class="carousel-caption">
        <h3>Solve Easy Problems!</h3>
        <p>There are small problems on different topics for the begginers.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/crsl4.jpg" alt="Discuss" width="789" height="442">
      <div class="carousel-caption">
        <h3>Discuss with peers!</h3>
        <p>You can discuss about any topics with your peers.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/crsl3.png" alt="Participate" width="789" height="442">
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

<section class="firstcontent">
<div class="firstcontent-text">
  <h2>About our Platform</h2>
  <p>Want to turn your coding passion into reality? 
    Hackathon Hub empowers anyone, beginner or pro, to become a tech whiz. 
    We provide a dynamic community, expert guidance, and engaging challenges to fuel your coding journey.</p>
  <p>Here, you'll be surrounded by passionate peers, brainstorming alongside industry experts and mentors. 
    They'll share their knowledge and guide you through the exciting world of coding. 
    We offer beginner-friendly problem sets, a fun way to build confidence and coding fundamentals before tackling complex projects.</p>
    <p>As you progress, delve deeper with our comprehensive online courses tailored to your interests. 
      Learn new coding languages, frameworks, and development tools. But learning isn't solitary! 
      Our platform fosters a vibrant community. Connect with fellow coders, discuss ideas, share challenges, and learn from each other. 
      Build connections and find teammates for upcoming hackathons!</p>
      <p>We host exciting hackathons with engaging themes regularly. 
        Showcase your skills, collaborate with like-minded individuals, and bring your innovative ideas to life. 
        Hackathon Hub is your springboard for innovation. 
        We offer the resources, support, and inspiration to turn your coding dreams into reality. 
        Join us and unleash your inner coding genius!</p>
</div>
</section>

<section class="features1">
        <div class="feature1-container">

            <div class="feature1-box">
                <div class="f1-img">
                  <a href="qna.php"><img src="image/add1.jpg"/></a>
                </div>
            </div>

            <div class="feature1-box">
                <div class="f1-img">
                    <img src="image/add2.jpg"/>
                </div>
            </div>

            <div class="feature1-box">
                <div class="f1-img">
                    <img src="image/add3.jpg"/>
                </div>
            </div>

            <div class="feature1-box">
                <div class="f1-img">
                    <img src="image/add4.jpg"/>
                </div>
            </div>

            <div class="feature1-box">
                <div class="f1-img">
                    <img src="image/add5.jpg"/>
                </div>
            </div>

        </div>
    </section>

    



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