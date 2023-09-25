<?php

$name = $_GET["name"];
$password = $_GET["password"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Il nome da te scelto è:</h2>
    <?php echo $name ?>
    
    <h2>la password da te scelta è</h2>
    <?php echo $password ?>
    
</body>
</html>