<?php

$text = $_POST['text'];
$word = $_POST['word'];
$new_text = str_replace($word, '***' ,$text);

// var_dump($text, $word)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Badwords</title>
</head>
<body>
    <div class="container my-5 text-center">
        <div class="text">
            <h2>Testo:</h2>
            <p><?php  echo  $text  ?></p>
            <p>il tuo testo &egrave; di: <?php  echo  strlen($text)  ?> parole</p>
        </div>
        <div class="new-text">
            <h2>Testo:</h2>       
            <p><?php  echo  $new_text  ?></p>
            <p>il tuo testo &egrave; di: <?php  echo  strlen($new_text)  ?> parole</p>
        </div>

    </div>
</body>
</html>