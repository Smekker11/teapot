<?php
function tea(){
    $location = '/error.php';
    header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . $location);
}
if (isset($_GET['tea'])) {
    tea();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTCPCP Server</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="menu-container">
        <div class="menu-header">
            <img class="menu-image" src="coffee-pot.png" alt="Coffee Pot">
            <h1 class="menu-title">HTCPCP Server</h1>
            <p class="menu-subtitle">Hyper Text Coffee Pot Control Protocol</p>
        </div>
        <hr style="border: none; height: 1px; background: rgba(255, 255, 255, 0.2); margin: 24px 0;">
        <nav class="menu-items">
            <button class="menu-item primary" onclick="window.location.href='index.php?tea=true'">
                BREW
            </button>
            <a class="menu-item" href="https://tools.ietf.org/html/rfc2324" target="_blank">
                RFC 2324
            </a>
        </nav>
    </div>
</body>
</html>