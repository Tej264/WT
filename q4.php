<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <form method="post">
        Enter a non-negative integer: <input type="number" name="number">
        <input type="submit" value="Calculate">
    </form>
    <?php
    function factorial($n) {
        if ($n < 2) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["number"];
        if ($num >= 0) {
            echo "The factorial of $num is " . factorial($num) . ".";
        } else {
            echo "Please enter a non-negative integer.";
        }
    }
    ?>
</body>
</html>
