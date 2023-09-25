<?php

$text_input = $_GET["text"];
$censored_word = $_GET["censored_word"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Il testo che ha inserito è:</h2>
    <p>
        <?php echo $text_input ?>
    </p>
        <sub>Il testo contiente   caratteri </sub>

    
    <h2>Il testo censurato è:</h2>
    <p>
        <?php echo $censored_word ?>
    </p>
    <sub>Il testo contiene   caratteri</sub>

    
</body>
</html>