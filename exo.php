<?php

function remplir($n) {
    $tableau = [];

    while (count($tableau) < $n) {
        $nombre = rand(1, 30);

        if ($nombre % 2 == 0) {
            $tableau[] = $nombre;
        }
    }

    return $tableau;
}

$n = 8;
$resultat = remplir($n);

echo "<h3>Tableau de $n nombres aléatoires pairs (entre 1 et 30) :</h3>";

foreach ($resultat as $valeur) {
    echo $valeur . " | ";
}

?>
