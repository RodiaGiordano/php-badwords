<?php

$text_input = $_GET["text"];
$censored_word = $_GET["censored_word"];


$censored_text = str_replace($censored_word, "***", $text_input);

$text_character_count = strlen(trim($text_input));
$text_censored_character_count = strlen(trim($censored_text));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- js -->
    <script src="script.js" defer></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script></script>
    <title>Document</title>
</head>
<body>
    <main id="app">

        <h2>Il testo che ha inserito è:</h2>
        <p>
            <?php echo $text_input ?>
        </p>
        <sub>Il testo contiente <?php echo($text_character_count) ?> caratteri </sub>
        
        
        <h2>Il testo censurato è:</h2>
        <p v-if="show"><?php echo $text_input ?></p>

        <p v-else>
            <?php echo $censored_text ?>
        </p>



        <sub v-if="show" id="prova">Il testo contiene <?php echo($text_character_count) ?> caratteri</sub>
        <sub v-else id="prova">Il testo contiene <?php echo($text_censored_character_count) ?> caratteri</sub>
        <br>
        <button id="show" @mousedown="showWord" @mouseup="prova">Tieni premuto per mostrare</button>

        
        
    </main>

   
    
</body>
</html>