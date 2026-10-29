<?php
// Exercice 11 : Haut du sapin (cône sur 6 lignes avec double boucle)
echo "<pre>";

for ($i = 1; $i <= 6; $i++) {
    // Boucle pour les espaces
    for ($j = 1; $j <= (6 - $i); $j++) {
        echo " ";
    }
    // Boucle pour les étoiles (nombres impairs : 1, 3, 5, 7, 9, 11)
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n";
}

echo "</pre>";
?>
