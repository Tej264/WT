<?php
// Define a class for demonstration
class cwipedia {
 public function __construct() {
 echo "Object of class cwipedia created.";
 }
}
// Check if the class exists
if (class_exists('cwipedia')) {
 // Create an object of the class
 $ob = new cwipedia();
 echo "This is cwipedia.in";
} else {
 echo "The class cwipedia does not exist.";
}
?>
<?php
// Define a class for demonstration
class Example {
 public $property1;
 public function method1() {
 echo "Method 1 called.";
 }
 private function method2() {
 echo "Method 2 called.";
 }
}
// Check if the class exists
if (class_exists('Example')) {
 $obj = new Example();
 echo "This is cwipedia.in";
 // Check if a property exists
 if (property_exists($obj, 'property1')) {
 echo "Property 'property1' exists in the class.<br>";
 } else {
 echo "Property 'property1' does not exist in the class.<br>";
 }
 // Check if a method exists
 if (method_exists($obj, 'method1')) {
 echo "Method 'method1' exists in the class.<br>";
 } else {
 echo "Method 'method1' does not exist in the class.<br>";
 }
 // Trying to access private method which will throw error
 // if (method_exists($obj, 'method2')) {
 // echo "Method 'method2' exists in the class.";
 // } else {
 // echo "Method 'method2' does not exist in the class.";
 // }
} else {
 echo "The class Example does not exist.";
}
?>
