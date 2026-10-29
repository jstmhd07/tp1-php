<?php
// Exercice 7 : Menu avec choix d'un chiffre
$chiffre = 2; // Changer la valeur pour tester (1, 2 ou 3)

switch ($chiffre) {
    case 1:
        echo "Option 1 : Pizza (Prix: 8 €)";
        break;
    case 2:
        echo "Option 2 : Burger (Prix: 10 €)";
        break;
    case 3:
        echo "Option 3 : Salade (Prix: 6 €)";
        break;
    default:
        echo "Choix inconnu.";
        break;
}
?>
