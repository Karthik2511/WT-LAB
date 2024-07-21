<?php
function isPalindrome($number) {
 // Convert the number to a string to make it easier to work with
 $numberStr = strval($number);

 // Get the length of the number
 $length = strlen($numberStr);

 // Compare characters from both ends of the string
 for ($i = 0; $i < $length / 2; $i++) {
 if ($numberStr[$i] != $numberStr[$length - $i - 1]) {
 return false; // If characters don't match, it's not a palindrome
 }
 }

 return true; // If the loop completes, it's a palindrome
}
// Test the function
$number = 12321;
if (isPalindrome($number)) {
 echo "$number is a palindrome.";
} else {
 echo "$number is not a palindrome.";
}
?>