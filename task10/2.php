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
// SQL to select all data from the table
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 // Output data of each row
 while($row = $result->fetch_assoc()) {
 echo "Name: " . $row["name"]. " - Age: " . $row["age"]. "<br>";
 }
} else {
 echo "0 results";
}
$conn->close();
?>