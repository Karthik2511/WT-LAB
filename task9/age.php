<?php
$name = $_POST['name'];
$age = $_POST['age'];
if ($age < 18) {
 echo "<h1>Hello, $name, you are not authorized to visit the site.</h1>";
} else {
 echo "<h1>Welcome to this site, $name!</h1>";
}
?>
