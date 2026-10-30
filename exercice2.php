<?php

$valeur = 2;

while ($valeur < 30) {
    if ($valeur == 15) {
        echo "<strong>$valeur</strong><br>"; // mis en valeur en gras
    } else {
        echo "$valeur<br>";
    }
    $valeur = $valeur + 3;
}
?>
