<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
1-Stampare a schermo il paragrafo e la sua lunghezza.
2-Una parola da censurare viene passata dall’utente tramite parametro GET.
3-Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php 
// scelgo paragrafo
$text = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente autem natus corporis tempora eveniet, ab nesciunt quod, temporibus a sequi dolor eius dolore commodi eum praesentium, repudiandae fuga? Aut, eos.";

// controllo la lunghezza
$textLen = strlen($text);

// creo la variabile da censurare
$censured = $_GET["censura"];

// creo paragrafo con censure 
$censuredText  = str_replace($censured, "***", $text);

// stampo lungezza paragrafo censurato
$censuredTextLen = strlen($censuredText);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <!-- testo originale -->
    <h4><?php echo $text ?></h4>
    <h5>Lunghezza: <?php echo $textLen?></h5>

    parola censurata: <?php echo $censured?>

    <!-- testo censurato -->
    <h4><?echo $censuredText?></h4>
    <h5>Lunghezza: <?php echo $censuredTextLen?></h5>

</body>
</html>