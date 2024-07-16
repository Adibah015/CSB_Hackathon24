<?php

$connection = mysqli_connect('localhost:3306','root');

mysqli_select_db($connection,"usercomment");

$user = $_POST['user'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `commentdata`(`username`,`email`,`message`) VALUES ('$user','$email','$message') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>

<html>
    <body>
        <a href="index.php">Back</a>
    </body>
</html>