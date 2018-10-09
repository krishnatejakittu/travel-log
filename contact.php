<?php
error_reporting(-1);
ini_set('display_errors', 'On');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "feedback";


$email = $_POST["email"];
$message = $_POST["message"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO feedback (email,message) VALUES ('$email','$message')";
if ($conn->query($sql) === TRUE) {
    header("Location:index.html");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>