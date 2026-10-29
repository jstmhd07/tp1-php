<?php

function remplir($n) {
    $tableau = [];

    while (count($tableau) < $n) {
        $nombre = rand(1, 30);

       
    }

    return $tableau;
}

function somme($tableau) {
    $total = 0;

    foreach ($tableau as $valeur) {
        $total = $total + $valeur;
    }

    return $total;
}

function trier($tableau) {
    sort($tableau);
    return $tableau;
}

$n = 8;
$tab = remplir($n);

echo "<h3>Tableau généré :</h3>";
foreach ($tab as $v) {
    echo $v . " | ";
}

echo "<h3>Somme des éléments :</h3>";
echo somme($tab);

echo "<h3>Tableau trié (ordre croissant) :</h3>";
$tabTrie = trier($tab);
foreach ($tabTrie as $v) {
    echo $v . " | ";
}

?>
