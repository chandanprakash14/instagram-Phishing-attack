<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "mydatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$a = $_POST['username'];
$b=$_POST['password'];

$sql = "INSERT INTO customers (username, passwords) VALUES ('$a', '$b')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>