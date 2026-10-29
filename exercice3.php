<?php
// Exercice 3 : Table de multiplication de 1 à 10
echo "<table border='1'>";

for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>
