<!-- Scrivere una pagina web che riceva in input via GET un numero di piano e un numero di stanza, e restituisca il nome dell'ospite in quella stanza. Utilizzare un array multidimensionale che abbia i piani al primo livello e i numeri di stanza al secondo, collegati al nome dell'ospite. -->



<?php

    echo "<html>" . PHP_EOL;
    echo "<head>" . PHP_EOL;
    echo "<link rel='stylesheet' href='style.css'>" . PHP_EOL;
    echo "<title>Esercicio</title>" . PHP_EOL;
    echo "</head>" . PHP_EOL;
    echo "<body>" . PHP_EOL;
    echo "<h1>Piano e stanza</h1>" . PHP_EOL;


$hotel = [
    1 => [
        1   =>  'Alessio',
        2   =>  'Francesco',
        3   =>  'Monika',
    ],

    2 => [
        4   =>  'Eric',
        5   =>  'Vincenzo',
        6   =>  'Rosalia'
    ],

    3 => [
        7   =>  'Paolo',
        8   =>  'Linda',
        9   =>  'Riccardo'
    ]
];


$piano = $_GET["piano"];
$stanza = $_GET["stanza"];
$nome = $hotel[$piano][$stanza];


echo "<p>Al piano " . $piano . " stanza " . $stanza . " c'è " . $nome . ".</p>";