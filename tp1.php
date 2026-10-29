<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>TP 1 - PHP</title>
</head>
<body>

<h1>TP 1 : Structures de contrôle et boucles</h1>
<p>Dr. Birane Koundoul - 2025/2026</p>
<hr>

<h2>Exercice 1 : Pyramide de chiffres</h2>
<?php
for ($i = 1; $i <= 7; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "<br>";
}
?>
<hr>

<h2>Exercice 2 : Boucle while</h2>
<?php
$valeur = 2;
while ($valeur < 30) {
    if ($valeur == 15) {
        echo "<strong>$valeur</strong><br>";
    } else {
        echo "$valeur<br>";
    }
    $valeur = $valeur + 3;
}
?>
<hr>

<h2>Exercice 3 : Table de multiplication 1 à 10</h2>
<?php
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
<hr>

<h2>Exercice 4 : Somme de deux nombres</h2>
<?php
$a = 15;
$b = 25;
$somme = $a + $b;
echo "La somme de $a et $b est : $somme";
?>
<hr>

<h2>Exercice 5 : Table de 3</h2>
<?php
echo "<table border='1'>";
for ($i = 1; $i <= 10; $i++) {
    $res = 3 * $i;
    echo "<tr><td>3</td><td>X</td><td>$i</td><td>=</td><td>$res</td></tr>";
}
echo "</table>";
?>
<hr>

<h2>Exercice 6 : Majeur ou mineur</h2>
<?php
$age = 20;
if ($age > 18) {
    echo "Âge = $age : La personne est majeure.";
} else {
    echo "Âge = $age : La personne est mineure.";
}
?>
<hr>

<h2>Exercice 7 : Menu avec switch</h2>
<?php
$chiffre = 2;
switch ($chiffre) {
    case 1:
        echo "Option 1 : Pizza (8 €)";
        break;
    case 2:
        echo "Option 2 : Burger (10 €)";
        break;
    case 3:
        echo "Option 3 : Salade (6 €)";
        break;
    default:
        echo "Choix inconnu.";
        break;
}
?>
<hr>

<h2>Exercice 8 : Moyenne des nombres de 1 à 10</h2>
<?php
// Avec for
$somme1 = 0;
for ($i = 1; $i <= 10; $i++) {
    $somme1 = $somme1 + $i;
}
$moyenne1 = $somme1 / 10;
echo "Moyenne avec for : $moyenne1 <br>";

// Avec while
$somme2 = 0;
$j = 1;
while ($j <= 10) {
    $somme2 = $somme2 + $j;
    $j++;
}
$moyenne2 = $somme2 / 10;
echo "Moyenne avec while : $moyenne2";
?>
<hr>

<h2>Exercice 9 : Nombres pairs de 0 à 100</h2>
<?php
echo "<strong>Boucle for :</strong><br>";
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<br><br><strong>Boucle while :</strong><br>";
$j = 0;
while ($j <= 100) {
    if ($j % 2 == 0) {
        echo $j . " ";
    }
    $j++;
}

echo "<br><br><strong>Boucle do...while :</strong><br>";
$k = 0;
do {
    if ($k % 2 == 0) {
        echo $k . " ";
    }
    $k++;
} while ($k <= 100);
?>
<hr>

<h2>Exercice 10 : Triangle d'étoiles</h2>
<?php
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
<hr>

<h2>Exercice 11 : Haut du sapin (cône sur 6 lignes)</h2>
<?php
echo "<pre>";
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= (6 - $i); $j++) {
        echo " ";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "\n";
}
echo "</pre>";
?>

</body>
</html>

