<?php
session_start();
// Check if the user is logged in
if(isset($_SESSION['name'])) {
 // If logged in, calculate the duration of usage
 $startTime = $_SESSION['start_time'];
 $duration = time() - $startTime;
 $durationString = gmdate("H:i:s", $duration);

 // Logout and destroy session
 session_unset();
 session_destroy();
 // Display the logout page
 echo "<h1>Thank You, ".$_SESSION['name']."</h1>";
 echo "<p>You have been logged in for: ".$durationString."</p>";
} else {
 // If not logged in, display the login form
 if(isset($_POST['name'])) {
 // If form submitted, store name and start time in session
 $_SESSION['name'] = $_POST['name'];
 $_SESSION['start_time'] = time();

 // Redirect to hello page
 header("Location: hello.php");
 exit;
 } else {
 // Display the login form
 echo "<form method='post' action='".$_SERVER['PHP_SELF']."'>";
 echo "<label for='name'>Enter your name:</label><br>";
 echo "<input type='text' name='name'><br>";
 echo "<input type='submit' value='Submit'>";
 echo "</form>";
 }
}
?>