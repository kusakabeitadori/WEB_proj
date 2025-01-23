
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

setcookie("nom","norbert",time()+365*24*30600);
setcookie("pays","TOGO",time()+365*24*30600);
echo $_COOKIE["nom"];
echo $_COOKIE["color"];

?>
<a href="deconnexion.php">deconnect</a>
</body>
</html>
