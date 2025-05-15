<!-- Scrivere una pagina web che, dato il nome di una capitale europea via GET, restituisca in output il nome dello stato relativo. Utilizzare un array associativo per archiviare i nomi delle città in coppia con i relativi stati e leggere la città richiesta da $_GET. -->
<?php

    echo "<html>" . PHP_EOL;
    echo "<head>" . PHP_EOL;
    echo "<link rel='stylesheet' href='style.css'>" . PHP_EOL;
    echo "<title>Esercicio</title>" . PHP_EOL;
    echo "</head>" . PHP_EOL;
    echo "<body>" . PHP_EOL;
    echo "<h1>Capitale Europea - Stato</h1>" . PHP_EOL;

    $capitali = [
        "Roma" => "Italia",
        "Parigi" => "Francia",
        "Berlino" => "Germania",
        "Madrid" => "Spagna",
        "Londra" => "Regno Unito",
        "Lisbona" => "Portogallo",
        "Vienna" => "Austria",
        "Bruxelles" => "Belgio",
        "Amsterdam" => "Paesi Bassi",
        "Atene" => "Grecia",
        "Varsavia" => "Polonia",
        "Budapest" => "Ungheria",
        "Praga" => "Repubblica Ceca",
    ];

    $capitale = $_GET["capitale"];
    $stato = $capitali[$capitale];

    echo "<p><strong>" . $capitale . "</strong> è la capitale, mentre <strong>" . $stato . "</strong> è lo stato.</p>";
    

"</body>" . PHP_EOL;
"</html>" . PHP_EOL;