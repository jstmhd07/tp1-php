<?php
$produits = array(
    array("nom" => "Stylo", "prix" => 500),
    array("nom" => "Cahier", "prix" => 1500),
    array("nom" => "Sac", "prix" => 12000),
    array("nom" => "Clé USB", "prix" => 5000),
    array("nom" => "Souris", "prix" => 7500)
);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des produits</title>
</head>
<body>

<h2>Liste des produits</h2>

<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th>Produit</th>
        <th>Prix</th>
        <th>Action</th>
    </tr>

    <?php
    foreach ($produits as $produit) {
        echo "<tr>";
        echo "<td>" . $produit['nom'] . "</td>";
        echo "<td>" . number_format($produit['prix'], 0, ',', ' ') . " FCFA</td>";
        echo "<td>";
        echo "<form action='panier.php' method='POST'>";
        echo "<input type='hidden' name='nom' value='" . $produit['nom'] . "'>";
        echo "<input type='hidden' name='prix' value='" . $produit['prix'] . "'>";
        echo "<button type='submit' name='ajouter'>Ajouter au panier</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>

<br>

<a href="panier.php">Voir mon panier</a>

</body>
</html>
