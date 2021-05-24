<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>heviya berxe</title>
    <link rel="stylesheet" href="index.html">

</head>
<body>

<?php
echo 'hallo';
?>


<?php
$tekst = 'Hello World!';
echo $tekst;
?>


<?php
$sVoornaam = 'Joren';
$sAchternaam = 'de Wit';
$x = 1;
$y = 2;
$z = 3;

$sNaam = $sVoornaam.' '.$sAchternaam;
echo $sNaam.'<br />';
echo $x.$y.$z;
?>

<?php
$iAantal = 10;
$fPrijs = 9.95;

$fSubtotaal = $iAantal * $fPrijs;
echo 'Subtotaal: '.$fSubtotaal.'<br />';

$fBtw = $fSubtotaal * 0.19;
$fTotaal = $fSubtotaal + $fBtw;
echo 'Totaal: '.$fTotaal;
?>


<?php
$sTekst = 'Hello World!'; // String
$iLeeftijd = 20; // Integer
$fPrijs = 135.75; // Float
$bCheck = true; // Boolean
?>


    
</body>
</html>