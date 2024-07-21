<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <title>Logout</title>
</head>
<body>
 <h1>Thank You, <?php echo $_SESSION['name']; ?></h1>
 <?php
 // Calculate duration
 $startTime = $_SESSION['start_time'];
 $duration = time() - $startTime;
 $durationString = gmdate("H:i:s", $duration);
 echo "<p>You have been logged in for: ".$durationString."</p>";

 // Logout and destroy session
 session_unset();
 session_destroy();
 ?>
</body>
</html>
