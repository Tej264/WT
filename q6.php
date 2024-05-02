<?php
if(isset($_COOKIE['visit_count'])) {
    $count = $_COOKIE['visit_count'] + 1;
} else {
    $count = 1;
}
setcookie('visit_count', $count, time() + 86400); // Cookie expires after 1 day
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Access Counter</title>
</head>
<body>
    <h1>Welcome to Our Website!</h1>
    <p>You have visited this page <?php echo $count; ?> times.</p>
</body>
</html>
