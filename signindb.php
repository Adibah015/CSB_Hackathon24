<?php
$connection = mysqli_connect('localhost:3306', 'root');

mysqli_select_db($connection,"usercomment");

$user = $_POST['username'];
$password = $_POST['password'];

// Check if the data already exists
$query_check = "SELECT * FROM `userdata` WHERE `username`='$user' AND `password`='$password'";
$result_check = mysqli_query($connection, $query_check);

if (mysqli_num_rows($result_check) > 0) {
    // Data already exists, display warning message
   
    echo " welcome ";
    echo $user;
} else {
    // Data does not exist, proceed with insertion
    echo "Warning: username or password is wrong";
}


?>
