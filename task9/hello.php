<?php
session_start();
// Check if the user is logged in
if(isset($_SESSION['name'])) {
 // Display the hello page
 echo "<h1>Hello, ".$_SESSION['name']."</h1>";
 echo "<p>Start Time: ".date('Y-m-d H:i:s', $_SESSION['start_time'])."</p>";
 echo "<a href='logout.php'>Logout</a>";
} else {
 // If not logged in, redirect to login page
 header("Location: ".$_SERVER['PHP_SELF']);
 exit;
}
?>
