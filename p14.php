<!DOCTYPE html>
<html>
<head>
    <title>Floyd's Triangle</title>
</head>
<body>
    <?php
    $number = 1;
    for($i = 1; $i <= 4; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo $number . " ";
            $number++;
        }
        echo "<br>";
    }
    ?>
</body>
</html>
