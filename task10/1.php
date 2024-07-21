<?php
// Database connection
$servername = "localhost";
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "my_database"; // Your MySQL database name
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
// Retrieve name and age from the form
$name = $_POST['name'];
$age = $_POST['age'];
// SQL to insert data into the table
$sql = "INSERT INTO users (name, age) VALUES ('$name', '$age')";
if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>