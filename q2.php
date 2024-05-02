<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>
    <form method="post">
        Enter a string: <input type="text" name="string">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["string"];
        if ($str == strrev($str)) {
            echo "The string '$str' is a palindrome.";
        } else {
            echo "The string '$str' is not a palindrome.";
        }
    }
    ?>
</body>
</html>
