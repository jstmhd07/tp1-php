<?php
// Exercice 5 : Table de multiplication de 3 dans un tableau
echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++) {
    $resultat = 3 * $i;
    echo "<tr>";
    echo "<td>3</td>";
    echo "<td>X</td>";
    echo "<td>$i</td>";
    echo "<td>=</td>";
    echo "<td>$resultat</td>";
    echo "</tr>";
}

echo "</table>";
?>
