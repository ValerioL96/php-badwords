<?php
$text1 ="“Ricchezze, fama, potere. Un solo uomo è riuscito ad ottenere tutto ciò che si possa desiderare a questo mondo.
    Era Gold Roger, il Re dei Pirati.
    Le sue parole in punto di morte spinsero la gente a salpare”.";
$text2 ="“Il mio tesoro? Prendetelo pure se volete, cercatelo, chissà se qualcuno lo troverà!”";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badword</title>
</head>
<body>
    <main>
        <h1>
            One Piece
        </h1>
        <h2>
            <?php echo $text1 ?>
            lunghezza:
            <?php echo strlen($text1) ?>
        </h2>
        <p>
            Roger disse:
        </p>
        <p>
        <?php echo $text2 ?>
        lunghezza:
        <?php echo strlen($text2) ?>
        </p>
    </main>    
    
</body>
</html>