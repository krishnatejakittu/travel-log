<?php
// error_reporting(-1);
//ini_set('display_errors', 'On');
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "register";

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$psd = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$psd')";
echo "$sql";
if ($conn->query($sql) === TRUE) {
    header("Location:login.html");
    die();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>