<?php
// Exercice 8 : Moyenne des nombres de 1 à 10

// 1. Avec la boucle for
$somme_for = 0;
for ($i = 1; $i <= 10; $i++) {
    $somme_for = $somme_for + $i;
}
$moyenne_for = $somme_for / 10;
echo "Moyenne avec boucle for : $moyenne_for <br>";

// 2. Avec la boucle while
$somme_while = 0;
$j = 1;
while ($j <= 10) {
    $somme_while = $somme_while + $j;
    $j++;
}
$moyenne_while = $somme_while / 10;
echo "Moyenne avec boucle while : $moyenne_while";
?>
