<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn Hackathon</title>
    <link rel="stylesheet" href="css/style1.css"/>
</head>
<body>
    <header class="classname">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png" height="35%" width="45%">
            </a>

            <ul class="menu">
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="#">About</a></li>
                <li><a href="signin.php">Sign in</a></li>
            </ul>
        </nav>
        
    </header>

    



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