<?php
error_reporting(-1);
ini_set('display_errors', 'On');

session_start();


$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "register";

$email = $_POST["email"];
$pwd = $_POST["pass"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  * FROM users WHERE email LIKE '$email' and password LIKE '$pwd'";
$result = $conn->query($sql);

if (($result->num_rows) == 1) {
    header("Location:index.html");
    $_SESSION['email'] = $email;
} else {
    header("Location:register.html");
    die();
}

$conn->close();
?> 
