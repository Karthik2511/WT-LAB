<?php
// Check if the "List Cookies" button is clicked
if (isset($_POST['listCookies'])) {
 // Check if there are any cookies set
 if (count($_COOKIE) > 0) {
 echo "<h2>Existing Cookies:</h2>";
 echo "<ul>";
 // Loop through all cookies and display them
 foreach ($_COOKIE as $name => $value) {
 echo "<li>$name: $value</li>";
 }
 echo "</ul>";
 } else {
 echo "<p>No cookies found.</p>";
 }
 // Set new cookies if necessary
 if (!isset($_COOKIE['example_cookie'])) {
 $cookie_name = "example_cookie";
 $cookie_value = "This is an example cookie.";
 setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
 echo "<p>New cookie set: $cookie_name</p>";
 }
}
?>