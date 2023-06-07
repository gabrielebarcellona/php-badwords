<?php
$word = $_GET['word'];
$text =  $_GET['text'];
$testo_censurato = str_replace($word, '***', $text,)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>PAROLE</h1>
        <h2>Testo originale</h2>
        <p><?= $text ?></p>
        <h3>il testo originale ha <?= strlen($text) ?>parole</h3>


        <h2>testo censurato</h2>
        <p><?= $testo_censurato ?></p>
        <h3>il testo censurato ha<?= strlen($text) ?> parole</h3>
    </div>
</body>

</html>