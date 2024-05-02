<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Client Information Display</title>
</head>
<body>
    <h1>Client Information</h1>
    <p><strong>Client IP Address:</strong> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    <p><strong>Browser Information:</strong> <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
    <p><strong>Protocol Used:</strong> <?php
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            echo 'HTTPS';
        } else {
            echo 'HTTP';
        }
    ?></p>
</body>
</html>
