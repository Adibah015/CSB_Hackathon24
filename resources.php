<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Hackathon</title>
    <link rel="stylesheet" href="css/abid.css"/>
</head>
<body>
    <header class="resource_main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png" height="35%" width="45%">
            </a>

            <ul class="menu">
                <li><a href="index.php" >Home</a></li>
                <li><a href="#" class="active">Resources</a></li>
                <li><a href="#">About</a></li>
                <li><a href="signin.php">Sign in</a></li>
            </ul>
        </nav>


    </header>

    
    <section class="features">
        <div class="resource-feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="/images/webdev.png"/>
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Web development integrates design, coding, and functionality to build interactive and user-friendly websites for various purposes.</p>
                    <a href="helping_files\webdev.php" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/appdev.png"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>App development creates software applications for mobile or desktop platforms using languages like Java, Swift, or Python.</p>
                    <a href="helping_files/appdev.php" class="main-btn">Check</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/blockchain.png"/>
                </div>
                <div class="f-text">
                    <h4>Blockchain</h4>
                    <p>Blockchain technology enables decentralized and secure peer-to-peer transactions and data storage across a distributed network of computers.</p>
                    <a href="helping_files/blockchain.php" class="main-btn">Check</a>
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