<html lang="en">
<head>
 <title>Calculator</title>
</head>
<body>
 <h2>Calculator</h2>
 <form method="post">
 <label for="num1">Enter first number:</label>
 <input type="number" name="num1" id="num1" required><br><br>

 <label for="num2">Enter second number:</label>
 <input type="number" name="num2" id="num2" required><br><br>

 <input type="submit" name="submit" value="Calculate">
 </form>
 <?php
 class Calculator {
 private $num1;
 private $num2;

 public function __construct() {
 $this->num1 = 0;
 $this->num2 = 0;
 }

 public function setNumbers($num1, $num2) {
 $this->num1 = $num1;
 $this->num2 = $num2;
 }

 public function add() {
 return $this->num1 + $this->num2;
 }

 public function subtract() {
 return $this->num1 - $this->num2;
 }

 public function multiply() {
 return $this->num1 * $this->num2;
 }

 public function divide() {
 if ($this->num2 == 0) {
 return "Cannot divide by zero.";
 } else {
 return $this->num1 / $this->num2;
 }
 }
 }
 if (isset($_POST['submit'])) {
 $calculator = new Calculator(); // Create an instance of the Calculator class

 // Set the numbers from the form input
 $num1 = $_POST['num1'];
 $num2 = $_POST['num2'];
 $calculator->setNumbers((float)$num1, (float)$num2);
 echo "<h3>Results:</h3>";
 echo "Given two numbers are : " .$num1. " & ". $num2. "<br>";
 echo "Addition: " . $calculator->add() . "<br>";
 echo "Subtraction: " . $calculator->subtract() . "<br>";
 echo "Multiplication: " . $calculator->multiply() . "<br>";
 echo "Division: " . $calculator->divide() . "<br>";
 }
 ?>
</body>
</html>
