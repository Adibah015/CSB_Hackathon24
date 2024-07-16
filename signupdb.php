<?php

$connection = mysqli_connect('localhost:3306','root');

mysqli_select_db($connection,"usercomment");

$user = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO `userdata`(`username`,`email`,`password`) VALUES ('$user','$email','$password') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>

<html>
    <body>
        <a href="index.php">Back</a>
    </body>
</html>