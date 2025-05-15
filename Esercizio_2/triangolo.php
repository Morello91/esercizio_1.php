<!-- Scrivere una pagina web che riceva in input via GET tre numeri a, b e c e calcoli l'area del triangolo rettangolo avente rispettivamente a e b come cateti e c come ipotenusa. -->





<?php

// $a = null;
// $b = null;
// $c = null;

$altezza = $_GET["a"];
$base = $_GET["b"];
// $ipotenusa = $_GET["i"];

echo "<html>" . PHP_EOL;
echo "<head>" . PHP_EOL;
echo "<link rel='stylesheet' href='style.css'>" . PHP_EOL;
echo "<title>Esercicio</title>" . PHP_EOL;
echo "</head>" . PHP_EOL;
echo "<body>" . PHP_EOL;
echo "<h1>Area del triangolo rettangolo</h1>" . PHP_EOL;

echo "<p>L'area del triangolo è: " . $altezza * $base / 2 . "</p>" . PHP_EOL; 

$ipotenusa = round(sqrt($altezza**2 + $base**2));

echo "<p>L'ipotenusa del rettangolo è: " . $ipotenusa . "</p>" . PHP_EOL;

echo "</body>" . PHP_EOL;
echo "</html>" . PHP_EOL;