<?php
$servername = "php24-db-1";  // sometimes it can be "shell.hamk.fi"
$username = "app1"; // using root and pasword as password is not good
$password = "password";
$dbname = "app1";

// creating database connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

?>