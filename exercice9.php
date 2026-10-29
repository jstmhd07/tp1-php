<?php
// Exercice 9 : Nombres pairs entre 0 et 100 avec les trois boucles

// 1. Boucle for
echo "<strong>Avec la boucle for :</strong><br>";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<br><br><strong>Avec la boucle while :</strong><br>";
$j = 0;
while ($j <= 100) {
    if ($j % 2 == 0) {
        echo $j . " ";
    }
    $j++;
}

echo "<br><br><strong>Avec la boucle do...while :</strong><br>";
$k = 0;
do {
    if ($k % 2 == 0) {
        echo $k . " ";
    }
    $k++;
} while ($k <= 100);
?>
