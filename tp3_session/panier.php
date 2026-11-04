<?php
session_start();

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = array();
}

if (isset($_POST['ajouter'])) {
    $_SESSION['panier'][] = array(
        "nom" => $_POST['nom'],
        "prix" => $_POST['prix']
    );

    header("Location: panier.php");
    exit;
}

$total = 0;

foreach ($_SESSION['panier'] as $produit) {
    $total = $total + $produit['prix'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon panier</title>
</head>
<body>

<h2>Mon panier</h2>

<table border="1" cellpadding="6" cellspacing="0">
    <tr>
        <th>N°</th>
        <th>Produit</th>
        <th>Prix</th>
        <th>Action</th>
    </tr>

    <?php
    if (count($_SESSION['panier']) == 0) {
        echo "<tr><td colspan='4'>Le panier est vide.</td></tr>";
    }

    $numero = 1;

    foreach ($_SESSION['panier'] as $indice => $produit) {
        echo "<tr>";
        echo "<td>" . $numero . "</td>";
        echo "<td>" . htmlspecialchars($produit['nom']) . "</td>";
        echo "<td>" . number_format($produit['prix'], 0, ',', ' ') . " FCFA</td>";
        echo "<td>";
        echo "<form action='supprimer.php' method='POST'>";
        echo "<input type='hidden' name='indice' value='" . $indice . "'>";
        echo "<button type='submit'>Supprimer</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";

        $numero = $numero + 1;
    }
    ?>
</table>

<h3>Total : <?php echo number_format($total, 0, ',', ' '); ?> FCFA</h3>

<form action="vider.php" method="POST">
    <button type="submit">Vider le panier</button>
</form>

<br>

<a href="index.php">Retour aux produits</a>

</body>
</html>
