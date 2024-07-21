<?php
function sumOfDigits($number) {
 $sum = 0;
 $number = abs($number); // Make sure the number is positive

 while ($number > 0) {
 $digit = $number % 10; // Get the last digit
 $sum += $digit; // Add the digit to the sum
 $number = (int)($number / 10); // Remove the last digit
 }

 return $sum;
}
// Test the function
$number = 12345;
echo "The sum of the digits of $number is: " . sumOfDigits($number);
?>
