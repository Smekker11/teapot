<?php
header("HTTP/1.1 418 I'm a teapot");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>418 I'm a teapot</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="menu-container">
        <div class="error-container">
            <div class="error-code">418</div>
            <h1 class="error-title">I'm a teapot</h1>
            <p class="error-message">The HTCPCP server is brewing coffee,<br> not serving HTTP requests!</p>
            
            <hr style="border: none; height: 1px; background: rgba(255, 255, 255, 0.2); margin: 24px 0;">
            
            <strong>Hyper Text Coffee Pot Control Protocol Server: <br></strong>
            <p class="error-message"><?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE']); ?></p>
            <a href="index.php" class="back-button">Back to Server</a>
        </div>
    </div>
</body>
</html>