<!DOCTYPE html>
<html>
<head>
 <title>Simple Calculator</title>
</head>
<body>
 <h2>Simple Calculator</h2>
 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 <input type="text" name="num1" placeholder="Enter first number" required>
 <select name="operator">
 <option value="add">+</option>
 <option value="subtract">-</option>
 <option value="multiply">*</option>
 <option value="divide">/</option>
 </select>
 <input type="text" name="num2" placeholder="Enter second number" required>
 <input type="submit" name="calculate" value="Calculate">
 </form>
 <?php
 // Check if the form is submitted
 if (isset($_POST['calculate'])) {
 // Retrieve form values
 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $operator = $_POST['operator'];
 // Perform calculation based on the selected operator
 switch ($operator) {
 case 'add':
 $result = $num1 + $num2;
 break;
 case 'subtract':
 $result = $num1 - $num2;
 break;
 case 'multiply':
 $result = $num1 * $num2;
 break;
 case 'divide':
 if ($num2 == 0) {
 $result = "Cannot divide by zero";
 } else {
 $result = $num1 / $num2;
 }
 break;
 default:
 $result = "Invalid operator";
 break;
 }
 // Display the result
 echo "<h3>Result: $result</h3>";
 }
 ?>
</body>
</html>
