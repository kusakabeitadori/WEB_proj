<?php
session_start();
echo $_SESSION["nom"];
echo $_SESSION["color"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="essaie.php">les donnees </a>
</body>
</html>