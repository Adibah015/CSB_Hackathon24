<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Hackathon</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <header class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png" height="35%" width="45%">
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="#">About</a></li>
                <li><a href="signin.php">Sign in</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Compete And Explore Your Potential</h1>
            <p>A beginer friendly Hackathon Guiding website to make the path easy for new coders</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </header>

     
    



    <section class="about">
        <div class="about-img">
            <img src="images/Hackathon.jpg">
        </div>

        <div class="about-text">
            <h2>What is Hackathon?</h2>
            <p>A hackathon is an event, typically lasting between 24 to 48 hours, where programmers, designers, project managers, and other stakeholders in software development collaborate intensively on software projects. </p>
            <button class="main-btn" onclick= "window.location.href='helping_files/readmore.php';">Read More</button>
        </div>
    </section>



    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="/images/webdev.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Web development integrates design, coding, and functionality to build interactive and user-friendly websites for various purposes.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/appdev.png"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>App development creates software applications for mobile or desktop platforms using languages like Java, Swift, or Python.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/blockchain.png"/>
                </div>
                <div class="f-text">
                    <h4>Blockchain</h4>
                    <p>Blockchain technology enables decentralized and secure peer-to-peer transactions and data storage across a distributed network of computers.</p>
                    <a href="#" class="main-btn">Check</a>
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