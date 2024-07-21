<?php
// Set the default timezone
date_default_timezone_set('UTC');
$currentDate = date('Y-m-d');
$currentTime = date('H:i:s');
$currentDay = date('l');
echo "Current Date: $currentDate<br>";
echo "Current Time: $currentTime<br>";
echo "Current Day: $currentDay";
?>