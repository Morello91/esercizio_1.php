<?php 

    echo "<html>" . PHP_EOL;
    echo "<head>" . PHP_EOL;
    echo "<link rel='stylesheet' href='style.css'>" . PHP_EOL;
    echo "<title>Esercicio</title>" . PHP_EOL;
    echo "</head>" . PHP_EOL;
    echo "<body>" . PHP_EOL;
        

    $persona = array(
        'name'          => 'Alessio',
        'cognome'       => 'Morello',
        'soprannome'    => 'Moro',
        'eta'           =>  34,
        'luogo'         => 'Palermo',
        'citta'         => 'Bologna',
    );

    $musica = ['hip-hop', 'rap', 'classico', 'lirica'];

    echo '<h1>' . $persona['name'] . ' ' . $persona['cognome'] . '</h1><br>' . PHP_EOL;
    echo '<p>Ciao a tutti, mi chiamo ' . $persona['name'] . ' ' . $persona['cognome'] . ', per gli amici ' . $persona['soprannome'] . '.<br>' . PHP_EOL;
    echo 'Ho ' . $persona['eta'] . ' anni, sono nato a ' . $persona['luogo'] . ' ma vivo a ' . $persona['citta'] . ' da quando avevo 6 anni.<br>' . PHP_EOL;
    echo 'Il mio genere musicale preferito è ' . $musica[0] . '/' . $musica[1] . ', ma ascolto tranquillamente qualsiasi musica (purchè sia orecchiabile).</p><br>' . PHP_EOL;

    echo "</body>";
    echo "</html>";