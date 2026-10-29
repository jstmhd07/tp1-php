<?php

// Fonction permettant de remplir un tableau de taille n
// avec des nombres aléatoires pairs compris entre 1 et 30
function remplir($n) {
    $tableau = [];

    // On continue tant que le tableau n'a pas n éléments
    while (count($tableau) < $n) {
        $nombre = rand(1, 30); // Nombre aléatoire entre 1 et 30

        // Si le nombre est pair, on l'ajoute au tableau
        if ($nombre % 2 == 0) {
            $tableau[] = $nombre;
        }
    }

    return $tableau;
}

// --- Test de la fonction ---
$n = 8; // Vous pouvez changer la taille ici
$resultat = remplir($n);

echo "<h3>Tableau de $n nombres aléatoires pairs (entre 1 et 30) :</h3>";

// Affichage des éléments du tableau
foreach ($resultat as $valeur) {
    echo $valeur . " | ";
}

?>

